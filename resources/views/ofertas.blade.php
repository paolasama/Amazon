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
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Encabezado principal */
        h1 {
            font-size: 2.5rem;
            color: #ff9900;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        /* Texto descriptivo */
        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            text-align: center;
            line-height: 1.6;
            color: #666;
        }

        /* Contenedor de las ofertas */
        .offers {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            max-width: 1200px;
        }

        /* Tarjeta de oferta */
        .offer-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 250px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .offer-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Imagen de la oferta */
        .offer-card img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Detalles de la oferta */
        .offer-details {
            padding: 15px;
            text-align: center;
        }

        .offer-details h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #333;
        }

        .offer-details p {
            font-size: 1rem;
            color: #777;
            margin-bottom: 15px;
        }

        /* Botón de acción */
        .offer-details a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff9900;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .offer-details a:hover {
            background-color: #cc7a00;
        }
    </style>
</head>
<body>
    <h1>Ofertas en Tendencia</h1>
    <p>Aprovecha nuestras ofertas más populares y encuentra productos increíbles a precios irresistibles.</p>

    <div class="offers">
        <!-- Tarjetas de ofertas -->
        <div class="offer-card">
            <img src="https://via.placeholder.com/250x150?text=Oferta+1" alt="Oferta 1">
            <div class="offer-details">
                <h3>Producto 1</h3>
                <p>$19.99</p>
                <a href="compra">Comprar ahora</a>
            </div>
        </div>

        <div class="offer-card">
            <img src="https://via.placeholder.com/250x150?text=Oferta+2" alt="Oferta 2">
            <div class="offer-details">
                <h3>Producto 2</h3>
                <p>$39.99</p>
                <a href="compra">Comprar ahora</a>
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
    </div>
</body>
</html>

