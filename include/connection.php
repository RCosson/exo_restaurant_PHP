<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', '?onepiece?');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>
