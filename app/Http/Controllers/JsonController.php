<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function dataFromJson()
    {
        $jsonFilePath = storage_path('demo/data.json');

        if (!file_exists($jsonFilePath)) {
            abort(404, 'JSON file not found.');
        }

        $jsonContent = file_get_contents($jsonFilePath);
        $data = json_decode($jsonContent, true);
        if (json_last_error() !== JSON_ERROR_NONE || !is_array($data)) {
            abort(500, 'Error decoding JSON or empty data.');
        }
        return view('test-json', ['data' => $data]);
    }
    public function showDataById($id) {
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

public function showData(Request $request)
{
    $id = $request->input('id');

    // Define the path to the JSON file
    $jsonFilePath = storage_path('demo/data.json');

    // Check if the file exists
    if (!file_exists($jsonFilePath)) {
        abort(404, 'JSON file not found.');
    }

    // Get the file content
    $jsonContent = file_get_contents($jsonFilePath);
    $data = json_decode($jsonContent, true);

    // Find the specific item by ID
    $item = collect($data)->firstWhere('id', $id);

    // Check if the item exists
    if (!$item) {
        return redirect()->back()->with('error', 'Data not found for ID: ' . $id);
    }

    // Pass the item to the view
    return view('show-data', ['item' => $item]);
}
    
}
