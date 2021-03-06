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
  <title>Ajouter un plat</title>
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
      <form method="post" action="confirmation_plat.php" class="form">
        <label>Nom du plat</label><br />
        <input type="text" name="nom" required/>
        <br />
        <label>Prix du plat</label><br />
        <input type="text" placeholder="€" name="prix" required/>
        <br />
        <label>URL de la photo du plat</label><br />
        <input type="text" name="photo" required/>
        <br /><br />
        <input type="submit" value="Ajouter plat">
      </form>
    </div>
    <!--<div class="bottom">
      <p>Copyright (c) 2017 Copyright Holder All Rights Reserved.</p>
    </div>-->
    <button onclick="window.location.href='modif_plat.php'" type="button" class="button1">Modifier plat</button>
    <button onclick="window.location.href='index.php'" type="button" class="deco">[→</button>
    <button onclick="window.location.href='supp_plat.php'" type="button" class="button2">Supprimer plat</button>
  </div>
</body>
</html>
