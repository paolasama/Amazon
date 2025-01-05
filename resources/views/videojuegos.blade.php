<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos para Gamers</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        .header {
            background-color: #1e2a38;
            color: white;
            padding: 40px 20px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .header h1 {
            font-size: 42px;
            color: #ffcc00;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3);
        }
        .header p {
            font-size: 20px;
            color: #dddddd;
        }
        .btn-back {
            background-color: #1e2a38;
            color: white;
            border-radius: 4px;
            padding: 10px 20px;
            text-decoration: none;
            margin-top: 30px;
            transition: background-color 0.3s;
        }
        .btn-back:hover {
            background-color: #e94560;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            padding: 50px 10px;
        }
        .product {
            background-color: white;
            padding: 25px;
            margin: 15px;
            width: 250px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s;
            text-align: center;
            overflow: hidden;
            position: relative;
        }
        .product:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .product img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
        }
        .product h3 {
            font-size: 22px;
            color: #232f3e;
            margin-top: 15px;
        }
        .product p {
            font-size: 16px;
            color: #777;
            margin: 10px 0;
        }
        .product button {
            background-color: #ff9900;
            border: none;
            border-radius: 8px;
            color: white;
            padding: 12px;
            width: 100%;
            font-size: 18px;
            transition: background-color 0.3s;
        }
        .product button:hover {
            background-color: #e07b00;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 32px;
            }
            .product-container {
                padding: 20px;
            }
            .product {
                width: 220px;
            }
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <div class="header">
        <h1>Videojuegos para Gamers</h1>
        <p>Explora los mejores videojuegos para tu plataforma favorita.</p>
    </div>

    <!-- Product Container -->
    <div class="product-container">
        <div class="product">
            <img src="https://via.placeholder.com/250x180" alt="Juego 1">
            <h3>Juego 1</h3>
            <p>Una increíble aventura épica para disfrutar en tu consola.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250x180" alt="Juego 2">
            <h3>Juego 2</h3>
            <p>Sumérgete en un mundo abierto y lleno de acción.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250x180" alt="Juego 3">
            <h3>Juego 3</h3>
            <p>Explora y resuelve acertijos en un entorno misterioso.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250x180" alt="Juego 4">
            <h3>Juego 4</h3>
            <p>Disfruta de combates épicos y personaliza tu personaje.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250x180" alt="Juego 5">
            <h3>Juego 5</h3>
            <p>Únete a una guerra intergaláctica con jugadores de todo el mundo.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250x180" alt="Juego 6">
            <h3>Juego 6</h3>
            <p>Una historia épica llena de magia y batallas.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250x180" alt="Juego 7">
            <h3>Juego 7</h3>
            <p>Vive la emoción del deporte con gráficos de última generación.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250x180" alt="Juego 8">
            <h3>Juego 8</h3>
            <p>Explora mundos de fantasía mientras luchas contra criaturas míticas.</p>
            <button>Comprar</button>
        </div>
    </div>

    <!-- Button to go back -->
    <div style="text-align: center; margin-top: 30px;">
        <a href="{{ url('/') }}" class="btn-back">Volver a la página principal</a>
    </div>

</body>
</html>
