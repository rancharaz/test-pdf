<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use ZipArchive;
use Spatie\LaravelPdf\Facades\Pdf;

class DownloadMultipleFiches extends Controller
{
    
    public function download(Request $request)
    {
        // Create a new ZIP archive
        $zip = new ZipArchive();
        $zipFileName = 'anomalie.zip';
        $tempZipPath = storage_path($zipFileName);
    
        if ($zip->open($tempZipPath, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
            return response()->json(['error' => 'Could not create ZIP file'], 500);
        }
    
        // Get the selected files from the request
        $selectedFiles = $request->input('files', []);
        
        // Directory for storing downloaded PDFs temporarily
        $tempDirectory = storage_path('temp'); // Adjust if needed
        if (!is_dir($tempDirectory)) {
            mkdir($tempDirectory, 0755, true); // Create the directory if it doesn't exist
        }
    
        // Loop through selected files
        foreach ($selectedFiles as $file) {
            if ($file === 'cv') {
                $pdfPath = $tempDirectory . '/cv.pdf'; // Save the CV PDF
                try {
                    Pdf::view('anomalie.cv')->save($pdfPath); // Reference the CV view
                } catch (\Exception $e) {
                    return response()->json(['error' => 'Failed to create PDF for CV: ' . $e->getMessage()], 500);
                }
    
                if (file_exists($pdfPath)) {
                    $zip->addFile($pdfPath, basename($pdfPath)); // Add CV PDF to ZIP
                }
            }
        }
    
        $zip->close();
    
        // Return the ZIP file for download and delete after sending
        return Response::download($tempZipPath)->deleteFileAfterSend(true);
    }
    
    
}
