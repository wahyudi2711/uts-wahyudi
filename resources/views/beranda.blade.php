<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
            margin-bottom: 20px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .logout-link {
            margin-top: 20px;
            font-size: 14px;
            color: #4caf50;
            text-decoration: none;
        }

        .logout-link:hover {
            color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>SELAMAT DATANG
            Di Dashboard</h1>
        <h1>WAHYUDI: 2157401037</h1>
        
        <a href="/logout" class="logout-link"><button>Logout</button></a>
    </div>
</body>
</html>
