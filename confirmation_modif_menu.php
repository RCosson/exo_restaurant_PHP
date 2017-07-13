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
  <title>Document</title>
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
        <li class="left"><?php echo "Connecté(e) en tant que " . $_SESSION['pseudo'] . ". <a href='index.php'>[Se déconnecter]</a>"; ?></li>
      </ul>
    </div>
    <div class="header"></div>
    <div class="middle">

      <?php include("./assets/include/connection.php"); ?>

      <?php

      $nom = $_POST['nom-menu'];
      $prix = $_POST['prix-menu'];
      $id = $_POST['id-menu'];

      if ($req = false) {
        echo 'Ce plat ne correspond à aucun menu ! <form action="modif_menu.php"><input type="submit" value="Retour" /></form><form action="menus.php"><input type="submit" value="Voir" /></form>';
      } else {
        $req = $bdd->prepare('UPDATE `menus` SET `nom_menu` = :nom_menu, `prix_menu` = :prix_menu WHERE `id_plat` = :id_plat');
          $req->execute(array(
          	'nom_menu' => $nom,
          	'prix_menu' => $prix,
            'id_plat' => $id,
          	));
          echo 'Le menu a bien été modifié ! <form action="modif_menu.php"><input type="submit" value="Retour" /></form><form action="menus.php"><input type="submit" value="Voir" /></form>';
      }



      //'Ce plat ne correspond à aucun menu ! <form action="modif_menu.php"><input type="submit" value="Retour" /></form><form action="menus.php"><input type="submit" value="Voir" /></form>'

      ?>
    </div>
    <!--<div class="bottom">
      <p>Copyright (c) 2017 Copyright Holder All Rights Reserved.</p>
    </div>-->
  </div>
</body>
</html>
