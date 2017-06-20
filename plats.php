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

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="?onepiece?"; // Mysql password
$db_name="restaurant"; // Database name
// Connect to server and select databse.
$dbconn = mysqli_connect($host, $username, $password)or die("cannot connect");
mysqli_select_db($dbconn, $db_name)or die("cannot select DB");

$nom = $_POST['nom'];
$prix = $_POST['prix'];
$photo = $_POST['photo'];

$query = "INSERT INTO `plats` ( `nom`, `prix`, `image`) VALUES ('$nom', '$prix','$photo')";

mysqli_query($dbconn, $query);

?>

</body>
</html>
