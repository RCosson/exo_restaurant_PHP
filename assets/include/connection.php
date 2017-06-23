<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', 'lol');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>
