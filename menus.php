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
        <li><a href="modif_menu.php">modifier menus</a></li>
        <li><a href="plats.php">plats</a></li>
        <li><a href="modif_plat.html">modifier plats</a></li>
        <li><a href="index.html">accueil</a></li>
      </ul>
    </div>
    <div class="header"></div>
    <div class="middle">

      <?php include("./assets/include/connection.php"); ?>

      <?php
        // On récupère tout le contenu de la table plat
        $reponse = $bdd->query('SELECT * FROM `plats` LEFT JOIN `menus` ON `plats`.`ID` = menus.id_plat WHERE id_plat IS NOT NULL');
        // On parcourt la table plat de la bdd pour afficher le résultat :
        while ($donnees = $reponse->fetch())
        {

          echo "<div class='menuImg'>" . '<img src="' . $donnees['imageURL'] . '" alt="plat">' . '<p>' . $donnees['nom_menu'] . ", " . $donnees['prix_menu'] . "€" . '</p>' . "</div>";

        }
        $reponse->closeCursor(); // Termine le traitement de la requête
        // tables

        ?>

    </div>
    <!--<div class="bottom">
      <p>Copyright (c) 2017 Copyright Holder All Rights Reserved.</p>
    </div>-->
  </div>
</body>
</html>
