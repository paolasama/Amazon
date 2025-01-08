<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Boda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #800080; /* Color morado elegante */
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header .logo {
            font-size: 24px;
            font-weight: bold;
        }
        header .search-bar {
            display: flex;
            width: 50%;
        }
        header .search-bar input {
            width: 90%;
            padding: 8px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }
        header .search-bar button {
            padding: 8px;
            background-color: #febd69;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .container {
            padding: 20px;
        }
        .wishlist-title {
            font-size: 32px;
            margin-bottom: 20px;
            text-align: center;
            color: #800080;
        }
        .wishlist-items {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .wishlist-item {
            background-color: white;
            padding: 15px;
            width: 250px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            transition: transform 0.3s;
        }
        .wishlist-item:hover {
            transform: translateY(-5px);
        }
        .wishlist-item img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .wishlist-item h3 {
            font-size: 20px;
            margin: 10px 0;
            color: #333;
        }
        .wishlist-item p {
            font-size: 14px;
            color: #555;
        }
        .wishlist-item button {
            padding: 10px 15px;
            background-color: #800080;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .wishlist-item button:hover {
            background-color: #9b30b6;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">Lista de Boda</div>
    <div class="search-bar">
        <input type="text" placeholder="Buscar regalos para boda">
        <button>Buscar</button>
    </div>
</header>

<div class="container">
    <h1 class="wishlist-title">Bienvenido a tu Lista de Boda</h1>
    <p>En esta página puedes agregar tus regalos favoritos para tu boda.</p>
    
    <div class="wishlist-items">
        <div class="wishlist-item">
            <img src="./img/vaso.jpg" alt="Regalo 1">
            <h3>Juego de Copas</h3>
            <p>Juego de copas elegantes para brindar en el día especial.</p>
            <button>Agregar a lista</button>
        </div>
        <div class="wishlist-item">
            <img src="./img/set.webp" alt="Regalo 2">
            <h3>Set de Vajilla</h3>
            <p>Set de vajilla moderna para las cenas familiares.</p>
            <button>Agregar a lista</button>
        </div>
        <div class="wishlist-item">
            <img src="./img/sabana.webp" alt="Regalo 3">
            <h3>Juego de Sábanas</h3>
            <p>Juego de sábanas de algodón egipcio de alta calidad.</p>
            <button>Agregar a lista</button>
        </div>
        <!-- Agregar más productos aquí -->
    </div>
</div>

</body>
</html>
