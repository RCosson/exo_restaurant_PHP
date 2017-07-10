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
        <li><a href="menus.php">menus</a></li>
        <li><a href="ajout_menu.php">ajout menus</a></li>
        <li><a href="plats.php">plats</a></li>
        <li><a href="ajout_plat.html">ajout plat</a></li>
        <li><a href="index.html">accueil</a></li>
      </ul>
    </div>
    <div class="header"></div>
    <div class="middle">

      <?php include("./assets/include/connection.php"); ?>

      <?php

      $nom = $_POST['nom-menu'];
      $prix = $_POST['prix-menu'];
      $id = $_POST['id-menu'];

      $req = $bdd->prepare('UPDATE `menus` SET `nom` = :nom, `prix` = :prix WHERE `id_plat` = :id_plat');
      $req->execute(array(
      	'nom' => $nom,
      	'prix' => $prix,
        'id_plat' => $id,
      	));
        echo $nom . " " . $prix . " " . $id . " ";
      echo 'Le menu a bien été modifié ! <form action="modif_menu.php"><input type="submit" value="Retour" /></form><form action="menus.php"><input type="submit" value="Voir" /></form>';

      ?>
    </div>
    <!--<div class="bottom">
      <p>Copyright (c) 2017 Copyright Holder All Rights Reserved.</p>
    </div>-->
  </div>
</body>
</html>
