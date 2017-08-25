<?php
session_start();
$pseudo = $_SESSION['pseudo'];
$mdp = $_SESSION['mdp'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Chez Romain - accueil</title>
  <link rel="icon" href="./assets/img/icone.ico">
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
  <div class="content">
    <div class="nav-top">
      <ul>
        <?php
        if (isset($_SESSION['pseudo']) && isset($_SESSION['mdp'])) {

          if ($_SESSION['pseudo'] === "admin" && $_SESSION['mdp'] === "admin") {
            echo "<li><a href='modif_menu.php'>modifier menus</a></li>";
          }
          else {
            echo "lol";
          }
        }
         ?>
        <li><a href="menus.php">menus</a></li>
        <?php
        if (isset($_SESSION['pseudo']) && isset($_SESSION['mdp'])) {

          if ($_SESSION['pseudo'] === "admin" && $_SESSION['mdp'] === "admin") {
            echo "<li><a href='modif_plat.php'>modifier plats</a></li>";
          }
}
         ?>
        <li><a href="plats.php">plats</a></li>
        <li><a href="accueil.php">accueil</a></li>
        <li class="left"><?php echo "Connecté(e) en tant que: " . $_SESSION['pseudo'] . " <a href='index.php'>[Se déconnecter]</a>"; ?></li>
      </ul>
    </div>
    <!-- <div class="middle">
      <h3>Bienvenue chez Romain !</h3>
      <p>Ce site vous permet d'avoir accès à la liste complète de tous les plats et menus proposés par notre restaurant, vous pourrez ainsi faire votre choix avant même d'avoir mis un pied chez nous !</p>
    </div> -->
    </div>
    <!--<div class="bottom">
      <p>Copyright (c) 2017 Copyright Holder All Rights Reserved.</p>
    </div>-->
    <button onclick="window.location.href='index.php'" type="button" class="deco">[→</button>
  </div>
</body>
</html>
