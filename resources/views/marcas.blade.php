<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcas Favoritas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #28a745;
            color: white;
            padding: 60px 30px;
            text-align: center;
            border-radius: 15px;
            margin: 40px auto;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            max-width: 1100px;
        }
        .header h1 {
            font-size: 48px;
            font-weight: 700;
        }
        .header p {
            font-size: 20px;
            margin-top: 10px;
        }
        .btn-back {
            font-size: 16px;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            background-color: #28a745;
            color: white;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }
        .btn-back:hover {
            background-color: #218838;
        }

        .brands-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 50px;
        }

        .brand {
            background-color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            width: 250px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #ddd;
        }

        .brand:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .brand img {
            width: 100%;
            height: 150px;
            object-fit: contain;
            border-radius: 8px;
        }

        .brand h3 {
            font-size: 20px;
            margin-top: 15px;
            font-weight: 600;
        }

        .brand p {
            font-size: 14px;
            color: #555;
            margin-top: 10px;
            font-style: italic;
        }

        .brand button {
            font-size: 16px;
            padding: 12px 25px;
            margin-top: 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 25px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .brand button:hover {
            background-color: #218838;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 32px;
            }
            .brands-container {
                flex-direction: column;
                align-items: center;
            }
            .brand {
                width: 90%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <div class="header">
        <h1>Ahorra en tus marcas favoritas</h1>
        <p>Explora descuentos y ofertas en marcas populares como Apple, Samsung, Huawei y Xiaomi.</p>
        <a href="{{ url('/') }}" class="btn-back">Volver a la página principal</a>
    </div>

    <!-- Brands Container -->
    <div class="brands-container">
        <!-- Producto 1 -->
        <div class="brand">
            <img src="./img/apple1.jpg" alt="Apple">
            <h3>Apple</h3>
            <p>Explora los productos más innovadores de Apple con descuentos exclusivos.</p>
            <button>Comprar</button>
        </div>
        <!-- Producto 2 -->
        <div class="brand">
            <img src="./img/samsung.webp" alt="Samsung">
            <h3>Samsung</h3>
            <p>Encuentra ofertas en smartphones, televisores y otros productos Samsung.</p>
            <button>Comprar</button>
        </div>
        <!-- Producto 3 -->
        <div class="brand">
            <img src="./img/huawei.webp" alt="Huawei">
            <h3>Huawei</h3>
            <p>Aprovecha las promociones en dispositivos Huawei y tecnología de vanguardia.</p>
            <button>Comprar</button>
        </div>
        <!-- Producto 4 -->
        <div class="brand">
            <img src="./img/xiaomi.webp" alt="Xiaomi">
            <h3>Xiaomi</h3>
            <p>Consigue productos Xiaomi con la mejor relación calidad-precio.</p>
            <button>Comprar</button>
        </div>
        <!-- Producto 5 -->
        <div class="brand">
            <img src="./img/lg.webp" alt="LG">
            <h3>LG</h3>
            <p>Disfruta de productos electrónicos y electrodomésticos LG con grandes descuentos.</p>
            <button>Comprar</button>
        </div>
        <!-- Producto 6 -->
        <div class="brand">
            <img src="./img/sonyaudi.webp" alt="Sony">
            <h3>Sony</h3>
            <p>Los mejores productos de entretenimiento con calidad Sony, ahora en oferta.</p>
            <button>Comprar</button>
        </div>
        <!-- Producto 7 -->
        <div class="brand">
            <img src="./img/switch.webp" alt="Nintendo">
            <h3>Nintendo</h3>
            <p>Disfruta de las consolas y videojuegos más emocionantes de Nintendo.</p>
            <button>Comprar</button>
        </div>
        <!-- Producto 8 -->
        <div class="brand">
            <img src="./img/xboxm.webp" alt="Microsoft">
            <h3>Microsoft</h3>
            <p>Los productos de Microsoft, ahora a precios más bajos que nunca.</p>
            <button>Comprar</button>
        </div>
    </div>

</body>
</html>
