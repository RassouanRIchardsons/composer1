<?php
    require '../class/Boite_Connexion.php';
class Utilisateurs{


    private $id_utilisateur;
    private $sexe_utilisateur;
    private $type_utilisateur;
    private $nom_utilisateur;
    private $prenom_utilisateur;
    private $date_naissance_utilisateur;
    private $adresse_mail_utilisateur;
    private $password_utilisateur;
    private $date_creation_utilisateur ;
    private $villes_habitations ;
    private $code_postal_habitations ;
    private $numero_habitations ;
    private $rue_habitations ;
    private $extension_habitations ;
    private $CB_number ;
    private $CB_name ;
    private $CB_validate;    
    private $CB_activite ;

    public function __construct(
        int $id_utilisateur,
        int $sexe_utilisateur,
        date $type_utilisateur,
        int $nom_utilisateur,
        string $prenom_utilisateur,
        date $date_naissance_utilisateur,
        date $adresse_mail_utilisateur,
        int $password_utilisateur,
        date $date_creation_utilisateur,
        string $villes_habitations,
        string $code_postal_habitations,
        int $numero_habitations,
        string $rue_habitations,
        string $extension_habitations,
        int $CB_number,
        string $CB_name,
        date $CB_validate,
        string $CB_activite )

{
    $this->id_utilisateur = $id_utilisateur;
    $this->sexe_utilisateur = $sexe_utilisateur;
    $this->type_utilisateur = $type_utilisateur;
    $this->nom_utilisateur = $nom_utilisateur;
    $this->prenom_utilisateur = $prenom_utilisateur;
    $this->date_naissance_utilisateur = $date_naissance_utilisateur;
    $this->adresse_mail_utilisateur = $adresse_mail_utilisateur;
    $this->password_utilisateur = $password_utilisateur;
    $this->date_creation_utilisateur = $date_creation_utilisateur;
    $this->villes_habitations = $villes_habitations;
    $this->code_postal_habitations  = $code_postal_habitations ;
    $this->numero_habitations  = $numero_habitations ;
    $this->rue_habitations  = $rue_habitations ;
    $this->extension_habitations  = $extension_habitations ;
    $this->CB_number  = $CB_number ;
    $this->CB_name  = $CB_name ;
    $this->CB_validate  = $CB_validate ;
    $this->CB_activite  = $CB_activite ;

}
// function fonctionne uniquement avec la requete SELECT * FROM table
        //toute la table
        public function getAllUtilisateurs($sql){
            $connex = Boite_Connexion::getDB();
            $req = $connex ->prepare($sql);
            $req -> execute();
            $reponse = $connex->fetchOject();
            //fetch(PDO::FetchObject);
            return $reponse;
        }
            //par Id
    public function getUtilisateurById($sql,$id_utilisateur){
            $connex = Boite_Connexion::connect();
            $req = $connex ->prepare($sql);
            $req->bindParam(":id_utilisateur", $id_utilisateur, PDO::PARAM_INT);
            $req -> execute();
            $reponse =$connex->fetchOject();
            //fetch(PDO::FetchObject);
            return $reponse;
        }
            // par name
    public function getUtilisateurByName($sql,$nom_utilisateur){
            $connex = Boite_Connexion::connect();
            $req = $connex ->prepare($sql);
            $req->bindParam(":nom_utilisateur", $nom_utilisateur,PDO::PARAM_STR);
            $req -> execute();
            $reponse =$connex->fetchOject();
           // fetch(PDO::FetchObject);
            return $reponse;
        }





























    /**
     * Get the value of id_utilisateur
     */ 
    public function getId_utilisateur()
    {
        return $this->id_utilisateur;
    }

    /**
     * Set the value of id_utilisateur
     *
     * @return  self
     */ 
    public function setId_utilisateur($id_utilisateur)
    {
        $this->id_utilisateur = $id_utilisateur;

        return $this;
    }

    /**
     * Get the value of sexe_utilisateur
     */ 
    public function getSexe_utilisateur()
    {
        return $this->sexe_utilisateur;
    }

    /**
     * Set the value of sexe_utilisateur
     *
     * @return  self
     */ 
    public function setSexe_utilisateur($sexe_utilisateur)
    {
        $this->sexe_utilisateur = $sexe_utilisateur;

        return $this;
    }

    /**
     * Get the value of type_utilisateur
     */ 
    public function getType_utilisateur()
    {
        return $this->type_utilisateur;
    }

    /**
     * Set the value of type_utilisateur
     *
     * @return  self
     */ 
    public function setType_utilisateur($type_utilisateur)
    {
        $this->type_utilisateur = $type_utilisateur;

        return $this;
    }

    /**
     * Get the value of nom_utilisateur
     */ 
    public function getNom_utilisateur()
    {
        return $this->nom_utilisateur;
    }

    /**
     * Set the value of nom_utilisateur
     *
     * @return  self
     */ 
    public function setNom_utilisateur($nom_utilisateur)
    {
        $this->nom_utilisateur = $nom_utilisateur;

        return $this;
    }

    /**
     * Get the value of prenom_utilisateur
     */ 
    public function getPrenom_utilisateur()
    {
        return $this->prenom_utilisateur;
    }

    /**
     * Set the value of prenom_utilisateur
     *
     * @return  self
     */ 
    public function setPrenom_utilisateur($prenom_utilisateur)
    {
        $this->prenom_utilisateur = $prenom_utilisateur;

        return $this;
    }

        /**
         * Get the value of date_naissance_utilisateur
         */ 
        public function getDate_naissance_utilisateur()
        {
                return $this->date_naissance_utilisateur;
        }

        /**
         * Set the value of date_naissance_utilisateur
         *
         * @return  self
         */ 
        public function setDate_naissance_utilisateur($date_naissance_utilisateur)
        {
                $this->date_naissance_utilisateur = $date_naissance_utilisateur;

                return $this;
        }

        /**
         * Get the value of adresse_mail_utilisateur
         */ 
        public function getAdresse_mail_utilisateur()
        {
                return $this->adresse_mail_utilisateur;
        }

        /**
         * Set the value of adresse_mail_utilisateur
         *
         * @return  self
         */ 
        public function setAdresse_mail_utilisateur($adresse_mail_utilisateur)
        {
                $this->adresse_mail_utilisateur = $adresse_mail_utilisateur;

                return $this;
        }

    /**
     * Get the value of password_utilisateur
     */ 
    public function getPassword_utilisateur()
    {
        return $this->password_utilisateur;
    }

    /**
     * Set the value of password_utilisateur
     *
     * @return  self
     */ 
    public function setPassword_utilisateur($password_utilisateur)
    {
        $this->password_utilisateur = $password_utilisateur;

        return $this;
    }

        /**
         * Get the value of date_creation_utilisateur
         */ 
        public function getDate_creation_utilisateur()
        {
                return $this->date_creation_utilisateur;
        }

        /**
         * Set the value of date_creation_utilisateur
         *
         * @return  self
         */ 
        public function setDate_creation_utilisateur($date_creation_utilisateur)
        {
                $this->date_creation_utilisateur = $date_creation_utilisateur;

                return $this;
        }

    /**
     * Get the value of villes_habitations
     */ 
    public function getVilles_habitations()
    {
        return $this->villes_habitations;
    }

    /**
     * Set the value of villes_habitations
     *
     * @return  self
     */ 
    public function setVilles_habitations($villes_habitations)
    {
        $this->villes_habitations = $villes_habitations;

        return $this;
    }

    /**
     * Get the value of code_postal_habitations
     */ 
    public function getCode_postal_habitations()
    {
        return $this->code_postal_habitations;
    }

    /**
     * Set the value of code_postal_habitations
     *
     * @return  self
     */ 
    public function setCode_postal_habitations($code_postal_habitations)
    {
        $this->code_postal_habitations = $code_postal_habitations;

        return $this;
    }

    /**
     * Get the value of numero_habitations
     */ 
    public function getNumero_habitations()
    {
        return $this->numero_habitations;
    }

    /**
     * Set the value of numero_habitations
     *
     * @return  self
     */ 
    public function setNumero_habitations($numero_habitations)
    {
        $this->numero_habitations = $numero_habitations;

        return $this;
    }

    /**
     * Get the value of rue_habitations
     */ 
    public function getRue_habitations()
    {
        return $this->rue_habitations;
    }

    /**
     * Set the value of rue_habitations
     *
     * @return  self
     */ 
    public function setRue_habitations($rue_habitations)
    {
        $this->rue_habitations = $rue_habitations;

        return $this;
    }

    /**
     * Get the value of extension_habitations
     */ 
    public function getExtension_habitations()
    {
        return $this->extension_habitations;
    }

    /**
     * Set the value of extension_habitations
     *
     * @return  self
     */ 
    public function setExtension_habitations($extension_habitations)
    {
        $this->extension_habitations = $extension_habitations;

        return $this;
    }

    /**
     * Get the value of CB_number
     */ 
    public function getCB_number()
    {
        return $this->CB_number;
    }

    /**
     * Set the value of CB_number
     *
     * @return  self
     */ 
    public function setCB_number($CB_number)
    {
        $this->CB_number = $CB_number;

        return $this;
    }

    /**
     * Get the value of CB_name
     */ 
    public function getCB_name()
    {
        return $this->CB_name;
    }

    /**
     * Set the value of CB_name
     *
     * @return  self
     */ 
    public function setCB_name($CB_name)
    {
        $this->CB_name = $CB_name;

        return $this;
    }

    /**
     * Get the value of CB_validate
     */ 
    public function getCB_validate()
    {
        return $this->CB_validate;
    }

    /**
     * Set the value of CB_validate
     *
     * @return  self
     */ 
    public function setCB_validate($CB_validate)
    {
        $this->CB_validate = $CB_validate;

        return $this;
    }

    /**
     * Get the value of CB_activite
     */ 
    public function getCB_activite()
    {
        return $this->CB_activite;
    }

    /**
     * Set the value of CB_activite
     *
     * @return  self
     */ 
    public function setCB_activite($CB_activite)
    {
        $this->CB_activite = $CB_activite;

        return $this;
    }
}