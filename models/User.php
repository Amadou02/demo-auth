<?php

require_once __DIR__ . '/../utils/db.php';
class User
{
    private $id = 0;
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $createdAt;
    private $updatedAt;

    private $db;

    public function __construct($firstname = "", $lastname = "", $email = "", $password = "")
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->db = db_connect();
    }

    function __set($property, $value)
    {
        $this->$property = $value;
    }

    public function create()
    {

        $sql = "INSERT INTO `users` (`firstname`, `lastname`,`email`,`password`) VALUES (:firstname, :lastname, :email, :password)";

        $req = $this->db->prepare($sql);

        $req->bindValue(':firstname', $this->firstname);
        $req->bindValue(':lastname', $this->lastname);
        $req->bindValue(':email', $this->email);
        $req->bindValue(':password', $this->password);

        try {
            return $req->execute();
        } catch (PDOException $ex) {
            return false;
        }
    }

    public function findAll()
    {
    }

    /**
     * pseudo,  email ou id de l'utilisateur
     */
    public function findOne()
    {
        $sql = "SELECT `id`, `firstname`, `lastname`, `email`, `password`, `createdAt`, `updatedAt` FROM `users` WHERE `id` = :id OR `email` = :email";

        $req = $this->db->prepare($sql);
        // associer les variable sql et les données envoyées par l'utilisateur
        // bind permet de sécuriser contre les injections sql
        $req->bindValue(':email', $this->email);
        $req->bindValue(':id', $this->id);

        try {
            
            if($req->execute()) {
                // on return les données récupérées
                return $req->fetch(PDO::FETCH_OBJ);
            }
        } catch (PDOException $ex) {
            return false;
        }
    }
}
