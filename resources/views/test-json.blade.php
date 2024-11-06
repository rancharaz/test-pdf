<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data from JSON</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-5">Data from JSON</h1>
        <form action="{{ route('download') }}" method="POST">
            @csrf
            @if(is_array($data) && count($data) > 0)
            <ul class="space-y-2">
                @foreach($data as $item)
                <li class="flex justify-between items-center p-4 border rounded-lg shadow">
                    <div class="flex items-center">
                        <input type="checkbox" name="files[]" value="{{ $item['id'] }}"
                            class="h-5 w-5 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                        <span class="ml-2"><strong>ID:</strong> {{ $item['id'] }} || <strong>Name:</strong> {{ $item['name'] }}</span>
                    </div>
                    <a href="{{ url('/data/' . $item['id']) }}"
                        class="text-indigo-600 hover:underline">Show Data</a>
                </li>
                @endforeach
            </ul>
            @else
            <p class="text-gray-500">No data found.</p>
            @endif
            <div class="mt-4">
                <button type="submit"
                    class="w-full bg-indigo-600 text-white font-semibold py-2 rounded hover:bg-indigo-500 transition duration-200">
                    Téléchargez Anomalie
                </button>
            </div>
        </form>
    </div>

</body>

</html>
