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
  <title>Plat supprimé</title>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
  <div class="content">
    <div class="nav-top">
      <ul>
        <?php
          if ($_SESSION['pseudo'] === "admin" && $_SESSION['mdp'] === "admin") {
            echo "<li><a href='modif_menu.php'>modifier menus</a></li>";
          }
          else {
            echo "lol";
          }

         ?>
        <li><a href="menus.php">menus</a></li>
        <?php

          if ($_SESSION['pseudo'] === "admin" && $_SESSION['mdp'] === "admin") {
            echo "<li><a href='modif_plat.php'>modifier plats</a></li>";
          }
          else {
            echo "lol";
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

      $id = $_POST['id-plat'];

        $req = $bdd->prepare('DELETE FROM `plats` WHERE `ID` = :ID');
          $req->execute(array(
            'ID' => $id,
          	));
          echo 'Le plat a bien été supprimé ! <form action="supp_plat.php"><input type="submit" value="Retour" /></form><form action="plats.php"><input type="submit" value="Voir" /></form>';

      ?>
    </div>
    <!--<div class="bottom">
      <p>Copyright (c) 2017 Copyright Holder All Rights Reserved.</p>
    </div>-->
  </div>
</body>
</html>
