<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Promotions</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #f1f1f1;
            line-height: 1.6;
        }
        /* Header */
        .header {
            background-color: #1db954;
            padding: 20px;
            text-align: center;
        }
        .header h1 {
            font-size: 2em;
            color: white;
        }

        /* Main Section */
        .main-section {
            margin: 20px auto;
            max-width: 1200px;
            padding: 20px;
        }
        .main-section h2 {
            margin-bottom: 20px;
            text-align: center;
            font-size: 1.8em;
        }

        /* Music Grid */
        .music-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .music-card {
            width: 250px;
            background-color: #1e1e1e;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
            text-align: center;
        }
        .music-card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .music-card h3 {
            margin: 10px 0;
            font-size: 1.2em;
            color: #1db954;
        }
        .music-card p {
            color: #b3b3b3;
            margin-bottom: 10px;
        }
        .music-card button {
            padding: 10px 20px;
            background-color: #1db954;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .music-card button:hover {
            background-color: #14833b;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <h1>Music Promotions</h1>
    </div>

    <!-- Main Section -->
    <div class="main-section">
        <h2>Discover Exclusive Deals</h2>
        <div class="music-grid" id="music-list">
            <!-- Music cards will be displayed here -->
        </div>
    </div>

    <script>
        // Sample music data
        const musicPromotions = [
            { id: 1, name: "Top Hits 2024", artist: "Various Artists", price: "$9.99", image: "https://via.placeholder.com/250x250?text=Top+Hits+2024" },
            { id: 2, name: "Chill Vibes", artist: "DJ Relax", price: "$7.99", image: "https://via.placeholder.com/250x250?text=Chill+Vibes" },
            { id: 3, name: "Rock Classics", artist: "Legendary Bands", price: "$12.99", image: "https://via.placeholder.com/250x250?text=Rock+Classics" },
            { id: 4, name: "Jazz Essentials", artist: "Smooth Players", price: "$10.99", image: "https://via.placeholder.com/250x250?text=Jazz+Essentials" },
            { id: 5, name: "EDM Bangers", artist: "Party DJ", price: "$8.99", image: "https://via.placeholder.com/250x250?text=EDM+Bangers" },
        ];

        // Function to display music promotions
        function displayMusic() {
            const musicList = document.getElementById('music-list');
            musicPromotions.forEach(music => {
                const musicCard = document.createElement('div');
                musicCard.classList.add('music-card');
                musicCard.innerHTML = `
                    <img src="${music.image}" alt="${music.name}">
                    <h3>${music.name}</h3>
                    <p>${music.artist}</p>
                    <p>${music.price}</p>
                    <button>Buy Now</button>
                `;
                musicList.appendChild(musicCard);
            });
        }

        // Initial display of music promotions
        displayMusic();
    </script>

</body>
</html>
