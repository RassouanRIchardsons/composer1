<?php
require 'vendor/autoload.php';


use SRC\Class\Boite_Connexion;
$connexion = new Boite_Connexion/Boite_Connexion();
$connexion->getDB();
var_dump($connexion);

require 'SRC/Models/Utilisateurs.php';
$utilisateur->getAllUtilisateurs('SELECT * FROM utilisateurs');
var_dump($utilisateur);


?>