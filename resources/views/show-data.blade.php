<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signalement Details</title>
</head>
<body>
    <h1>Signalement Details</h1>

    <!-- Display Anomaly Name -->
    <p><strong>Anomaly Name:</strong> {{ $anomaly_name }}</p>

    <!-- Optionally, display other details from the item -->
    <p><strong>Client Name:</strong> {{ $item['signalement']['client_name'] }}</p>
    <p><strong>Type of Anomaly:</strong> {{ $item['signalement']['anomaly'] }}</p>
    
    <!-- Display Images if available -->
    @if(!empty($item['signalement']['anomaly_images']))
        <p><strong>Image:</strong></p>
        <img src="{{ asset('storage/' . $item['signalement']['anomaly_images'][0]['src']) }}" alt="Anomaly Image">
    @endif

    <!-- Go Back Button -->
    <a href="{{ url()->previous() }}">Go Back</a>
</body>
</html>
