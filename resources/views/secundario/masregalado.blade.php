<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lo Más Regalado</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        /* Header */
        .header {
            background-color: #ff9900;
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

        /* Most Gifted Items Grid */
        .gifted-items {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .item {
            width: calc(33.333% - 20px);
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
            transition: transform 0.3s;
        }
        .item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .item img {
            width: 100%;
            height: auto;
        }
        .item .details {
            padding: 15px;
            text-align: center;
        }
        .item .details h3 {
            font-size: 1.2em;
            margin-bottom: 10px;
            color: #333;
        }
        .item .details p {
            font-size: 1em;
            color: #777;
        }
        .item .details .price {
            font-size: 1.2em;
            font-weight: bold;
            color: #ff9900;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 10px;
            margin-top: 30px;
            background-color: #ff9900;
            color: white;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <h1>Lo Más Regalado</h1>
        <p>Descubre los productos más populares y perfectos para regalar.</p>
    </div>

    <!-- Main Content -->
    <div class="main">
        <div class="gifted-items">
            <!-- Item 1 -->
            <div class="item">
                <img src="./img/altavoz.webp" alt="Smart Speaker">
                <div class="details">
                    <h3>Altavoz Inteligente</h3>
                    <p>Ideal para hogares conectados.</p>
                    <p class="price">$89</p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="item">
                <img src="./img/cafetera.webp" alt="Coffee Maker">
                <div class="details">
                    <h3>Cafetera Moderna</h3>
                    <p>El regalo perfecto para los amantes del café.</p>
                    <p class="price">$129</p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="item">
                <img src="./img/uno.webp" alt="Board Game">
                <div class="details">
                    <h3>Juego de Mesa</h3>
                    <p>Diversión para toda la familia.</p>
                    <p class="price">$45</p>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="item">
                <img src="./img/audifonoHD.webp" alt="Noise Cancelling Headphones">
                <div class="details">
                    <h3>Audífonos Cancelación de Ruido</h3>
                    <p>Perfectos para música y trabajo.</p>
                    <p class="price">$199</p>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="item">
                <img src="./img/cocina.webp" alt="Cookware Set">
                <div class="details">
                    <h3>Juego de Cocina</h3>
                    <p>Un regalo elegante y funcional.</p>
                    <p class="price">$75</p>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="item">
                <img src="./img/Kindle.webp" alt="E-Reader">
                <div class="details">
                    <h3>Lectura Electrónica</h3>
                    <p>Para los amantes de los libros.</p>
                    <p class="price">$129</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>¡Encuentra el regalo perfecto hoy!</p>
    </div>

</body>
</html>
