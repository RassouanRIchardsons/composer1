<?php

require '../config.php';
class Connexion {

    public function __construct(){
    }
    static public function connect(){
        try
        {
            $db = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME.';charset=utf8', DBUSER, DBPASSWORD);
            return $db;
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }

}
// Verification :
// $con = new Connexion();
// var_dump($con);


?>