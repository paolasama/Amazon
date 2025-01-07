<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Amazon</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex flex-column align-items-center pt-4">

    <!-- Logo -->
    <div class="mb-3">
        <a href="{{ route('home') }}">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Logo de Amazon" style="max-width: 120px;">
        </a>
    </div>

    <!-- Contenedor del formulario -->
    <div class="card shadow-sm p-4" style="width: 100%; max-width: 400px;">
        <h2 class="mb-4 text-start">Iniciar sesión</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Correo -->
            <div class="mb-3">
                <label for="email" class="form-label">Número de celular o correo electrónico</label>
                <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required autocomplete="username">
                @error('email')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Contraseña -->
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input id="password" type="password" name="password" class="form-control" placeholder="Debe tener al menos 8 caracteres" required autocomplete="current-password">
                @error('password')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Botón de continuar -->
            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-warning">Continuar</button>
            </div>

            <!-- Términos y condiciones -->
            <p class="small text-center">
                Al continuar, aceptas las <a href="{{ route('terms') }}" class="text-decoration-none">Condiciones de uso</a> y el <a href="{{ route('privacy') }}" class="text-decoration-none">Aviso de privacidad</a> de Amazon.
            </p>

            <!-- Ayuda -->
            <div class="text-center my-3">
                <a href="{{ route('help') }}" class="text-decoration-none">¿Necesitas ayuda?</a>
            </div>

            <!-- Amazon Business -->
            <div class="text-center small">
                ¿Estás haciendo compras para el trabajo?<br>
                <a href="{{ route('business') }}" class="text-decoration-none">Compra en Amazon Business</a>
            </div>
        </form>
    </div>

    <!-- Crear cuenta -->
    <div class="text-center mt-3">
        <p class="small">¿Eres nuevo en Amazon?</p>
        <a href="{{ route('register') }}" class="btn btn-outline-secondary w-100">Crear tu cuenta de Amazon</a>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-4 small">
        <a href="{{ route('terms') }}" class="text-decoration-none mx-2">Condiciones de uso</a>
        <a href="{{ route('privacy') }}" class="text-decoration-none mx-2">Aviso de privacidad</a>
        <a href="{{ route('help') }}" class="text-decoration-none mx-2">Ayuda</a>
        <p class="text-muted mt-2">© 1996-2024, Amazon.com, Inc. o sus afiliados</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

