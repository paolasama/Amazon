<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas por la Semana del Auto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }
        .header {
            background-color: #1d3c6a;
            color: white;
            padding: 40px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            margin: 50px auto;
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
            background-color: #1d3c6a;
            color: white;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }
        .btn-back:hover {
            background-color: #14324d;
        }

        .products-container {
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
            height: 150px;
            object-fit: contain;
            border-radius: 8px;
        }

        .product h3 {
            font-size: 20px;
            margin-top: 15px;
            font-weight: 600;
        }

        .product p {
            font-size: 14px;
            color: #555;
            margin-top: 10px;
            font-style: italic;
        }

        .product button {
            font-size: 16px;
            padding: 12px 25px;
            margin-top: 15px;
            background-color: #1d3c6a;
            color: white;
            border: none;
            border-radius: 25px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .product button:hover {
            background-color: #14324d;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 32px;
            }
            .products-container {
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
        <h1>Ofertas especiales en la Semana del Auto</h1>
        <p>Disfruta de grandes descuentos en productos para tu auto y moto. ¡No te lo pierdas!</p>
        <a href="{{ url('/') }}" class="btn-back">Volver a la página principal</a>
    </div>

    <!-- Products Container -->
    <div class="products-container">
        <div class="product">
            <img src="https://via.placeholder.com/250x150/1d3c6a/ffffff?text=Faro+LED" alt="Faro LED">
            <h3>Faro LED para Auto</h3>
            <p>Ilumina tu camino con este potente faro LED para tu vehículo.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250x150/1d3c6a/ffffff?text=Aceite+Motor" alt="Aceite Motor">
            <h3>Aceite para Motor</h3>
            <p>El mejor aceite para mantener tu motor en óptimas condiciones.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250x150/1d3c6a/ffffff?text=Cargador+Batería" alt="Cargador de Batería">
            <h3>Cargador de Batería</h3>
            <p>Recarga la batería de tu vehículo con este cargador de alta capacidad.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250x150/1d3c6a/ffffff?text=Cubierta+Neumático" alt="Cubierta Neumático">
            <h3>Cubierta para Neumáticos</h3>
            <p>Protege tus neumáticos con esta cubierta resistente para todo tipo de clima.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250x150/1d3c6a/ffffff?text=Kit+de+Herramientas" alt="Kit de Herramientas">
            <h3>Kit de Herramientas para Auto</h3>
            <p>Todo lo que necesitas para reparar tu auto en cualquier emergencia.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250x150/1d3c6a/ffffff?text=Limpiador+Cristales" alt="Limpiador de Cristales">
            <h3>Limpiador de Cristales</h3>
            <p>Mantén tu vista clara con este limpiador de cristales para auto.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250x150/1d3c6a/ffffff?text=Funda+Asiento" alt="Funda para Asiento">
            <h3>Funda para Asientos</h3>
            <p>Protege tus asientos con esta funda resistente y fácil de lavar.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250x150/1d3c6a/ffffff?text=Espejo+Retrovisor" alt="Espejo Retrovisor">
            <h3>Espejo Retrovisor Inteligente</h3>
            <p>Un espejo retrovisor con pantalla LCD para mayor seguridad y comodidad.</p>
            <button>Comprar</button>
        </div>
    </div>

</body>
</html>
