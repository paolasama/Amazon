<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Tecnológicos en Oferta</title>
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
            background-color: #1a73e8;
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
            background-color: #1a73e8;
            color: white;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }
        .btn-back:hover {
            background-color: #1558b0;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 50px;
        }

        .product {
            background-color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            width: 250px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #ddd;
        }

        .product:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .product img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
        }

        .product h3 {
            font-size: 18px;
            margin-top: 15px;
            font-weight: 600;
        }

        .product p {
            font-size: 14px;
            color: #555;
            margin-top: 10px;
            font-style: italic;
        }

        .product .price {
            font-size: 18px;
            font-weight: 700;
            color: #ff6f00;
            margin-top: 15px;
        }

        .product button {
            background-color: #1a73e8;
            border: none;
            padding: 12px 20px;
            border-radius: 25px;
            color: white;
            font-size: 16px;
            width: 100%;
            margin-top: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .product button:hover {
            background-color: #1558b0;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 32px;
            }
            .product-container {
                flex-direction: column;
                align-items: center;
            }
            .product {
                width: 90%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <div class="header">
        <h1>Productos Tecnológicos en Oferta</h1>
        <p>¡Aprovecha los descuentos y consigue lo mejor de la tecnología!</p>
        <a href="{{ url('/') }}" class="btn-back">Volver a la página principal</a>
    </div>

    <!-- Product Container -->
    <div class="product-container">
        <div class="product">
            <img src="./img/celu.webp" alt="Smartphone">
            <h3>Smartphone Ultra Rápido</h3>
            <p>Un teléfono inteligente con tecnología de última generación.</p>
            <span class="price">$299.99</span>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="./img/pro.webp" alt="Laptop">
            <h3>Laptop Gaming Pro</h3>
            <p>Potente laptop diseñada para la mejor experiencia de juego.</p>
            <span class="price">$799.99</span>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="./img/audi.webp" alt="Audífonos">
            <h3>Audífonos Bluetooth</h3>
            <p>Disfruta de un sonido claro y envolvente sin cables.</p>
            <span class="price">$89.99</span>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="./img/relo.webp" alt="Smartwatch">
            <h3>Smartwatch Fitness</h3>
            <p>Reloj inteligente con monitoreo de salud y actividades deportivas.</p>
            <span class="price">$149.99</span>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="./img/table1.webp" alt="Tablet">
            <h3>Tablet 10” Ultra HD</h3>
            <p>Gran rendimiento y pantalla espectacular para todos tus contenidos.</p>
            <span class="price">$249.99</span>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="./img/monitor.webp" alt="Monitor">
            <h3>Monitor 27” 4K</h3>
            <p>Visualiza contenido con una resolución nítida y colores vibrantes.</p>
            <span class="price">$359.99</span>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="./img/razer.webp" alt="Teclado">
            <h3>Teclado Mecánico RGB</h3>
            <p>Teclado para gamers con retroiluminación personalizable.</p>
            <span class="price">$89.99</span>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="./img/4kcamara.webp" alt="Cámara">
            <h3>Cámara Digital 4K</h3>
            <p>Captura imágenes y videos de alta calidad con esta cámara profesional.</p>
            <span class="price">$599.99</span>
            <button>Comprar</button>
        </div>
    </div>

</body>
</html>
