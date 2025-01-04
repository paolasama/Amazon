<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon.com.mx</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            display: flex;
        }
        /* Sidebar (categorías) */
        .sidebar {
            width: 250px;
            background-color: #232f3e;
            color: white;
            padding: 20px;
            height: 100vh;
        }
        .sidebar h2 {
            color: #ff9900;
            margin-bottom: 20px;
        }
        .sidebar select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            background-color: #444;
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
            height: auto;
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
        <h2>Categories</h2>
        <select id="category">
            <option value="All">All Categories</option>
            <option value="Electronics">Electronics</option>
            <option value="Clothing">Clothing</option>
            <option value="Furniture">Furniture</option>
        </select>
    </div>

    <!-- Main content with products -->
    <div class="main-content">
        <h1>Products</h1>
        <div class="products" id="product-list">
            <!-- Products will be displayed here -->
        </div>
    </div>

    <script>
        // Sample product data
        const products = [
            { id: 1, name: "Laptop", category: "Electronics", price: "$999", image: "./img/laptop.webp" },
            { id: 2, name: "Phone", category: "Electronics", price: "$699", image: "./img/iPhone-11.webp" },
            { id: 3, name: "T-Shirt", category: "Clothing", price: "$25", image: "./img/tshirt.webp" },
            { id: 4, name: "Jeans", category: "Clothing", price: "$40", image: "./img/Jeans.webp" },
            { id: 5, name: "Chair", category: "Furniture", price: "$150", image: "./img/Chair.webp" },
            { id: 6, name: "Table", category: "Furniture", price: "$300", image: "./img/table.webp" },
        ];

        // Function to display products
        function displayProducts(category) {
            const productList = document.getElementById('product-list');
            productList.innerHTML = ''; // Clear the current list

            // Filter products by category
            const filteredProducts = category === "All" ? products : products.filter(product => product.category === category);

            // Create product cards
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

        // Event listener for category change
        document.getElementById('category').addEventListener('change', (event) => {
            displayProducts(event.target.value);
        });

        // Initial display of all products
        displayProducts("All");
    </script>

</body>
</html>
