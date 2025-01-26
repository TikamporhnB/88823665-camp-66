<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Error Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fa;
            color: #333;
            display: flex;
            justify-content: center;
        }

        .container {
            text-align: center;
            margin-top: 50px;
            width: 100%;
            max-width: 600px;
        }

        .error-code {
            font-size: 96px;
            color: #fbbd00;
        }

        .error-message {
            font-size: 24px;
            margin: 10px 0;
        }

        .error-description {
            margin: 10px 0 20px;
            font-size: 16px;
            color: #666;
        }

        .search-bar {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .search-bar input {
            width: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
            outline: none;
        }

        .search-bar button {
            padding: 10px;
            border: none;
            background-color: #fbbd00;
            color: #fff;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }

        .search-bar button:hover {
            background-color: #ffa500;
        }

        .links {
            font-size: 14px;
        }

        .links a {
            color: #007bff;
            text-decoration: none;
        }

        .links a:hover {
            text-decoration: underline;
        }

        .breadcrumb {
            font-size: 12px;
            color: #666;
            margin-top: 20px;
        }

        .breadcrumb a {
            color: #007bff;
            text-decoration: none;
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="error-code">404</div>
        <div class="error-message">Oops! Page not found.</div>
        <div class="error-description">
            We could not find the page you were looking for. Meanwhile, you may
            <a href="/dashboard">return to dashboard</a> or try using the search form.
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search">
            <button>🔍</button>
        </div>
        <div class="breadcrumb">
            <a href="/">Home</a> / 404 Error Page
        </div>
    </div>
</body>
</html>
