<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Nacimiento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdf9f3;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #ffb6c1; /* Color suave de rosa */
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
            background-color: #ffeb3b; /* Amarillo suave */
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
            color: #ff69b4;
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
            background-color: #ff69b4;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .wishlist-item button:hover {
            background-color: #ff4081;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">Lista de Nacimiento</div>
    <div class="search-bar">
        <input type="text" placeholder="Buscar regalos para bebé">
        <button>Buscar</button>
    </div>
</header>

<div class="container">
    <h1 class="wishlist-title">Bienvenido a la Lista de Nacimiento</h1>
    <p>Ayuda a los futuros padres a elegir los mejores regalos para su bebé.</p>
    
    <div class="wishlist-items">
        <div class="wishlist-item">
            <img src="./img/bebe.jpg" alt="Ropa de bebé">
            <h3>Ropa de Bebé</h3>
            <p>Conjunto de ropa suave y cómoda para el recién nacido.</p>
            <button>Agregar a lista</button>
        </div>
        <div class="wishlist-item">
            <img src="./img/cuna.webp" alt="Cuna para bebé">
            <h3>Cuna de bebé</h3>
            <p>Cuna segura y cómoda para el bebé.</p>
            <button>Agregar a lista</button>
        </div>
        <div class="wishlist-item">
            <img src="./img/pañales.webp" alt="Pañales">
            <h3>Pañales</h3>
            <p>Pañales suaves y absorbentes para el bebé.</p>
            <button>Agregar a lista</button>
        </div>
        <div class="wishlist-item">
            <img src="./img/biberon.webp" alt="Biberón">
            <h3>Biberón</h3>
            <p>Biberón de vidrio libre de BPA para la alimentación del bebé.</p>
            <button>Agregar a lista</button>
        </div>
        <!-- Agregar más productos aquí -->
    </div>
</div>

</body>
</html>
