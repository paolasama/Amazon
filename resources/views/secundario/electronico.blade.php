<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electrónicos</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Header */
        .header {
            background-color: #1a73e8;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .header h1 {
            font-size: 2.5em;
        }
        .header p {
            font-size: 1.2em;
        }

        /* Main Content */
        .main {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Product Grid */
        .products {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product {
            width: calc(33.333% - 20px);
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
            transition: transform 0.3s;
        }
        .product:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .product img {
            width: 100%;
            height: auto;
        }
        .product .details {
            padding: 15px;
            text-align: center;
        }
        .product .details h3 {
            font-size: 1.2em;
            margin-bottom: 10px;
            color: #333;
        }
        .product .details p {
            font-size: 1em;
            color: #777;
        }
        .product .details .price {
            font-size: 1.2em;
            font-weight: bold;
            color: #1a73e8;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 10px;
            margin-top: 30px;
            background-color: #1a73e8;
            color: white;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <h1>Electrónicos</h1>
        <p>Descubre la última tecnología en dispositivos electrónicos.</p>
    </div>

    <!-- Main Content -->
    <div class="main">
        <div class="products">
            <!-- Product 1 -->
            <div class="product">
                <img src="https://via.placeholder.com/300x200?text=Smartphone" alt="Smartphone">
                <div class="details">
                    <h3>Smartphone 5G</h3>
                    <p>Rendimiento rápido y conectividad avanzada.</p>
                    <p class="price">$799</p>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product">
                <img src="https://via.placeholder.com/300x200?text=Laptop" alt="Laptop">
                <div class="details">
                    <h3>Laptop Ultraligera</h3>
                    <p>Potencia y portabilidad en un solo dispositivo.</p>
                    <p class="price">$1,299</p>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product">
                <img src="https://via.placeholder.com/300x200?text=Smartwatch" alt="Smartwatch">
                <div class="details">
                    <h3>Smartwatch Deportivo</h3>
                    <p>Monitoreo avanzado de salud y actividad.</p>
                    <p class="price">$199</p>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product">
                <img src="https://via.placeholder.com/300x200?text=Headphones" alt="Headphones">
                <div class="details">
                    <h3>Auriculares Inalámbricos</h3>
                    <p>Sonido de alta calidad sin cables.</p>
                    <p class="price">$99</p>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="product">
                <img src="https://via.placeholder.com/300x200?text=Camera" alt="Camera">
                <div class="details">
                    <h3>Cámara Digital</h3>
                    <p>Captura tus momentos con claridad.</p>
                    <p class="price">$499</p>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="product">
                <img src="https://via.placeholder.com/300x200?text=Gaming+Console" alt="Gaming Console">
                <div class="details">
                    <h3>Consola de Videojuegos</h3>
                    <p>Entretenimiento sin límites para toda la familia.</p>
                    <p class="price">$399</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>Explora la mejor tecnología en electrónicos y haz tu vida más fácil.</p>
    </div>

</body>
</html>
