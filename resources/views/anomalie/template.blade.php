<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9fafb;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-lg">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Entry Details</h1>

        <div class="mb-4">
            <h2 class="text-xl font-semibold">Id: {{ $entry['id'] }}</h2>
            <p class="text-gray-700"><strong>Name:</strong> {{ $entry['name'] }}</p>
            <p class="text-gray-700"><strong>Email:</strong> {{ $entry['email'] }}</p>
            <p class="text-gray-700"><strong>Body:</strong> {{ $entry['body'] }}</p>
        </div>

        <a href="{{ route('select.files') }}" class="text-indigo-600 hover:underline">Back to selection</a>
    </div>
</body>
</html>
