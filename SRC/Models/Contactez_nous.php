<?php
require '../class/Boite_Connexion.php';
class Contact
{
private $id_contact;
private $nom_contact;
private $email_contact;
private $message_contact;


public function __construct(
int $id_contact,
string $nom_contact,
string $email_contact,
string $message_contact

)
{
$this->id_contact = $id_contact;
$this->nom_contact = $nom_contact;
$this->email_contact = $email_contact;
$this->message_contact = $message_contact;


}

// function fonctionne uniquement avec la requete SELECT * FROM table
        //toute la table
        public function getAllContacts($sql){
                $connex = Boite_Connexion::getDB();
                $req = $connex ->prepare($sql);
                $req -> execute();
                $reponse = $connex->fetchOject();
                //fetch(PDO::FetchObject);
                return $reponse;
            }
                //par Id
        public function getContactById($sql,$id_contact){
                $connex = Boite_Connexion::connect();
                $req = $connex ->prepare($sql);
                $req->bindParam(":id_contact", $id_contact, PDO::PARAM_INT);
                $req -> execute();
                $reponse =$connex->fetchOject();
                //fetch(PDO::FetchObject);
                return $reponse;
            }
                // par nom
        public function getArticleByName($sql,$nom_contact){
                $connex = Boite_Connexion::connect();
                $req = $connex ->prepare($sql);
                $req->bindParam(":nom_contact", $nom_contact,PDO::PARAM_INT);
                $req -> execute();
                $reponse =$connex->fetchOject();
               // fetch(PDO::FetchObject);
                return $reponse;
            }



/**
 * Get the value of id_contact
 */ 
public function getId_contact()
{
return $this->id_contact;
}

/**
 * Set the value of id_contact
 *
 * @return  self
 */ 
public function setId_contact($id_contact)
{
$this->id_contact = $id_contact;

return $this;
}

/**
 * Get the value of nom_contact
 */ 
public function getNom_contact()
{
return $this->nom_contact;
}

/**
 * Set the value of nom_contact
 *
 * @return  self
 */ 
public function setNom_contact($nom_contact)
{
$this->nom_contact = $nom_contact;

return $this;
}

/**
 * Get the value of email_contact
 */ 
public function getEmail_contact()
{
return $this->email_contact;
}

/**
 * Set the value of email_contact
 *
 * @return  self
 */ 
public function setEmail_contact($email_contact)
{
$this->email_contact = $email_contact;

return $this;
}

/**
 * Get the value of message_contact
 */ 
public function getMessage_contact()
{
return $this->message_contact;
}

/**
 * Set the value of message_contact
 *
 * @return  self
 */ 
public function setMessage_contact($message_contact)
{
$this->message_contact = $message_contact;

return $this;
}
}
