<?php
require '../class/Boite_Connexion.php';
class Articles
{
private $idarticles;
private $nom_article;
private $description_article;
private $prix_article_HT;
private $taux_tva;
private $type_article;

public function __construct(
int $idarticles,
string $nom_article,
string $description_article,
int $prix_article_HT,
int $taux_tva,
int $type_article
)
{
$this->idarticles = $idarticles;
$this->nom_article = $nom_article;
$this->description_article = $description_article;
$this->prix_article_HT = $prix_article_HT;
$this->taux_tva = $taux_tva;
$this->type_article = $type_article;

}

// function fonctionne uniquement avec la requete SELECT * FROM table
        //toute la table
        public function getAllArticles($sql){
                $connex = Boite_Connexion::getDB();
                $req = $connex ->prepare($sql);
                $req -> execute();
                $reponse = $connex->fetchOject();
                //fetch(PDO::FetchObject);
                return $reponse;
            }
                //par Id
        public function getArticleById($sql,$idarticles){
                $connex = Boite_Connexion::connect();
                $req = $connex ->prepare($sql);
                $req->bindParam(":idarticles", $idarticles, PDO::PARAM_INT);
                $req -> execute();
                $reponse =$connex->fetchOject();
                //fetch(PDO::FetchObject);
                return $reponse;
            }
                // par type
        public function getArticleByType($sql,$type_article){
                $connex = Boite_Connexion::connect();
                $req = $connex ->prepare($sql);
                $req->bindParam(":type_article", $type_article,PDO::PARAM_INT);
                $req -> execute();
                $reponse =$connex->fetchOject();
               // fetch(PDO::FetchObject);
                return $reponse;
            }
                //par nom
            public function getProduitByNom($sql,$nom_article){
                $Connex = Boite_Connexion::connect();
                $Req = $Connex ->prepare($sql);
                $Req->bindParam(":nom_article", $nom_article,PDO::PARAM_INT);
                $Req -> execute();
                $reponse =$Connex->fetchOject();
               // fetch(PDO::FetchObject);
                return $reponse;
            }


            
/**
 * Get the value of idarticles
 */ 
public function getIdarticles()
{
return $this->idarticles;
}

/**
 * Set the value of idarticles
 *
 * @return  self
 */ 
public function setIdarticles($idarticles)
{
$this->idarticles = $idarticles;

return $this;
}

/**
 * Get the value of nom_article
 */ 
public function getNom_article()
{
return $this->nom_article;
}

/**
 * Set the value of nom_article
 *
 * @return  self
 */ 
public function setNom_article($nom_article)
{
$this->nom_article = $nom_article;

return $this;
}

/**
 * Get the value of description_article
 */ 
public function getDescription_article()
{
return $this->description_article;
}

/**
 * Set the value of description_article
 *
 * @return  self
 */ 
public function setDescription_article($description_article)
{
$this->description_article = $description_article;

return $this;
}

/**
 * Get the value of prix_article_HT
 */ 
public function getPrix_article_HT()
{
return $this->prix_article_HT;
}

/**
 * Set the value of prix_article_HT
 *
 * @return  self
 */ 
public function setPrix_article_HT($prix_article_HT)
{
$this->prix_article_HT = $prix_article_HT;

return $this;
}

/**
 * Get the value of taux_tva
 */ 
public function getTaux_tva()
{
return $this->taux_tva;
}

/**
 * Set the value of taux_tva
 *
 * @return  self
 */ 
public function setTaux_tva($taux_tva)
{
$this->taux_tva = $taux_tva;

return $this;
}

/**
 * Get the value of type_article
 */ 
public function getType_article()
{
return $this->type_article;
}

/**
 * Set the value of type_article
 *
 * @return  self
 */ 
public function setType_article($type_article)
{
$this->type_article = $type_article;

return $this;
}
        }
