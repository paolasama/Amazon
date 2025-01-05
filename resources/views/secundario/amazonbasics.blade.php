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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        /* Header */
        .header {
            background-color: #232f3e;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .header h1 {
            color: #ff9900;
            font-size: 28px;
        }
        .header input {
            width: 300px;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        /* Main container */
        .container {
            display: flex;
            flex-grow: 1;
            transition: all 0.3s ease;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #1a1a2e;
            color: white;
            padding: 20px;
            height: 100vh;
            overflow-y: auto;
            transition: width 0.3s ease;
        }
        .sidebar h2 {
            color: #e94560;
            margin-bottom: 20px;
            font-size: 22px;
        }
        .sidebar ul {
            list-style: none;
        }
        .sidebar li {
            margin: 10px 0;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            color: #ffffff;
            background-color: #333;
            transition: background-color 0.3s;
        }
        .sidebar li:hover {
            background-color: #e94560;
        }

        /* Product grid */
        .product-grid {
            flex-grow: 1;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin: 20px;
        }
        .product-grid h1 {
            margin-bottom: 20px;
            font-size: 26px;
            color: #333;
        }
        .products {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .product {
            width: 220px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .product:hover {
            transform: scale(1.05);
        }
        .product img {
            width: 100%;
            height: 150px; /* Reducción del tamaño de la imagen */
            object-fit: cover;
            border-radius: 4px;
        }
        .product h3 {
            margin: 10px 0;
            font-size: 18px;
            color: #232f3e;
        }
        .product p {
            color: #555;
            font-size: 16px;
            margin-bottom: 10px;
        }
        .product button {
            padding: 10px;
            background-color: #ff9900;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 14px;
            cursor: pointer;
            width: 100%;
        }
        .product button:hover {
            background-color: #e07b00;
        }

        /* Loader */
        .loader {
            display: none;
            text-align: center;
            margin: 30px auto;
        }
        .loader span {
            font-size: 18px;
            font-weight: bold;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            .sidebar {
                width: 100%;
                height: auto;
            }
            .product-grid {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <h1>Amazon Basics</h1>
        <input type="text" placeholder="Search for products..." aria-label="Search for products">
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
            <div class="loader">
                <span>Loading products...</span>
            </div>
            <div class="products" id="product-list">
                <!-- Products will appear here -->
            </div>
        </div>
    </div>

    <script>
        // Sample product data
        const products = [
            { id: 1, name: "Smartphone", category: "Electronics", price: "$299", image: "./img/oppo.webp" },
            { id: 2, name: "Laptop", category: "Electronics", price: "$999", image: "./img/hp.webp" },
            { id: 3, name: "T-Shirt", category: "Clothing", price: "$20", image: "./img/tshirt1.webp" },
            { id: 4, name: "Jeans", category: "Clothing", price: "$40", image: "./img/jeans.webp" },
            { id: 5, name: "Blender", category: "Home", price: "$60", image: "./img/blender.webp" },
            { id: 6, name: "Microwave", category: "Home", price: "$120", image: "./img/microda.webp" },
        ];

        // Function to display products
        function displayProducts(category) {
            const productList = document.getElementById('product-list');
            const loader = document.querySelector('.loader');
            loader.style.display = 'block'; // Show loader

            // Simulate a delay (for demonstration)
            setTimeout(() => {
                productList.innerHTML = ''; // Clear previous products

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
                        <button>Add to Cart</button>
                    `;
                    productList.appendChild(productCard);
                });

                loader.style.display = 'none'; // Hide loader
            }, 1000); // Simulated loading time
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
