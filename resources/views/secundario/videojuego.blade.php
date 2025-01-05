<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Games Store</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            display: flex;
            background-color: #f5f5f5;
            color: #333;
        }
        /* Sidebar (categorías) */
        .sidebar {
            width: 250px;
            background-color: #1a1a2e;
            color: white;
            padding: 20px;
            height: 100vh;
        }
        .sidebar h2 {
            color: #e94560;
            margin-bottom: 20px;
        }
        .sidebar select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 4px;
        }

        /* Main content (productos) */
        .main-content {
            flex-grow: 1;
            padding: 20px;
        }
        .products {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product {
            width: 200px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .product img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 4px;
        }
        .product h3 {
            margin: 10px 0;
            font-size: 16px;
        }
        .product p {
            color: #888;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <!-- Sidebar with categories -->
    <div class="sidebar">
        <h2>Categorías</h2>
        <select id="category">
            <option value="All">Todas las Categorías</option>
            <option value="Consoles">Consolas</option>
            <option value="Games">Juegos</option>
            <option value="Accessories">Accesorios</option>
        </select>
    </div>

    <!-- Main content with products -->
    <div class="main-content">
        <h1>Tienda de Videojuegos</h1>
        <div class="products" id="product-list">
            <!-- Los productos se mostrarán aquí -->
        </div>
    </div>

    <script>
        // Datos de ejemplo de productos
        const products = [
            { id: 1, name: "PlayStation 5", category: "Consoles", price: "$499", image: "./img/play5.webp" },
            { id: 2, name: "Xbox Series X", category: "Consoles", price: "$499", image: "./img/xbox-x.webp" },
            { id: 3, name: "Nintendo Switch", category: "Consoles", price: "$299", image: "./img/nintendo.webp" },
            { id: 4, name: "The Legend of Zelda", category: "Games", price: "$59", image: "./img/zelda.webp" },
            { id: 5, name: "Halo Infinite", category: "Games", price: "$59", image: "./img/halo.webp" },
            { id: 6, name: "Gaming Headset", category: "Accessories", price: "$79", image: "./img/audifono.webp" },
            { id: 7, name: "Controller", category: "Accessories", price: "$59", image: "./img/playcontrol5.webp" },
        ];

        // Función para mostrar los productos
        function displayProducts(category) {
            const productList = document.getElementById('product-list');
            productList.innerHTML = ''; // Limpiar la lista actual

            // Filtrar productos por categoría
            const filteredProducts = category === "All" ? products : products.filter(product => product.category === category);

            // Crear las tarjetas de producto
            filteredProducts.forEach(product => {
                const productCard = document.createElement('div');
                productCard.classList.add('product');
                productCard.innerHTML = `
                    <img src="${product.image}" alt="${product.name}">
                    <h3>${product.name}</h3>
                    <p>${product.price}</p>
                `;
                productList.appendChild(productCard);
            });
        }

        // Evento para cambiar la categoría
        document.getElementById('category').addEventListener('change', (event) => {
            displayProducts(event.target.value);
        });

        // Mostrar todos los productos al cargar la página
        displayProducts("All");
    </script>

</body>
</html>
