<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas en Tendencia</title>
    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilos del cuerpo */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f0f0;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            padding: 20px;
        }

        /* Encabezado principal */
        h1 {
            font-size: 3rem;
            color: #ff5722;
            text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
            text-align: center;
        }

        /* Texto descriptivo */
        p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            text-align: center;
            line-height: 1.6;
            color: #666;
            max-width: 900px;
        }

        /* Contenedor de las ofertas */
        .offers {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1200px;
            width: 100%;
        }

        /* Tarjeta de oferta */
        .offer-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .offer-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        /* Imagen de la oferta */
        .offer-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 15px 15px 0 0;
        }

        /* Detalles de la oferta */
        .offer-details {
            padding: 20px;
            text-align: center;
        }

        .offer-details h3 {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .offer-details p {
            font-size: 1.1rem;
            color: #777;
            margin-bottom: 20px;
        }

        /* Botón de acción */
        .offer-details a {
            display: inline-block;
            padding: 12px 24px;
            background-color: #ff5722;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .offer-details a:hover {
            background-color: #e64a19;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <h1>Ofertas en Tendencia</h1>
    <p>Aprovecha nuestras ofertas más populares y encuentra productos increíbles a precios irresistibles. ¡No te lo puedes perder!</p>

    <div class="offers">
        <!-- Tarjetas de ofertas -->
        <div class="offer-card">
            <img src="https://via.placeholder.com/250x150?text=Oferta+1" alt="Oferta 1">
            <div class="offer-details">
                <h3>Producto 1</h3>
                <p>$19.99</p>
                <a href="#">Comprar ahora</a>
            </div>
        </div>

        <div class="offer-card">
            <img src="https://via.placeholder.com/250x150?text=Oferta+2" alt="Oferta 2">
            <div class="offer-details">
                <h3>Producto 2</h3>
                <p>$39.99</p>
                <a href="#">Comprar ahora</a>
            </div>
        </div>

        <div class="offer-card">
            <img src="https://via.placeholder.com/250x150?text=Oferta+3" alt="Oferta 3">
            <div class="offer-details">
                <h3>Producto 3</h3>
                <p>$24.99</p>
                <a href="#">Comprar ahora</a>
            </div>
        </div>

        <div class="offer-card">
            <img src="https://via.placeholder.com/250x150?text=Oferta+4" alt="Oferta 4">
            <div class="offer-details">
                <h3>Producto 4</h3>
                <p>$29.99</p>
                <a href="#">Comprar ahora</a>
            </div>
        </div>

        <div class="offer-card">
            <img src="https://via.placeholder.com/250x150?text=Oferta+5" alt="Oferta 5">
            <div class="offer-details">
                <h3>Producto 5</h3>
                <p>$49.99</p>
                <a href="#">Comprar ahora</a>
            </div>
        </div>

        <div class="offer-card">
            <img src="https://via.placeholder.com/250x150?text=Oferta+6" alt="Oferta 6">
            <div class="offer-details">
                <h3>Producto 6</h3>
                <p>$59.99</p>
                <a href="#">Comprar ahora</a>
            </div>
        </div>

        <div class="offer-card">
            <img src="https://via.placeholder.com/250x150?text=Oferta+7" alt="Oferta 7">
            <div class="offer-details">
                <h3>Producto 7</h3>
                <p>$69.99</p>
                <a href="#">Comprar ahora</a>
            </div>
        </div>

        <div class="offer-card">
            <img src="https://via.placeholder.com/250x150?text=Oferta+8" alt="Oferta 8">
            <div class="offer-details">
                <h3>Producto 8</h3>
                <p>$79.99</p>
                <a href="#">Comprar ahora</a>
            </div>
        </div>
    </div>
</body>
</html>
