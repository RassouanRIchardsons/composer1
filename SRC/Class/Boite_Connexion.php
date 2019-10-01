<?php
namespace 'SRC/Class';
require 'config.php';
class Boite_Connexion{


public function __construct(){}

public function getDB(){
    
try
{
    $bdd = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME.';charset=utf8', DBIDENTIFIANT, DBPASS);
               // PDO('mysql:host=localhost;dbname='.$database.';charset=utf8','root','');
    return $bdd;
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
}    

}



// test de la base de données
//$ttt = new Boite_Connexion();
//$ttt->getDB();

//var_dump($ttt);
