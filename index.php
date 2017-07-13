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
    <div class="middle inline">
      <form method="post" action="redirect.php" class="form">
        <?php
        $pseudo = false;
        $mdp = false;
         ?>
        <label>Nom d'utilisateur</label><br />
        <input type="text" name="pseudo" required />
        <br />
        <label>Mot de passe</label><br />
        <input type="password" name="mdp" required />
        <br /><br />
        <input type="submit" value="Se connecter">
      </form>
    </div>
  </div>
</body>
</html>
