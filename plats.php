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
  <title>Chez Romain - plats</title>
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
    <div class="header"></div>
    <div class="middle">

      <?php include("./assets/include/connection.php"); ?>

      <?php

      $reponse = $bdd->query('SELECT * FROM plats');

      while ($donnees = $reponse->fetch()) {
        echo "<div class='plat'>" . '<img src="' . $donnees['imageURL'] . '" alt="plat">' . '<p>' . $donnees['nom'] . ", " . $donnees['prix'] . "€" . '</p>' . "</div>";
      }

      ?>
    </div>
    <!--<div class="bottom">
      <p>Copyright (c) 2017 Copyright Holder All Rights Reserved.</p>
    </div>-->
    <button onclick="window.location.href='index.php'" type="button" class="deco">Se déconnecter</button>
  </div>
</body>
</html>
