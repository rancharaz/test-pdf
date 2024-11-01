<?php

namespace App\Http\Controllers;
use App\Models\Anomalies;
use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function dataFromJson()
    {
        // Retrieve all books from the database
        $jsonFilePath = storage_path('app/data.json');

        if (!file_exists($jsonFilePath)) {
            abort(404, 'JSON file not found.');
        }
    
        $jsonContent = file_get_contents($jsonFilePath);
    
        $data = json_decode($jsonContent, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            abort(500, 'Error decoding JSON.');
        }
    
        return view('test-json', ['data' => $data]);
    }
}
