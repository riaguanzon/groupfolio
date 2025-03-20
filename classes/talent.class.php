<?php
require_once "database.class.php";

class Talents
{
    private $conn;
    public $user_id;
    public $talent;
    

    function __construct()
    {
        $db = new Database;
        $this->conn = $db->connect();
    }

    function addtalent()
    {
        $sql = "INSERT INTO talents (user_id, talent) VALUES (:user_id, :talent)";
        $query = $this->conn->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);

        foreach ($this->talent as $talent) {
            $query->bindParam(':talent', $talent);
            $query->execute();
        }
        return true;
    }
    function fetchtalent()
    {
        $sql = "SELECT * FROM talents WHERE user_id = :user_id";
        $query = $this->conn->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);

        $query->execute();
        return $query->fetchAll();
    }
}
