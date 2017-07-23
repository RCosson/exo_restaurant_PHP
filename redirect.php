<?php
session_start();
$nvPseudo = $_POST['pseudo'];
$_SESSION['pseudo'] = $nvPseudo;
$nvmdp = $_POST['mdp'];
$_SESSION['mdp'] = $nvmdp;
header("Location: accueil.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="icon" href="./assets/img/icone.ico">
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
  <div class="content">
    <div class="middle inline">
      <?php sleep(2); echo "Bienvenue " . isset($pseudo) . " !"; ?>
    </div>
  </div>
</body>
</html>
