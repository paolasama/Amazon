<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Amazon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            justify-content: flex-start;
            height: 100vh;
            margin: 0;
            padding-top:20px;
        }

         .logo-container {
            margin-bottom: 0;
        }

        .logo-container img {
            max-width: 120px;
        }

        .login-container {
            background-color: white;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 350px;
            text-align: center;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .login-container img {
            width: 100px;
            margin-bottom: 20px;
        }

        .login-container h2 {
            font-size: 24px;
            margin-bottom: 15px;
            text-align: left;
        }

        .login-container input[type="email"],
        .login-container input[type="password"],
        .login-container button {
            width: 95%; 
            padding: 8px; 
            margin: 10px auto; 
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 0.9em; 
        }

        .login-container input[type="email"],
        .login-container input[type="password"]  {
            margin-bottom: 20px;
        }

        .login-container button {
            background-color: #f0c14b;
            border-color: #a88734;
            color: #111;
            cursor: pointer;
        }

        .login-container button:hover {
            background-color: #e2b03a;
        }

        .login-container a {
            color: #007185;
            text-decoration: none;
            font-size: 12px;
        }

        .login-container a:hover {
            text-decoration: underline;
        }

        .small-text {
            font-size: 12px;
            color: #555;
            margin-top: 15px;
        }

        .small-text a {
            font-size: 12px;
        }

        .divider {
            margin: 20px 0;
            border-bottom: 1px solid #ddd;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #555;
            margin-top: 20px;
        }

        .footer a {
            color: #0066c0;
            margin: 0 10px;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
        .boton{
            background-color: white;
            color: #111;
            border: 1px solid #d0d3d4 ;
            padding: 10px;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.9em; 
        }
    </style>
</head>
<body>
     <!-- Imagen del logo pegada arriba -->
    <div class="logo-container">
        <a href="{{ route('welcome') }}"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Logo de Amazon"></a>
    </div>

    <div class="login-container">
        
        <h2>Iniciar sesión</h2>
        <form method="POST" action="{{ route('login') }}">
        @csrf

            <label for="email">Número de celular o correo electrónico</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">

            <!-- Password -->
            <label for="password">Contraseña</label>
            <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Debe tener al menos 8 caracteres">

            <button type="submit">Continuar</button>

            <div class="small-text">
                Al continuar, aceptas las <a href="#">Condiciones de uso</a> y el <a href="#">Aviso de privacidad</a> de Amazon.
            </div>

            <div class="divider"></div>

            <a href="#">¿Necesitas ayuda?</a>

            <div class="divider"></div>

            <div class="small-text">
                ¿Estás haciendo compras para el trabajo?<br>
                <a href="#">Compra en Amazon Business</a>
            </div>

            <div class="divider"></div>

            
        </form>
    </div>

            <div class="small-text">
                ¿Eres nuevo en Amazon?<br>
                <a href="{{ route('register') }}"><input class="boton" type="submit" value="Crear tu cuenta de Amazon"></a>
            </div>

    <div class="footer">
        <a href="#">Condiciones de uso</a>
        <a href="#">Aviso de Privacidad</a>
        <a href="#">Ayuda</a>
        <p>© 1996-2024, Amazon.com, Inc. o sus afiliados</p>
    </div>

</body>
</html>
