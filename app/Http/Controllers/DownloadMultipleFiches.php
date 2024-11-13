<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use ZipArchive;
use Spatie\LaravelPdf\Facades\Pdf;
use Illuminate\Support\Facades\Storage;

class DownloadMultipleFiches extends Controller
{
    public function showComments()
    {
        $jsonFilePath = storage_path('demo/data.json');

        if (!file_exists($jsonFilePath)) {
            abort(404, 'JSON file not found.');
        }

        $jsonContent = file_get_contents($jsonFilePath);
        $data = json_decode($jsonContent, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            abort(500, 'Error decoding JSON.');
        }

        return view('test', ['comments' => $data]); // Pass the comments to the view
    }

    public function download(Request $request)
    {
        // Max number of files that can be selected
        $maxFiles = 10;
        $selectedFiles = $request->input('files', []);
    
        // Ensure user has selected files within the allowed limit
        if (count($selectedFiles) > $maxFiles) {
            return response()->json([
                'error' => 'Vous ne pouvez pas télécharger plus de ' . $maxFiles . ' fiches à la fois.'
            ], 400, [], JSON_UNESCAPED_UNICODE); // Ensures French characters are not escaped
        }
    
        // Create a new ZIP archive in memory
        $zip = new ZipArchive();
        $zipFileName = 'anomalie.zip';
    
        // Prepare in-memory ZIP archive
        $zipContents = fopen('php://memory', 'r+');
        $tempZipPath = storage_path($zipFileName);
        if ($zip->open($tempZipPath, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
            return response()->json(['error' => 'Could not create ZIP file'], 500);
        }
    
        // Loop through selected file IDs to generate PDFs and add to ZIP
        foreach ($selectedFiles as $fileId) {
            $data = $this->getDataById($fileId); // Fetch data based on ID
    
            if ($data) {
                try {
                    // Generate the PDF in memory and return it as a string
                    $pdfContent = Pdf::view('anomalie.cv', ['data' => $data])
                        ->format('a5')
                        ->output(); // `output` generates the PDF content as a string
    
                    // Add the PDF content directly to the ZIP archive
                    $zip->addFromString('fiche-anomalie_' . $fileId . '.pdf', $pdfContent);
                } catch (\Exception $e) {
                    return response()->json(['error' => 'Failed to create PDF for ID ' . $fileId . ': ' . $e->getMessage()], 500);
                }
            } else {
                return response()->json(['error' => 'No data found for ID ' . $fileId], 404);
            }
        }
    
        // Close the ZIP archive
        $zip->close();
    
        // Prepare the in-memory ZIP for upload to SFTP
        rewind($zipContents); // Rewind the memory pointer to the beginning of the file
    
        // Path where the file will be uploaded on the SFTP server
        $sftpPath = 'pdf-download/' . $zipFileName;
    
        // Upload the zip file to SFTP
        if (Storage::disk('sftp')->put($sftpPath, $zipContents)) {
            // Optionally delete local temp files after upload (there are no local temp files in this case)
    
            // Assuming your server can serve the file over HTTP, construct the URL
            $httpUrl = 'https://dev.gerobamaster.fr/pdf-download/' . $zipFileName;  // Example HTTP URL
    
            // Provide the HTTP or SFTP link based on your needs
            return response()->json([
                'message' => 'Files uploaded successfully.',
                'url' => $httpUrl, // HTTP URL for the user to download the ZIP file
                // Alternatively, if you want to give the user SFTP details:
                'ftp_details' => [
                    'host' => env('SFTP_HOST'),
                    'username' => env('SFTP_USERNAME'),
                    'password' => env('SFTP_PASSWORD'),
                    'path' => $sftpPath, // Path where the file is uploaded on SFTP server
                ],
            ]);
        } else {
            // Handle the case where upload to SFTP fails
            return response()->json(['error' => 'Failed to upload ZIP to SFTP'], 500);
        }
    }
    

    // Method to retrieve data by ID from the JSON file
    protected function getDataById($id)
    {
        $jsonFilePath = storage_path('demo/data.json');

        // Check if the file exists
        if (!file_exists($jsonFilePath)) {
            return null; 
        }

        $jsonContent = file_get_contents($jsonFilePath);
        $data = json_decode($jsonContent, true);

        if (json_last_error() !== JSON_ERROR_NONE || !is_array($data)) {
            return null; 
        }

        // Find the specific item by ID
        $item = collect($data)->firstWhere('id', $id);
        return $item ?: null; 
    }

    public function showDataById($id)
    {
        $jsonFilePath = storage_path('demo/data.json');

        // Check if the file exists
        if (!file_exists($jsonFilePath)) {
            abort(404, 'JSON file not found.');
        }
        
        $jsonContent = file_get_contents($jsonFilePath);
        $data = json_decode($jsonContent, true);

        if (json_last_error() !== JSON_ERROR_NONE || !is_array($data)) {
            abort(500, 'Error decoding JSON or empty data.');
        }

        // Find the specific item by ID
        $item = collect($data)->firstWhere('id', $id);
        if (!$item) {
            abort(404, 'Data not found for ID: ' . $id);
        }
        return view('show-data', ['item' => $item]);
    }
}
