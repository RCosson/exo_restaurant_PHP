<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="content">
    <div class="nav-top">
      <ul>
        <li><a href="menus.php">menus</a></li>
        <li><a href="ajout_menu.php">ajout menus</a></li>
        <li><a href="plats.php">plats</a></li>
        <li><a href="ajout_plat.html">ajout plat</a></li>
        <li><a href="index.html">accueil</a></li>
      </ul>
    </div>
    <div class="header"></div>
    <div class="middle">

      <?php include("./include/connection.php"); ?>

      <?php

      $nom = $_POST['nom'];
      $prix = $_POST['prix'];
      $photo = $_POST['photo'];

      $req = $bdd->prepare("INSERT INTO `plats` ( `nom`, `prix`, `image`) VALUES ('$nom', '$prix','$photo')");
      $req->execute(array(
      	'nom' => $nom,
      	'prix' => $prix,
      	'photo' => $photo,
      	));

      echo 'Le plat a bien été ajouté !';

      ?>
    </div>
    <!--<div class="bottom">
      <p>Copyright (c) 2017 Copyright Holder All Rights Reserved.</p>
    </div>-->
  </div>
</body>
</html>