<?php

setcookie('firstname', 'Paul', [
  'expires' => time() + 5, // 30 jours
  'httponly' => true
]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body class="<?= isset($_COOKIE['dark_mode']) && $_COOKIE['dark_mode'] === 'on'  ? 'dark' : '' ?> container-fluid">
<h1>Hello <?= $_COOKIE['firstname'] ?? '' ?></h1>
<a href="/parameters.php">Configurer mon affichage</a>
</body>
</html>