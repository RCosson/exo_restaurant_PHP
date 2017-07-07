<?php

$choix = $bdd->query('SELECT * FROM plats');

while ($choix = $reponse->fetch()) {
  echo "<option value='" . $choix['nom'] . "'>" . $choix['nom'] . "</option>";
}

?>
