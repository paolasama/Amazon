<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What's New</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }
        /* Header */
        .header {
            background-color: #232f3e;
            color: white;
            padding: 15px 20px;
            text-align: center;
        }
        .header h1 {
            font-size: 2em;
        }

        /* Main Section */
        .main {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .main h2 {
            font-size: 1.8em;
            margin-bottom: 20px;
            color: #232f3e;
        }

        /* New Items Grid */
        .new-items {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .item {
            width: calc(33.333% - 20px);
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .item:hover {
            transform: translateY(-5px);
        }
        .item img {
            width: 100%;
            height: auto;
        }
        .item .details {
            padding: 15px;
        }
        .item .details h3 {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .item .details p {
            font-size: 0.9em;
            color: #666;
        }
        .item .details span {
            font-weight: bold;
            color: #ff9900;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <h1>What's New</h1>
    </div>

    <!-- Main Content -->
    <div class="main">
        <h2>Discover the Latest Arrivals</h2>
        <div class="new-items">
            <!-- Item 1 -->
            <div class="item">
                <img src="https://via.placeholder.com/300x200?text=New+Laptop" alt="New Laptop">
                <div class="details">
                    <h3>High-Performance Laptop</h3>
                    <p>The latest in portable computing. Perfect for work and play.</p>
                    <span>$1200</span>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="item">
                <img src="https://via.placeholder.com/300x200?text=Smartphone" alt="New Smartphone">
                <div class="details">
                    <h3>Next-Gen Smartphone</h3>
                    <p>Experience cutting-edge technology in the palm of your hand.</p>
                    <span>$800</span>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="item">
                <img src="https://via.placeholder.com/300x200?text=Smartwatch" alt="New Smartwatch">
                <div class="details">
                    <h3>Smartwatch Pro</h3>
                    <p>Track your fitness and stay connected with style.</p>
                    <span>$300</span>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="item">
                <img src="https://via.placeholder.com/300x200?text=Headphones" alt="New Headphones">
                <div class="details">
                    <h3>Noise-Cancelling Headphones</h3>
                    <p>Immerse yourself in sound with premium audio quality.</p>
                    <span>$250</span>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="item">
                <img src="https://via.placeholder.com/300x200?text=Camera" alt="New Camera">
                <div class="details">
                    <h3>4K Action Camera</h3>
                    <p>Capture every moment with crystal-clear resolution.</p>
                    <span>$400</span>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="item">
                <img src="https://via.placeholder.com/300x200?text=Speaker" alt="New Speaker">
                <div class="details">
                    <h3>Bluetooth Speaker</h3>
                    <p>Take your music anywhere with powerful sound.</p>
                    <span>$150</span>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
