<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outlet Deals</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #333;
        }

        /* Header */
        .header {
            background-color: #d32f2f;
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

        /* Outlet Items Grid */
        .outlet-items {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .item {
            width: calc(33.333% - 20px);
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
            transition: transform 0.3s;
        }
        .item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .item img {
            width: 100%;
            height: auto;
        }
        .item .details {
            padding: 15px;
            text-align: center;
        }
        .item .details h3 {
            font-size: 1.2em;
            margin-bottom: 10px;
            color: #333;
        }
        .item .details .price {
            font-size: 1em;
            color: #555;
            text-decoration: line-through;
        }
        .item .details .discount {
            font-size: 1.5em;
            color: #d32f2f;
            font-weight: bold;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 10px;
            margin-top: 30px;
            background-color: #d32f2f;
            color: white;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <h1>Outlet Deals</h1>
        <p>Discover incredible discounts on your favorite products!</p>
    </div>

    <!-- Main Content -->
    <div class="main">
        <div class="outlet-items">
            <!-- Item 1 -->
            <div class="item">
                <img src="./img/laptopnew.webp" alt="Laptop">
                <div class="details">
                    <h3>High-Performance Laptop</h3>
                    <p class="price">$999</p>
                    <p class="discount">$699</p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="item">
                <img src="./img/iphone13.webp" alt="Smartphone">
                <div class="details">
                    <h3>Latest Smartphone</h3>
                    <p class="price">$699</p>
                    <p class="discount">$499</p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="item">
                <img src="./img/sony.webp" alt="Headphones">
                <div class="details">
                    <h3>Wireless Headphones</h3>
                    <p class="price">$150</p>
                    <p class="discount">$89</p>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="item">
                <img src="./img/reloj1.webp" alt="Smartwatch">
                <div class="details">
                    <h3>Smartwatch Pro</h3>
                    <p class="price">$300</p>
                    <p class="discount">$199</p>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="item">
                <img src="./img/4k.webp" alt="Camera">
                <div class="details">
                    <h3>4K Action Camera</h3>
                    <p class="price">$400</p>
                    <p class="discount">$299</p>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="item">
                <img src="./img/gaming-laptop.webp" alt="Gaming Mouse">
                <div class="details">
                    <h3>Gaming Mouse</h3>
                    <p class="price">$80</p>
                    <p class="discount">$49</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>Grab your deals before they're gone!</p>
    </div>

</body>
</html>
