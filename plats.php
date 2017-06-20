<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Restaurant</title>
</head>
<body>

<?php

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', '?onepiece?');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

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

</body>
</html>
