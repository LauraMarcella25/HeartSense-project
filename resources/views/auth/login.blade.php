<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - HeartSense</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #1d4ed8;
            --gray: #e2e8f0;
            --text: #0f172a;
        }

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
            padding: 1.5rem;
        }

        .auth-shell {
            background: #fff;
            width: min(1100px, 100%);
            border-radius: 32px;
            box-shadow: 0 40px 70px rgba(15, 23, 42, 0.15);
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            overflow: hidden;
        }

        .auth-artwork {
            background: linear-gradient(135deg, #cee0ff 0%, #f0f4ff 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .auth-artwork img {
            width: 100%;
            max-width: 440px;
        }

        .auth-panel {
            padding: 3rem;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 2rem;
            color: var(--primary);
            font-weight: 600;
        }

        .logo img {
            width: 36px;
        }

        h2 {
            margin: 0 0 0.5rem;
            color: var(--text);
        }

        p {
            margin: 0 0 1.75rem;
            color: #64748b;
        }

        label {
            display: block;
            font-size: 0.9rem;
            margin-bottom: 0.35rem;
            color: #475569;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.9rem 1rem;
            border-radius: 12px;
            border: 1px solid var(--gray);
            margin-bottom: 1rem;
            font-size: 1rem;
            transition: border-color 0.2s;
        }

        input:focus {
            outline: none;
            border-color: var(--primary);
        }

        .remember {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
        }

        button[type="submit"] {
            width: 100%;
            padding: 0.95rem;
            border: none;
            border-radius: 12px;
            background: var(--primary);
            color: #fff;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: transform 0.2s;
        }

        button[type="submit"]:hover {
            transform: translateY(-2px);
        }

        .bottom-links {
            margin-top: 1.25rem;
            text-align: center;
            font-size: 0.9rem;
        }

        .bottom-links a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }

        @media (max-width: 720px) {
            .auth-panel {
                padding: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="auth-shell">
        <div class="auth-artwork">
            <img src="gambarawal.png" alt="HeartSense illustration">
        </div>
        <div class="auth-panel">
            <div class="logo">
                <img src="logokita.png" alt="HeartSense">
                HeartSense
            </div>
            <h2>Sign in to your account</h2>
            <p>Masuk untuk melanjutkan prediksi risiko jantung Anda.</p>

            @if (session('status'))
                <div style="background:#dcfce7;color:#166534;padding:0.75rem 1rem;border-radius:12px;margin-bottom:1rem;">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login.store') }}">
                @csrf

                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                    class="@error('email') error @enderror"
                >
                @error('email')
                    <div style="color:#dc2626;font-size:0.85rem;margin-top:-0.75rem;margin-bottom:0.75rem;">{{ $message }}</div>
                @enderror

                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                    class="@error('password') error @enderror"
                >
                @error('password')
                    <div style="color:#dc2626;font-size:0.85rem;margin-top:-0.75rem;margin-bottom:0.75rem;">{{ $message }}</div>
                @enderror

                <div class="remember">
                    <label style="display:flex;align-items:center;gap:0.4rem;margin:0;">
                        <input type="checkbox" name="remember" value="1">
                        Ingat saya
                    </label>
                    <a href="{{ route('password.request') }}">Lupa kata sandi?</a>
                </div>

                <button type="submit">Sign in</button>
            </form>

            <div class="bottom-links">
                Belum punya akun?
                <a href="{{ route('register') }}">Register</a>
                atau <a href="{{ route('auth.choose') }}">kembali</a>
            </div>
        </div>
    </div>
</body>
</html>

