<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #232F3E;
            padding: 10px;
            color: white;
            text-align: center;
        }

        nav {
            background-color: #131A22;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }

        .content {
            padding: 20px;
            text-align: center;
        }

        .product {
            display: inline-block;
            width: 200px;
            margin: 10px;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
        }

        footer {
            background-color: #232F3E;
            color: white;
            text-align: center;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Encabezado -->
    <header>
    
    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Logo de amazon">
    <h1>Amazon</h1>
    </header>

    <!-- Menú de navegación -->
    <nav>
        <a href="#">Inicio</a>
        <a href="#">Categorías</a>
        <a href="#">Ofertas</a>
        <a href="#">Mi cuenta</a>
    </nav>

    <!-- Contenido principal -->
    <div class="content">
        <h2>Productos recomendados</h2>

        <?php
        // Simulación de productos
        $products = [
            ["nombre" => "Producto 1", "precio" => 199.99],
            ["nombre" => "Producto 2", "precio" => 299.99],
            ["nombre" => "Producto 3", "precio" => 99.99],
            ["nombre" => "Producto 4", "precio" => 499.99]
        ];

        // Mostrar productos
        foreach ($products as $product) {
            echo "<div class='product'>";
            echo "<h3>{$product['nombre']}</h3>";
            echo "<p>Precio: {$product['precio']} MXN</p>";
            echo "<button>Añadir al carrito</button>";
            echo "</div>";
        }
        ?>
    </div>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2024 Amazon - Todos los derechos reservados</p>
    </footer>
</body>
</html>
