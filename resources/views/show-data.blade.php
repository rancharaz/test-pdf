<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Data Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: {{ $item['id'] }}</h5>
                <p><strong>Name:</strong> {{ $item['name'] }}</p>
                <p><strong>Email:</strong> {{ $item['email'] }}</p>
                <p><strong>Body:</strong> {{ $item['body'] }}</p>
            </div>
        </div>
        <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">Go Back</a>
    </div>
</body>
</html>