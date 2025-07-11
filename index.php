<?php
date_default_timezone_set('America/Toronto');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Blacket Bazaar Clone</title>
  <style>
    body {
      margin: 0;
      font-family: "Segoe UI", sans-serif;
      background-color: #2d2d2d;
      background-image: url('https://i.imgur.com/xVwS3qN.png'); /* Placeholder pattern */
      background-repeat: repeat;
      color: white;
    }
    .container {
      display: flex;
    }
    .sidebar {
      width: 220px;
      background-color: #1c1c1c;
      padding: 1rem;
      height: 100vh;
    }
    .sidebar h2 {
      margin: 0 0 1rem;
    }
    .sidebar ul {
      list-style: none;
      padding: 0;
    }
    .sidebar li {
      margin: 1rem 0;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
    }
    .main {
      flex: 1;
      padding: 1rem;
    }
    .top-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .top-bar .search-bar input {
      padding: 0.5rem;
      font-size: 1rem;
      border-radius: 5px;
      border: none;
      outline: none;
    }
    .packs {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 1rem;
    }
    .pack {
      background: #444;
      padding: 10px;
      border-radius: 10px;
    }
    .pack img {
      width: 70px;
      height: 100px;
      object-fit: cover;
      border-radius: 5px;
    }
    .results {
      background-color: rgba(0, 0, 0, 0.3);
      padding: 1rem;
      margin-top: 2rem;
      border-radius: 10px;
    }
    .results h3 {
      margin-bottom: 1rem;
    }
    .item-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
    }
    .item {
      background: #333;
      padding: 10px;
      border-radius: 10px;
      width: 100px;
      text-align: center;
    }
    .item img {
      width: 60px;
      height: 60px;
      margin-bottom: 0.5rem;
      border-radius: 5px;
    }
    .coin {
      color: gold;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="sidebar">
      <h2>Blacket</h2>
      <ul>
        <li><a href="#">📊 Stats</a></li>
        <li><a href="#">🏆 Leaderboard</a></li>
        <li><a href="#">💬 Chat</a></li>
        <li><a href="#">🛡️ Clans</a></li>
        <li><a href="#">🛒 Market</a></li>
        <li><a href="#">🎒 Inventory</a></li>
        <li><a href="#">⚙️ Settings</a></li>
        <li><a href="#">📰 News</a></li>
      </ul>
    </div>

    <div class="main">
      <div class="top-bar">
        <div><strong>Bazaar</strong></div>
        <div class="search-bar">
          <input type="text" placeholder="Search..." />
        </div>
      </div>

      <div class="packs">
        <?php for ($i = 0; $i < 12; $i++): ?>
          <div class="pack">
            <img src="https://placekitten.com/80/100" alt="Pack <?= $i+1 ?>" />
          </div>
        <?php endfor; ?>
      </div>

      <div class="results">
        <h3>Results:</h3>
        <div class="item-grid">
          <?php for ($i = 0; $i < 10; $i++): ?>
            <div class="item">
              <img src="https://placebear.com/80/80" alt="Item" />
              <div class="coin"><?= rand(100, 1500) ?> 🪙</div>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
