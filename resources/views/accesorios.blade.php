<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesorios para Gamers - Halloween</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #ff6a00;
            padding: 60px 30px;
            text-align: center;
            color: #fff;
            border-radius: 20px;
            margin: 40px auto;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            max-width: 1100px;
        }
        .header h1 {
            font-size: 50px;
            font-weight: bold;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
        }
        .header p {
            font-size: 22px;
            margin-top: 15px;
        }
        .btn-back {
            font-size: 16px;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            background-color: #ff6a00;
            color: white;
            transition: background-color 0.3s ease;
            margin-top: 30px;
        }
        .btn-back:hover {
            background-color: #e65c00;
        }
        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 50px;
        }
        .product {
            background-color: #fff;
            width: 250px;
            padding: 20px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 2px solid #ff6a00;
        }
        .product:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }
        .product img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
        }
        .product h3 {
            font-size: 20px;
            color: #ff6a00;
            margin-top: 15px;
            font-weight: bold;
        }
        .product p {
            color: #777;
            font-size: 15px;
            margin-top: 10px;
            font-style: italic;
        }
        .product button {
            background-color: #ff6a00;
            border: none;
            padding: 12px 20px;
            border-radius: 25px;
            color: white;
            font-size: 16px;
            width: 100%;
            margin-top: 15px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .product button:hover {
            background-color: #e65c00;
        }
        @media (max-width: 768px) {
            .header h1 {
                font-size: 38px;
            }
            .product-container {
                flex-direction: column;
                align-items: center;
            }
            .product {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <div class="header">
        <h1>Accesorios para Gamers - Halloween</h1>
        <p>¡Celebra Halloween con los mejores accesorios para tu equipo de juego!</p>
        <a href="{{ url('/') }}" class="btn-back">Volver a la página principal</a>
    </div>

    <!-- Product Container -->
    <div class="product-container">
        <div class="product">
            <img src="./img/teclado.webp" alt="Teclado Halloween">
            <h3>Teclado de Calabaza</h3>
            <p>Un teclado con retroiluminación naranja para iluminar tu noche de Halloween.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="./img/fatama.webp" alt="Mouse Halloween">
            <h3>Mouse Fantasmal</h3>
            <p>Un mouse iluminado que te guía en tus aventuras nocturnas.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="./img/audifonojack.jpg" alt="Audífonos Halloween">
            <h3>Audífonos Tenebrosos</h3>
            <p>Sumérgete en el terror con sonido envolvente y estilo único.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="./img/knife.webp" alt="Alfombrilla Halloween">
            <h3>Alfombrilla Vampírica</h3>
            <p>Una alfombrilla suave con diseño de murciélagos que te protegerá en la oscuridad.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="./img/audifonoca.jpg" alt="Auriculares Halloween">
            <h3>Auriculares Calabaza</h3>
            <p>Auriculares con diseño exclusivo y sonido envolvente para noches de miedo.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="./img/camiseta.jpeg" alt="Camisa Halloween">
            <h3>Camisa Espeluznante</h3>
            <p>Viste con estilo y terror en cada movimiento.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="./img/gorro.jpg" alt="Gorra Halloween">
            <h3>Gorra del Hombre Lobo</h3>
            <p>Protege tu cabeza con una gorra temática de Halloween y mantén tu estilo.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="./img/luz.webp" alt="Luces Halloween">
            <h3>Luces Fantasmales</h3>
            <p>Decora tu espacio de juego con luces con temática de Halloween.</p>
            <button>Comprar</button>
        </div>
    </div>

</body>
</html>
