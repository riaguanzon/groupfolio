<?php
require_once 'database.class.php';
class User
{
    private $conn;

    function __construct()
    {
        $db = new Database;
        $this->conn = $db->connect();
    }

    function create_account($username, $password)
    {
        $sql = "INSERT INTO user(username, password) VALUES(:username, :password)";
        $query = $this->conn->prepare($sql);
        $query->bindParam(":username", $username);
        $hashpassword = password_hash($password, PASSWORD_DEFAULT);
        $query->bindParam(":password", $hashpassword);

        if ($query->execute()) {
            $_SESSION['user_credentials'] = [
                'user_id' => $this->conn->lastInsertId(),
            ];
            header('Location: home.php');
        } else {
            return false;
        }
    }


    function login($username, $password)
    {
        $sql = "SELECT * FROM user WHERE username = :username LIMIT 1";
        $query = $this->conn->prepare($sql);
        $query->bindParam(":username", $username);

        if ($query->execute()) {
            $user_data = $query->fetch(PDO::FETCH_ASSOC); // Fetch a single row

            if ($user_data && password_verify($password, $user_data['password'])) {
                $_SESSION['user'] = [
                    'username' => $user_data['username'],
                    'user_id' => $user_data['user_id'],
                    'is_admin' => $user_data['is_admin']
                ];
                header('location: home.php');
                exit;
            } else {
                $_SESSION['incorrect_credentials'] = 'Incorrect Credentials';
            }
        } else {
            $_SESSION['incorrect_credentials'] = 'Query execution failed';
        }
    }

    function record_exist($username)
    {
        $sql = 'SELECT COUNT(*) FROM user WHERE username = :username LIMIT 1';
        $query = $this->conn->prepare($sql);

        $query->bindParam(":username", $username);

        $query->execute();
        $count = $query->fetchColumn();

        return $count > 0;
    }
}
