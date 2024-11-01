<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DownloadMultipleFiches;
use Spatie\LaravelPdf\Facades\Pdf;

// Main route to welcome page
Route::get('/', function () {
    return view('welcome');
});

// Route to the file selection page
Route::get('/test', function () {
    $directoryPath = storage_path('demo'); // Adjust this path as needed
    $files = array_diff(scandir($directoryPath), ['.', '..']); // Get all files in the directory
    return view('test', compact('files')); // Pass files to the view
})->name('file.select');

// Route to handle the download of selected files
Route::post('download', [DownloadMultipleFiches::class, 'download'])->name('download');

// Route to display the CV page
Route::get('/cv', [DownloadMultipleFiches::class, 'show'])->name('cv.page');

// Route to download the CV as a PDF (if needed, adjust this as per your logic)
Route::get('cv-download', function() {
    $pdfPath = storage_path('demo/cv.pdf'); // Save the PDF to this location
    Pdf::view('anomalie.cv')->save($pdfPath); // Adjust path to your actual Blade view
    return response()->download($pdfPath)->deleteFileAfterSend(true);
})->name('cv.download');

// Optional: If you want to handle another submission for downloading, consider clarifying its purpose
// Route::post('cv-download', [DownloadMultipleFiches::class, 'download']);

 