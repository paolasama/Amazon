<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto - Teclado Womier S-K80</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
        }

        header {
            background-color: #232f3e;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 1.5em;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .product-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .product-image {
            flex: 1;
            margin-right: 20px;
        }

        .product-image img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product-info {
            flex: 2;
        }

        .product-info h1 {
            font-size: 2em;
            color: #232f3e;
        }

        .product-info .price {
            font-size: 1.5em;
            color: #ff9900;
            margin-top: 10px;
        }

        .product-info .shipping,
        .product-info .availability {
            font-size: 1em;
            margin-top: 10px;
        }

        .quantity {
            margin-top: 20px;
        }

        .quantity label {
            font-size: 1.1em;
        }

        .quantity select {
            padding: 5px;
            font-size: 1em;
        }

        .action-buttons {
            margin-top: 20px;
        }

        .action-buttons button {
            background-color: #ff9900;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            border: none;
        }

        .action-buttons button:hover {
            background-color: #e68900;
        }

        .details, .returns, .support {
            margin-top: 20px;
        }

        .footer {
            background-color: #232f3e;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 30px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .product-details {
                flex-direction: column;
                align-items: center;
            }

            .product-image {
                margin-right: 0;
                margin-bottom: 20px;
            }

            .product-info {
                text-align: center;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Detalles del Producto</h1>
</header>

<div class="container">
    <div class="product-details">
        <div class="product-image">
            <img src="https://via.placeholder.com/300" alt="Teclado Womier S-K80">
        </div>
        <div class="product-info">
            <h1>Teclado Womier S-K80</h1>
            <div class="price" id="price">US$69.99</div>
            <div class="shipping">US$32.13 de cargos de envío e importación a México</div>
            <div class="shipping">Entrega el viernes, 10 de enero. Realiza el pedido en 23 hrs 44 mins</div>
            <div class="availability" id="availability">Disponible</div>

            <div class="quantity">
                <label for="quantity">Cantidad:</label>
                <select id="quantity" name="quantity">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>

            <div class="action-buttons">
                <button onclick="addToCart()">Agregar al Carrito</button>
                <button onclick="buyNow()">Comprar Ahora</button>
            </div>

            <div class="details">
                <p><strong>Enviado por:</strong> Amazon</p>
                <p><strong>Vendido por:</strong> Womier SHOP</p>
            </div>

            <div class="returns">
                <p><strong>Devoluciones:</strong> Se puede devolver hasta el 31 de enero de 2025</p>
            </div>

            <div class="support">
                <p><strong>Soporte:</strong> Soporte de producto incluido</p>
            </div>

            <div>
                <p><a href="#">Ahorra con Usado - Como Nuevo US$48.99</a></p>
                <p><a href="#">Entrega entre el 9 - 13 de enero</a></p>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <p>&copy; 2024 Amazon | Todos los derechos reservados</p>
</div>

<script>
    function addToCart() {
        const quantity = document.getElementById('quantity').value;
        alert(`Has agregado ${quantity} unidad(es) al carrito.`);
    }

    function buyNow() {
        const quantity = document.getElementById('quantity').value;
        alert(`Has comprado ${quantity} unidad(es) ahora.`);
    }
</script>

</body>
</html>
