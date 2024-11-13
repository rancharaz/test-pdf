<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use ZipArchive;
use Spatie\LaravelPdf\Facades\Pdf;

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
        /* maximum files */
        $maxFiles = 10;
        /* selected files */
        $selectedFiles = $request->input('files', []);

        if (count($selectedFiles) > $maxFiles) {
            return response()->json([
                'error' => 'Vous ne pouvez pas télécharger plus de ' . $maxFiles . ' fiches à la fois.'
            ], 400, [], JSON_UNESCAPED_UNICODE); // Ensures French characters are not escaped
        }

        /* max mb allowed */
        // Create a new ZIP archive
        $zip = new ZipArchive();
        $zipFileName = 'anomalie.zip';
        $tempZipPath = storage_path($zipFileName);

        if ($zip->open($tempZipPath, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
            return response()->json(['error' => 'Could not create ZIP file'], 500);
        }

        // Get the selected file IDs from the request
        $selectedFiles = $request->input('files', []);
        
        // Directory for storing downloaded PDFs temporarily
        $tempDirectory = storage_path('temp');
        if (!is_dir($tempDirectory)) {
            mkdir($tempDirectory, 0755, true);
        }

        // Loop through selected file IDs
        foreach ($selectedFiles as $fileId) {
            // Fetch the data corresponding to the selected file ID
            $data = $this->getDataById($fileId); // Fetch data based on ID

            if ($data) {
                $pdfPath = $tempDirectory . '/fiche-anomalie_' . $fileId . '.pdf'; // Save the PDF with a unique name

                try {
                    // Pass the fetched data to the PDF view
                    Pdf::view('anomalie.cv', ['data' => $data])
                    ->format('a5')
                    ->save($pdfPath);
                } catch (\Exception $e) {
                    return response()->json(['error' => 'Failed to create PDF for ID ' . $fileId . ': ' . $e->getMessage()], 500);
                }

                // Add the generated PDF to the ZIP archive
                if (file_exists($pdfPath)) {
                    $zip->addFile($pdfPath, basename($pdfPath));
                } else {
                    return response()->json(['error' => 'PDF file for ID ' . $fileId . ' not found'], 404);
                }
            } else {
                return response()->json(['error' => 'No data found for ID ' . $fileId], 404);
            }
        }

        $zip->close();

        // Return the ZIP file for download and delete after sending
        return Response::download($tempZipPath)->deleteFileAfterSend(true);
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
