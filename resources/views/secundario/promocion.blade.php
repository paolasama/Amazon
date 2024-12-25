<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Promotions</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f3f3f3;
        }
        /* Header */
        .header {
            background-color: #232f3e;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header h1 {
            font-size: 24px;
            color: #ff9900;
        }
        .header input {
            width: 300px;
            padding: 8px;
            border-radius: 4px;
            border: none;
        }

        /* Promotions Section */
        .promotions {
            margin: 20px auto;
            max-width: 1200px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .promotions h2 {
            margin-bottom: 20px;
            color: #232f3e;
            text-align: center;
        }
        .promotion-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .promotion {
            width: 300px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .promotion img {
            width: 100%;
            height: auto;
            border-radius: 4px;
        }
        .promotion h3 {
            margin: 15px 0;
            font-size: 18px;
        }
        .promotion p {
            color: #555;
            margin-bottom: 10px;
        }
        .promotion span {
            display: inline-block;
            margin-top: 10px;
            font-weight: bold;
            color: #ff9900;
        }
        .promotion button {
            margin-top: 15px;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #232f3e;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .promotion button:hover {
            background-color: #ff9900;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <h1>Amazon Promotions</h1>
        <input type="text" placeholder="Search promotions...">
    </div>

    <!-- Promotions Section -->
    <div class="promotions">
        <h2>Hot Deals & Promotions</h2>
        <div class="promotion-grid" id="promotion-list">
            <!-- Promotions will be displayed here -->
        </div>
    </div>

    <script>
        // Sample promotions data
        const promotions = [
            { id: 1, name: "Smartphone 50% Off", description: "Get the latest smartphone with an exclusive 50% discount.", price: "$299", image: "https://via.placeholder.com/300x200?text=Smartphone" },
            { id: 2, name: "Laptop Mega Sale", description: "High-performance laptops at unbeatable prices.", price: "$599", image: "https://via.placeholder.com/300x200?text=Laptop" },
            { id: 3, name: "Kitchen Essentials", description: "Upgrade your kitchen with top-quality tools.", price: "$49", image: "https://via.placeholder.com/300x200?text=Kitchen+Essentials" },
            { id: 4, name: "Gaming Console Bundle", description: "Get the ultimate gaming experience with this console bundle.", price: "$399", image: "https://via.placeholder.com/300x200?text=Gaming+Console" },
            { id: 5, name: "Fashion Clearance", description: "Trendy clothing at clearance prices.", price: "$19", image: "https://via.placeholder.com/300x200?text=Fashion+Clearance" },
        ];

        // Function to display promotions
        function displayPromotions() {
            const promotionList = document.getElementById('promotion-list');
            promotions.forEach(promotion => {
                const promoCard = document.createElement('div');
                promoCard.classList.add('promotion');
                promoCard.innerHTML = `
                    <img src="${promotion.image}" alt="${promotion.name}">
                    <h3>${promotion.name}</h3>
                    <p>${promotion.description}</p>
                    <span>${promotion.price}</span>
                    <button>Shop Now</button>
                `;
                promotionList.appendChild(promoCard);
            });
        }

        // Initial display of promotions
        displayPromotions();
    </script>
</body>
</html>
