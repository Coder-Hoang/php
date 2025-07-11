<?php
date_default_timezone_set('America/Toronto');
$colors = ['#ff6f61', '#6b5b95', '#88b04b', '#f7cac9', '#92a8d1'];
$randomColor = $colors[array_rand($colors)];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Cool PHP Page</title>
  <style>
    body {
      background: <?= $randomColor ?>;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: white;
      text-align: center;
      padding: 3rem;
      transition: background 0.5s ease;
    }
    h1 {
      font-size: 3rem;
      margin-bottom: 0.5rem;
      text-shadow: 2px 2px 5px rgba(0,0,0,0.3);
    }
    p {
      font-size: 1.5rem;
      margin-bottom: 2rem;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    }
    img {
      max-width: 400px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.4);
      margin-bottom: 2rem;
    }
    footer {
      margin-top: 3rem;
      font-style: italic;
      font-size: 0.9rem;
      opacity: 0.8;
    }
  </style>
</head>
<body>
  <h1>Welcome to My Cool PHP Page!</h1>
  <p>Today’s date and time is: <strong><?= date('Y-m-d H:i:s') ?></strong></p>
  <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=800&q=80" alt="Cool nature pic" />
  <footer>Powered by PHP on your Mac</footer>
</body>
</html>
