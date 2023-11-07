<?php

$darkMode = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['dark_mode'])) { 
    $darkMode = $_POST['dark_mode'];
  }
} else if(isset($_COOKIE['dark_mode'])) {
  $darkMode = $_COOKIE['dark_mode'];
}


setcookie('dark_mode', $darkMode, [
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
  <body class="<?= $darkMode ? 'dark' : '' ?> container-fluid">
    <h2>Paramètres du site</h2>
    <form action="" method="post">
      <fieldset>
          <label for="dark_mode">
            <input type="checkbox" id="dark_mode" name="dark_mode" role="switch" <?= $darkMode ? 'checked' : '' ?> >
            Activer le Dark Mode
          </label>
      </fieldset>
      <input type="submit" value="Enregistrer ces paramètres">
    </form>
    <a href="/">Retour à l'accueil</a>
  </body>
</html>
