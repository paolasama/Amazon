<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Returns & Order Tracking</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f6f6f6;
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
            font-size: 1.8em;
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
            font-size: 1.6em;
            margin-bottom: 20px;
            color: #232f3e;
        }

        /* Order Tracking */
        .order-tracking {
            margin-bottom: 30px;
        }
        .order-tracking form {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            align-items: center;
        }
        .order-tracking input {
            padding: 10px;
            flex: 1;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .order-tracking button {
            padding: 10px 20px;
            background-color: #ff9900;
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .order-tracking button:hover {
            background-color: #e68900;
        }

        /* Return Process */
        .return-process {
            margin-top: 20px;
        }
        .return-process h3 {
            margin-bottom: 10px;
            color: #232f3e;
        }
        .return-process p {
            margin-bottom: 15px;
            line-height: 1.6;
        }
        .return-process button {
            padding: 10px 20px;
            background-color: #1db954;
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .return-process button:hover {
            background-color: #14833b;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <h1>Returns & Order Tracking</h1>
    </div>

    <!-- Main Content -->
    <div class="main">
        <!-- Order Tracking Section -->
        <div class="order-tracking">
            <h2>Track Your Order</h2>
            <form id="order-tracking-form">
                <input type="text" id="order-id" placeholder="Enter your order ID" required>
                <input type="email" id="email" placeholder="Enter your email address" required>
                <button type="submit">Track Order</button>
            </form>
        </div>

        <!-- Return Process Section -->
        <div class="return-process">
            <h2>Return a Product</h2>
            <h3>How it works:</h3>
            <p>1. Enter your order details to find the product you want to return.</p>
            <p>2. Select a reason for the return and provide additional details if needed.</p>
            <p>3. Print your return label and send the product back.</p>
            <button id="start-return">Start a Return</button>
        </div>
    </div>

    <script>
        // Handle Order Tracking
        document.getElementById('order-tracking-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const orderId = document.getElementById('order-id').value;
            const email = document.getElementById('email').value;
            alert(`Tracking information for Order ID: ${orderId} has been sent to ${email}`);
        });

        // Handle Start Return
        document.getElementById('start-return').addEventListener('click', function() {
            alert("Redirecting to the return process page...");
            // Simulate navigation or show a new form
        });
    </script>

</body>
</html>
