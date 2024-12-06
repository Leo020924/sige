<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SIGE</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            background: #f0f4f7;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(5deg, #8b29fa, #2575fc);
            padding: 20px;
        }

        .login-box {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 380px;
            text-align: center;
            position: relative;
        }

        .login-box h1 {
            margin-bottom: 10px;
            font-size: 26px;
            color: #333;
        }

        .login-box h2 {
            margin-bottom: 20px;
            color: #555;
            font-size: 18px;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            font-size: 16px;
            color: #333;
            text-align: left;
            display: block;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border-radius: 8px;
            border: 1px solid #ddd;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .input-group input:focus {
            outline: none;
            border-color: #2575fc;
            box-shadow: 0 0 8px rgba(37, 117, 252, 0.3);
        }

        .btn {
            background-color: #2575fc;
            color: white;
            padding: 14px 20px;
            border-radius: 8px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #6a11cb;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .forgot-password {
            text-decoration: none;
            font-size: 14px;
            color: #2575fc;
            display: block;
            margin-top: 15px;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .signup-link {
            margin-top: 20px;
            font-size: 14px;
        }

        .signup-link a {
            color: #2575fc;
            text-decoration: none;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <h1>Iniciar sesión</h1>

            @if (session('success'))
                <div class="alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="error-message">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('loginn') }}" method="POST">
                @csrf
                <div class="input-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                </div>

                <div class="input-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>

                <button type="submit" class="btn">Iniciar sesión</button>
            </form>

            @if (Route::has('password.request'))
                <a class="forgot-password" href="{{ route('password.request') }}">
                    ¿Has olvidado tu contraseña?
                </a>
            @endif

            <!-- Enlace para redirigir a la página de registro -->
            <div class="signup-link">
                <p>¿No tienes una cuenta? <a href="{{ route('register') }}">Regístrate aquí</a></p>
            </div>
        </div>
    </div>
</body>

</html>
