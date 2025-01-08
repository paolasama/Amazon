<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorar Showroom</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
        }
        header .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .container {
            padding: 20px;
        }
        .showroom-title {
            font-size: 32px;
            text-align: center;
            margin-bottom: 20px;
            color: #34495e;
        }
        .products-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .product-item {
            background-color: white;
            padding: 15px;
            width: 250px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            transition: transform 0.3s;
        }
        .product-item:hover {
            transform: translateY(-5px);
        }
        .product-item img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .product-item h3 {
            font-size: 20px;
            margin: 10px 0;
            color: #333;
        }
        .product-item p {
            font-size: 14px;
            color: #555;
        }
        .product-item button {
            padding: 10px 15px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .product-item button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">Explorar Showroom</div>
</header>

<div class="container">
    <h1 class="showroom-title">Bienvenido a Nuestro Showroom</h1>
    <p>Explora nuestra selección de productos exclusivos.</p>

    <div class="products-grid">
        <div class="product-item">
            <img src="./img/laptop.jpg" alt="Producto 1">
            <h3>Producto 1</h3>
            <p>Descripción del producto 1.</p>
            <button>Ver detalles</button>
        </div>
        <div class="product-item">
            <img src="./img/cafeterakeurig.webp" alt="Producto 2">
            <h3>Producto 2</h3>
            <p>Descripción del producto 2.</p>
            <button>Ver detalles</button>
        </div>
        <div class="product-item">
            <img src="./img/rompe.webp" alt="Producto 3">
            <h3>Producto 3</h3>
            <p>Descripción del producto 3.</p>
            <button>Ver detalles</button>
        </div>
        <div class="product-item">
            <img src="./img/fut.webp" alt="Producto 4">
            <h3>Producto 4</h3>
            <p>Descripción del producto 4.</p>
            <button>Ver detalles</button>
        </div>
        <!-- Agregar más productos aquí -->
    </div>
</div>

</body>
</html>
