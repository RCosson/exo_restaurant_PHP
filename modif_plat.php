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
    <form method="post" action="confirmation_modif_plat.php">
    <div class="middle-form">
      <label>Nom du plat</label><br />
      <input type="text" name="nom-plat" required/>
      <br />
      <label>Prix du plat</label><br />
      <input type="text" placeholder="€" name="prix-plat" required/>
      <br /> <br />
      <input type="submit" value="Modifier plat" class="submit">
    </div>
    <div class="middle-menu">

      <?php include("./assets/include/connection.php"); ?>

      <?php

      $reponse = $bdd->query('SELECT * FROM plats');

      while ($donnees = $reponse->fetch()) {
          echo "<div class='plat'>" . '<input class="radio" name="id-plat" type="radio" value="' . $donnees['ID'] . '" required>' . '<img src="' . $donnees['imageURL'] . '" alt="plat">' . '<p>' . $donnees['nom'] . ", " . $donnees['prix'] . "€" . '</p>' . "</div>";
      }

      ?>
    </div>
    </form>
    <!--<div class="bottom">
      <p>Copyright (c) 2017 Copyright Holder All Rights Reserved.</p>
    </div>-->
    <button onclick="window.location.href='ajout_plat.php'" type="button" class="button1">Ajouter plat</button>
    <button onclick="window.location.href='supp_plat.php'" type="button" class="button2">Supprimer plat</button>
  </div>
</body>
</html>
