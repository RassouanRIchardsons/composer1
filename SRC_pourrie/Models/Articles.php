<?php
// Connection to DataBase.
require 'Connexion.php';
// $connexionPrincipale = new Connexion();
// $connexionPrincipale->connect("veloc", 'root', '');



    class Articles{
        private $idarticles;
        private $nom_article;
        private $description_article;
        private $taux_article_HT;
        private $taux_tva;
        private $type_article;

        public function __construct(
            int $idarticles,
            string $nom_article,
            string $description_article,
            int $taux_article_HT,
            int $taux_tva,
            int $type_article
        )
        {
            $this->idarticles=$idarticles;
            $this->nom_article=$nom_article;
            $this->description_article=$description_article;
            $this->taux_article_HT=$taux_article_HT;
            $this->taux_tva=$taux_tva;
            $this->type_article=$type_article;
        }


        static public function getAllProducts($sql){
            
            $con = Connexion::connect();
            // var_dump($con);
            $req = $con->prepare($sql);
            $req->execute();
            var_dump($req);
            $response=$con->fetch();
            return $response;
            
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
         * Get the value of taux_article_HT
         */ 
        public function getTaux_article_HT()
        {
                return $this->taux_article_HT;
        }

        /**
         * Set the value of taux_article_HT
         *
         * @return  self
         */ 
        public function setTaux_article_HT($taux_article_HT)
        {
                $this->taux_article_HT = $taux_article_HT;

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
    $arti = new Articles(1,"article1","description",0,0,0);
    $tt = $arti->getAllProducts('SELECT * FROM articles');
    var_dump($tt);
?>