<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - HeartSense</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #1d4ed8;
            --gray: #e2e8f0;
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
            background: linear-gradient(135deg, #d5e3ff 0%, #f4f7ff 100%);
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
            margin-bottom: 1.5rem;
            color: var(--primary);
            font-weight: 600;
        }

        .logo img {
            width: 36px;
        }

        h2 {
            margin: 0;
            color: #0f172a;
        }

        p {
            margin: 0.35rem 0 1.75rem;
            color: #64748b;
        }

        label {
            display: block;
            font-size: 0.9rem;
            margin-bottom: 0.35rem;
            color: #475569;
        }

        input {
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
            margin-top: 0.5rem;
        }

        button[type="submit"]:hover {
            transform: translateY(-2px);
        }

        .social {
            display: flex;
            justify-content: center;
            gap: 1.2rem;
            margin-top: 1.5rem;
        }

        .social button {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            border: 1px solid var(--gray);
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .bottom-links {
            margin-top: 1.25rem;
            text-align: center;
            font-size: 0.9rem;
        }

        .bottom-links a {
            color: var(--primary);
            font-weight: 500;
            text-decoration: none;
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
            <h2>Login to your Account</h2>
            <p>Daftar untuk memulai perjalanan deteksi risiko jantung Anda.</p>

            <form method="POST" action="{{ route('register.store') }}">
                @csrf

                <label for="name">Name</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    autofocus
                >
                @error('name')
                    <div style="color:#dc2626;font-size:0.85rem;margin-top:-0.75rem;margin-bottom:0.75rem;">{{ $message }}</div>
                @enderror

                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                >
                @error('email')
                    <div style="color:#dc2626;font-size:0.85rem;margin-top:-0.75rem;margin-bottom:0.75rem;">{{ $message }}</div>
                @enderror

                <label for="phone">Phone Number</label>
                <input
                    type="text"
                    id="phone"
                    name="phone"
                    placeholder="+62 ..."
                    value="{{ old('phone') }}"
                >
                @error('phone')
                    <div style="color:#dc2626;font-size:0.85rem;margin-top:-0.75rem;margin-bottom:0.75rem;">{{ $message }}</div>
                @enderror

                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                    autocomplete="new-password"
                >
                @error('password')
                    <div style="color:#dc2626;font-size:0.85rem;margin-top:-0.75rem;margin-bottom:0.75rem;">{{ $message }}</div>
                @enderror

                <label for="password_confirmation">Confirm Password</label>
                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                >

                <button type="submit">Register</button>
            </form>

            <div class="social">
                <button type="button">
                    <img src="https://cdn-icons-png.flaticon.com/512/300/300221.png" alt="Google" width="22">
                </button>
                <button type="button">
                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968764.png" alt="Facebook" width="22">
                </button>
                <button type="button">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter" width="22">
                </button>
            </div>

            <div class="bottom-links">
                Sudah punya akun?
                <a href="{{ route('login') }}">Sign in</a>
                atau <a href="{{ route('auth.choose') }}">kembali</a>
            </div>
        </div>
    </div>
</body>
</html>

