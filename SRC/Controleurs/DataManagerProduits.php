<?php

namespace src\Controleur;

class DataManagerProduits{

    public function getAllProduits($sql){
        $allProduits = Boite_Connexion::selectSQL($sql);
        return $allProduits;
    }
}