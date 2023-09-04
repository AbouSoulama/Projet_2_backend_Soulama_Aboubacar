<?php

try
{
$bdd = new PDO('mysql:host=localhost;dbname=Mon_réseau', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}


?>



