<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Files to Download</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9fafb;
            /* Light background */
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-lg">
        <h1 class="text-2xl font-semibold text-center text-gray-800 mb-6">Select Files to Download</h1>
        <div class="container mx-auto p-8">
            <h1 class="text-3xl font-bold mb-4">Comments IDs</h1>
            
           
        </div>
        <form action="{{ route('download') }}" method="POST">
            @csrf

            <!-- CV Options -->
            <div class="flex items-center mb-4">
                <input type="checkbox" name="files[]" value="cv"
                    class="h-5 w-5 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                <label class="ml-2 text-gray-700">Anomalie (PDF)</label>
            </div>
            <button type="submit"
                class="w-full bg-indigo-600 text-white font-semibold py-2 rounded hover:bg-indigo-500 transition duration-200">
                Telecharger anomalie
            </button>
        </form>
    </div>
</body>

</html>