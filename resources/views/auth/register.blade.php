<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding-top: 20px;
        }

        /* Estilo para la imagen del logo */
        .logo-container {
            margin-bottom: 0;
        }

        .logo-container img {
            max-width: 120px;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 350px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            text-align: center;
            margin-top: 10px;
        }

        .form-container h1 {
            font-size: 1.5em; 
            margin-top:0px;
            margin-bottom: 10px;
            text-align: left;
        }

        .form-container label {
            display: block;
            margin-bottom: 0px;
            font-weight: bold;
            text-align: left;
            font-size: 0.9em; 
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"] {
            width: 95%; 
            padding: 8px;
            margin: 10px auto;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 0.9em; 
        }

        .form-container input[type="submit"] {
            background-color: #f0c14b;
            color: #111;
            border: 1px solid #a88734;
            padding: 10px;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.9em;
        }

        .form-container input[type="submit"]:hover {
            background-color: #e2b543;
        }

        .form-container .small-text {
            text-align: left;
            margin-top: 10px;
            font-size: 0.8em; 
        }

        .form-container .small-text a {
            color: #0066c0;
            text-decoration: none;
        }

        a{
            color: #0066c0;
        }
        .form-container .small-text a:hover {
            text-decoration: underline;
        }

        .texto{
            margin-bottom: 5px;
            text-align: left;
            font-size: 0.8em; 
        }

    </style>
</head>
<body>

    <!-- Imagen del logo pegada arriba -->
    <div class="logo-container">
        <a href="{{ route('welcome') }}"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Logo de Amazon"></a>
    </div>

    <div class="form-container">
        <h1>Crear cuenta</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nombre -->
            <label for="name">Nombre</label>
            <input id="name" type="text" name="name" placeholder="Nombre y apellido" required autofocus autocomplete="name" onfocus="showMessage('nameMessage')" onblur="hideMessage('nameMessage')">
            <small id="nameMessage" style="display: none; color: red;">Ingresa al menos un caracter</small>

            <!-- Email Address -->
            <label for="email">Número de celular o correo electrónico</label>
            <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username">

            <!-- Password -->
            <label for="password">Contraseña</label>
            <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Debe tener al menos 8 caracteres">

            <!-- Confirm Password -->
            <label for="password_confirmation">Vuelve a escribir la contraseña</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">

            <!-- Submit Button -->
            <input type="submit" value="Continuar">
            <p class="texto">
                Al crear una cuenta, aceptas las <a href="">Condiciones de Uso</a> y el <a href="">Aviso de Privacidad</a> de Amazon
            </p>
            <br>
            <p class="texto">
                <strong>¿Estás haciendo compras para el trabajo?</strong>
                <span style="display: block; margin-bottom: 5px;"></span>
                <a href="">Crear una cuenta corporativa gratis</a>
            </p>
            <br>
            <div class="small-text">
                <p>¿Ya tienes una cuenta? <a href="{{ route('login') }}">Iniciar sesión</a></p>
            </div>
        </form>
    </div>

</body>
</html>
