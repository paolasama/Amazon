<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
</head>
<body>
    <header>
        <h1>Carrito de Compras</h1>
    </header>

    <div class="container">
        @if(count($carrito) > 0)
            <h2>Productos en tu carrito</h2>
            <ul>
                @foreach($carrito as $producto)
                    <li>{{ $producto['nombre'] }} - ${{ $producto['precio'] }}</li>
                @endforeach
            </ul>
            <a href="#">Finalizar Compra</a>
        @else
            <p>Tu carrito está vacío.</p>
        @endif
    </div>

    <footer>
        <p>&copy; 2024 Amazon | Todos los derechos reservados</p>
    </footer>
</body>
</html>
