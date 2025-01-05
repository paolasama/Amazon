<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }
        header {
            background-color: #232f3e;
            color: white;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            font-size: 2em;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
            color: #232f3e;
        }
        ul {
            list-style: none;
            padding-left: 0;
        }
        li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        li:last-child {
            border-bottom: none;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #ff9900;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #e68900;
        }
        p {
            text-align: center;
            font-size: 1.1em;
            color: #666;
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #232f3e;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Carrito de Compras</h1>
    </header>

    <div class="container">
        @if(!empty($carrito) && is_array($carrito) && count($carrito) > 0)
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
