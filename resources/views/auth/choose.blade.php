<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HeartSense - Get Started</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: #f5f7fb;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .card {
            background: #fff;
            border-radius: 32px;
            padding: 2rem;
            box-shadow: 0 30px 60px rgba(15, 23, 42, 0.12);
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            align-items: center;
            width: min(1100px, 100%);
        }

        .artwork img {
            width: 100%;
            max-width: 420px;
            display: block;
            margin: 0 auto;
        }

        .actions {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 600;
            color: #1d4ed8;
        }

        .logo img {
            width: 32px;
        }

        .btn {
            width: 260px;
            padding: 0.85rem 1.5rem;
            border-radius: 999px;
            border: 2px solid #e2e8f0;
            background: #fff;
            font-weight: 600;
            color: #0f172a;
            text-decoration: none;
            text-align: center;
            transition: all 0.2s;
        }

        .btn.primary {
            background: #1d4ed8;
            color: #fff;
            border-color: #1d4ed8;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 25px rgba(15, 23, 42, 0.12);
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="artwork">
            <img src="gambarawal.png" alt="Heart art">
        </div>
        <div class="actions">
            <div class="logo">
                <img src="logokita.png" alt="HeartSense">
                HeartSense
            </div>
            <a class="btn" href="{{ route('login') }}">Sign in</a>
            <a class="btn primary" href="{{ route('register') }}">Register</a>
        </div>
    </div>
</body>
</html>

