<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juguetes Favoritos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7f7;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #f28e1c;
            color: white;
            padding: 50px 30px;
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
            background-color: #f28e1c;
            color: white;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }
        .btn-back:hover {
            background-color: #e17a10;
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
            background-color: #f28e1c;
            color: white;
            border: none;
            border-radius: 25px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .product button:hover {
            background-color: #e17a10;
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
        <h1>Tus juguetes favoritos a 24 meses</h1>
        <p>Descubre los juguetes más populares y adquiere los tuyos con facilidades de pago.</p>
        <a href="{{ url('/') }}" class="btn-back">Volver a la página principal</a>
    </div>

    <!-- Products Container -->
    <div class="products-container">
        <div class="product">
            <img src="https://via.placeholder.com/250x150/ff6600/ffffff?text=Muñeca" alt="Muñeca">
            <h3>Muñeca Interactiva</h3>
            <p>Una muñeca que habla y canta para que tu niño se divierta.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250x150/ff6600/ffffff?text=Carro" alt="Carro">
            <h3>Carro Eléctrico</h3>
            <p>Un carro eléctrico para que tu pequeño pueda conducir como los grandes.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250x150/ff6600/ffffff?text=Pelota" alt="Pelota">
            <h3>Pelota de Fútbol</h3>
            <p>Una pelota resistente ideal para jugar al aire libre.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250x150/ff6600/ffffff?text=Rompecabezas" alt="Rompecabezas">
            <h3>Rompecabezas 3D</h3>
            <p>Un divertido rompecabezas para desarrollar la mente de los niños.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250x150/ff6600/ffffff?text=Carro+Control+Remoto" alt="Carro Control Remoto">
            <h3>Carro Control Remoto</h3>
            <p>Un carro con control remoto para disfrutar de emocionantes carreras.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250x150/ff6600/ffffff?text=Avion" alt="Avión">
            <h3>Avión de Juguete</h3>
            <p>Avión de juguete ideal para los niños que aman la aviación.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250x150/ff6600/ffffff?text=Barbie" alt="Barbie">
            <h3>Muñeca Barbie</h3>
            <p>La muñeca más famosa para que tu hijo cree historias y aventuras.</p>
            <button>Comprar</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250x150/ff6600/ffffff?text=Juguete+Musical" alt="Juguete Musical">
            <h3>Juguete Musical</h3>
            <p>Un juguete musical que fomenta la creatividad de los más pequeños.</p>
            <button>Comprar</button>
        </div>
    </div>

</body>
</html>
