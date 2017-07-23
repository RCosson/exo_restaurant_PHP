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
  <title>Modifier un menu</title>
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
          else {
            echo "lol";
          }
}
         ?>
        <li><a href="plats.php">plats</a></li>
        <li><a href="accueil.php">accueil</a></li>
        <li class="left"><?php echo "Connecté(e) en tant que: " . $_SESSION['pseudo'] . " <a href='index.php'>[Se déconnecter]</a>"; ?></li>
      </ul>
    </div>
    <form method="post" action="confirmation_modif_menu.php">
    <div class="middle-form">
      <label>Nom du menu</label><br />
      <input type="text" name="nom-menu" required/>
      <br />
      <label>Prix du menu</label><br />
      <input type="text" placeholder="€" name="prix-menu" required/>
      <br /> <br />
      <input type="submit" value="Modifier menu" class="submit">
    </div>
    <div class="middle-menu">

      <?php include("./assets/include/connection.php"); ?>

      <?php

      $reponse = $bdd->query('SELECT * FROM `plats` LEFT JOIN `menus` ON `plats`.`ID` = menus.id_plat WHERE id_plat IS NOT NULL');

      while ($donnees = $reponse->fetch()) {
        echo "<div class='plat'>" . '<input class="radio" name="id-menu" type="radio" value="' . $donnees['id_plat'] . '" required>' . '<img src="' . $donnees['imageURL'] . '" alt="plat">' . '<p>' . $donnees['nom_menu'] . ", " . $donnees['prix_menu'] . "€" . '</p>' . "</div>";
      }

      ?>
    </div>
    </form>
    <!--<div class="bottom">
      <p>Copyright (c) 2017 Copyright Holder All Rights Reserved.</p>
    </div>-->
    <button onclick="window.location.href='ajout_menu.php'" type="button" class="button1">Ajouter menu</button>
    <button onclick="window.location.href='index.php'" type="button" class="deco">Se déconnecter</button>
    <button onclick="window.location.href='supp_menu.php'" type="button" class="button2">Supprimer menu</button>
  </div>
</body>
</html>
