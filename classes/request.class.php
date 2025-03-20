<?php
require_once 'database.class.php';

class Request {
    private $conn;

    function __construct(){
        $db = new Database;
        $this->conn = $db->connect();
    }

    function accept($user_id){
        $sql = "UPDATE user SET request_status = 'Accepted' WHERE user_id = :user_id";
        $query = $this->conn->prepare($sql);

        $query->bindParam(":user_id", $user_id);
        $query->execute();
    }
    function decline($user_id){
        $sql = "UPDATE user SET request_status = 'Declined' WHERE user_id = :user_id";
        $query = $this->conn->prepare($sql);

        $query->bindParam(":user_id", $user_id);
        $query->execute();
    }
}

?>