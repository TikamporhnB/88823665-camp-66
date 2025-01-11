<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">
    <div class="container">
        <h1 class="text-center">Multiplication Table Form</h1>
        
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ url('/mycontroller') }}" method="post" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="myinput" class="form-label">Enter a Number:</label>
                <input type="number" name="myinput" id="myinput" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Generate Table</button>
        </form>
    </div>
</body>
</html>
