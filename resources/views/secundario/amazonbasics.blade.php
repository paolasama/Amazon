<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Basics</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
        }
        /* Header */
        .header {
            background-color: #232f3e;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header h1 {
            color: #ff9900;
            font-size: 24px;
        }
        .header input {
            width: 300px;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        /* Main container */
        .container {
            display: flex;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #f3f3f3;
            padding: 20px;
            height: 100vh;
            border-right: 1px solid #ddd;
        }
        .sidebar h2 {
            font-size: 18px;
            margin-bottom: 15px;
        }
        .sidebar ul {
            list-style: none;
        }
        .sidebar li {
            margin: 10px 0;
            cursor: pointer;
            color: #0073e6;
        }

        /* Product grid */
        .product-grid {
            flex-grow: 1;
            padding: 20px;
        }
        .product-grid h1 {
            margin-bottom: 20px;
        }
        .products {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product {
            width: 200px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .product img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        .product h3 {
            font-size: 16px;
            margin-bottom: 5px;
        }
        .product p {
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <h1>Amazon Basics</h1>
        <input type="text" placeholder="Search for products...">
    </div>

    <!-- Main Container -->
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Categories</h2>
            <ul id="category-list">
                <li data-category="All">All Products</li>
                <li data-category="Electronics">Electronics</li>
                <li data-category="Clothing">Clothing</li>
                <li data-category="Home">Home & Kitchen</li>
            </ul>
        </div>

        <!-- Product Grid -->
        <div class="product-grid">
            <h1>Products</h1>
            <div class="products" id="product-list">
                <!-- Products will appear here -->
            </div>
        </div>
    </div>

    <script>
        // Sample product data
        const products = [
            { id: 1, name: "Smartphone", category: "Electronics", price: "$299", image: "https://via.placeholder.com/200x150?text=Smartphone" },
            { id: 2, name: "Laptop", category: "Electronics", price: "$999", image: "https://via.placeholder.com/200x150?text=Laptop" },
            { id: 3, name: "T-Shirt", category: "Clothing", price: "$20", image: "https://via.placeholder.com/200x150?text=T-Shirt" },
            { id: 4, name: "Jeans", category: "Clothing", price: "$40", image: "https://via.placeholder.com/200x150?text=Jeans" },
            { id: 5, name: "Blender", category: "Home", price: "$60", image: "https://via.placeholder.com/200x150?text=Blender" },
            { id: 6, name: "Microwave", category: "Home", price: "$120", image: "https://via.placeholder.com/200x150?text=Microwave" },
        ];

        // Function to display products
        function displayProducts(category) {
            const productList = document.getElementById('product-list');
            productList.innerHTML = '';

            // Filter products by category
            const filteredProducts = category === "All"
                ? products
                : products.filter(product => product.category === category);

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

        // Add event listeners for category selection
        document.querySelectorAll('#category-list li').forEach(categoryItem => {
            categoryItem.addEventListener('click', () => {
                const category = categoryItem.getAttribute('data-category');
                displayProducts(category);
            });
        });

        // Initial display
        displayProducts("All");
    </script>
</body>
</html>
