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
            <img src="./img/smash.jpg" alt="Juego 1">
            <h3>Super Smash Bros. Ultimate</h3>
            <p>MXN1,016.59</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="./img/supermario.webp" alt="Juego 2">
            <h3>Super Mario Party Jamboree</h3>
            <p>MXN1,207.95</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="./img/starwars.webp" alt="Juego 3">
            <h3>Star Wars Outlaws - Limited Edition (Amazon Exclusive), PlayStation 5</h3>
            <p>-16% MXN1,198.80</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="./img/zeldae.webp" alt="Juego 4">
            <h3>The Legend Of Zelda: Echoes Of Wisdom for Nintendo Switch</h3>
            <p>-12% MXN1,077.60</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="./img/marvel.webp" alt="Juego 5">
            <h3>Marvel vs. Capcom Fighting Collection: Arcade Classics - Nintendo Switch</h3>
            <p>-30% MXN711.55</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="./img/metal.webp" alt="Juego 6">
            <h3>Metal Gear Solid: Master Collection Vol.1 (PS5)</h3>
            <p>-30% MXN569.41</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="./img/sonic.webp" alt="Juego 7">
            <h3>Sonic X Shadow Generations - PlayStation 5</h3>
            <p>-6% MXN955.58</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="./img/dbz.webp" alt="Juego 8">
            <h3>DRAGON BALL: Sparking! ZERO PS5</h3>
            <p>-14% MXN1,220.15</p>
            <button>Comprar</button>
        </div>
    </div>

    <!-- Button to go back -->
    <div style="text-align: center; margin-top: 30px;">
        <a href="{{ url('/') }}" class="btn-back">Volver a la página principal</a>
    </div>

</body>
</html>
