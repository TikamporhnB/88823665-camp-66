<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">
    <div class="container">
        <h1 class="text-center">Multiplication Table for {{ $number }}</h1>
        
        <table class="table table-bordered mt-4">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Multiplication</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($multiplicationTable as $index => $result)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $result }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ url('/mycontroller') }}" class="btn btn-secondary mt-4">Go Back</a>
    </div>
</body>
</html>
