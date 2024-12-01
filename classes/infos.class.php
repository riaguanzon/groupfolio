<?php
require_once "database.class.php";

class Infos
{
    public $user_id = '';
    public $lastname = "";
    public $firstname = "";
    public $middleini = "";
    public $birthday = "";
    public $bio = "";
    public $contact = "";
    private $conn;

    function __construct()
    {
        $db = new Database;
        $this->conn = $db->connect();
    }
    function add()
    {
        $sql = "INSERT INTO infos(user_id, lastname, firstname, middleini, birthday, bio, contact) VALUES (:user_id, :lastname, :firstname, :middleini, :birthday, :bio, :contact)";
        $query = $this->conn->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':middleini', $this->middleini);
        $query->bindParam(':birthday', $this->birthday);
        $query->bindParam(':bio', $this->bio);
        $query->bindParam(':contact', $this->contact);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
