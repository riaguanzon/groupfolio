<?php
require_once "database.class.php";

class Certificates
{
    private $conn;
    public $user_id;
    public $certificate;


    function __construct()
    {
        $db = new Database;
        $this->conn = $db->connect();
    }

    function addcertificate()
    {
        $sql = "INSERT INTO certifications (user_id, certificate) VALUES (:user_id, :certificate)";
        $query = $this->conn->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);

        foreach ($this->certificate as $cert) {
            $query->bindParam(':certificate', $cert);
            $query->execute();
        }
        return true;
    }
    function fetchcertificate()
    {
        $sql = "SELECT * FROM certifications WHERE user_id = :user_id";
        $query = $this->conn->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);

        $query->execute();
        return $query->fetchAll();
    }
}
