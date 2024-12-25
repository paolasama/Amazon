<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogar y Cocina</title>
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
            background-color: #006d77;
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
            color: #006d77;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 10px;
            margin-top: 30px;
            background-color: #006d77;
            color: white;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <h1>Hogar y Cocina</h1>
        <p>Encuentra productos que hacen tu hogar más cálido y tu cocina más funcional.</p>
    </div>

    <!-- Main Content -->
    <div class="main">
        <div class="products">
            <!-- Product 1 -->
            <div class="product">
                <img src="https://via.placeholder.com/300x200?text=Blender" alt="Blender">
                <div class="details">
                    <h3>Batidora Multifuncional</h3>
                    <p>Perfecta para smoothies y recetas.</p>
                    <p class="price">$79</p>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product">
                <img src="https://via.placeholder.com/300x200?text=Cookware+Set" alt="Cookware Set">
                <div class="details">
                    <h3>Juego de Ollas</h3>
                    <p>Alta calidad y diseño moderno.</p>
                    <p class="price">$150</p>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product">
                <img src="https://via.placeholder.com/300x200?text=Air+Fryer" alt="Air Fryer">
                <div class="details">
                    <h3>Freidora de Aire</h3>
                    <p>Ideal para cocinar de manera saludable.</p>
                    <p class="price">$99</p>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product">
                <img src="https://via.placeholder.com/300x200?text=Knife+Set" alt="Knife Set">
                <div class="details">
                    <h3>Juego de Cuchillos</h3>
                    <p>Precisión y elegancia en tu cocina.</p>
                    <p class="price">$45</p>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="product">
                <img src="https://via.placeholder.com/300x200?text=Table+Lamp" alt="Table Lamp">
                <div class="details">
                    <h3>Lámpara de Mesa</h3>
                    <p>Añade calidez a tu sala de estar.</p>
                    <p class="price">$30</p>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="product">
                <img src="https://via.placeholder.com/300x200?text=Coffee+Machine" alt="Coffee Machine">
                <div class="details">
                    <h3>Cafetera Automática</h3>
                    <p>Comienza tus días con el mejor café.</p>
                    <p class="price">$120</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>Transforma tu hogar y cocina con los mejores productos.</p>
    </div>

</body>
</html>
