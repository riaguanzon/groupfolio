<?php
require_once "database.class.php";

class Profile
{
    public $user_id;
    public $profile_id;

    private $conn;

    function __construct()
    {
        $db = new Database;
        $this->conn = $db->connect();
    }

    // This method saves the profile picture file path to the database
    function profile_picture()
    {
        // Check if the user already has a profile picture
        $sql = "SELECT * FROM profile WHERE user_id = :user_id";
        $query = $this->conn->prepare($sql);
        $query->bindParam(":user_id", $this->user_id);
        $query->execute();
        
        // If the user already has a profile picture, update it
        if ($query->rowCount() > 0) {
            $sql = "UPDATE profile SET profile_id = :profile_id WHERE user_id = :user_id";
            $query = $this->conn->prepare($sql);
        } else {
            // Otherwise, insert a new record
            $sql = "INSERT INTO profile(user_id, profile_id) VALUES (:user_id, :profile_id)";
            $query = $this->conn->prepare($sql);
        }

        // Bind parameters and execute query
        $query->bindParam(":user_id", $this->user_id);
        $query->bindParam(":profile_id", $this->profile_id);
        
        return $query->execute();
    }

    function set_profile()
    {
        $sql = "SELECT * FROM user WHERE user_id = :user_id";
        $query = $this->conn->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);
        $query->execute();
        return $query->fetch();
    }
}
