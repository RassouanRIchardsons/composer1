<?php
// require '../vendor/autoload.php';
//     $tab = array(1,3,5,6);
//     $tabAsso = array(
//         'nom' => 'RICHARDSONS',
//         'prénom' => 'Rassouan',
//         'âge' => '25ans'
//     );
//     dump($tab);
//     dump($tabAsso);


// Connection to DataBase.
require 'Models/Connexion.php';
$connexionPrincipale = new Connexion();
$connexionPrincipale->connect();
var_dump($connexionPrincipale);

// Bootstrap head
require 'Models/DebutBootstrap.php';
$head = new DebutBootstrap();
?>
<h1>Hello World</h1>

<?php
require 'Models/FinBootstrap.php';
$fin = new finBootstrap();
?>