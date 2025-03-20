<?php
require_once 'database.class.php';


class Delete
{
    private $conn;

    function __construct()
    {
        $db = new Database;
        $this->conn = $db->connect();
    }

    function delete_modal($project_id)
    {
        $sql = "SELECT * FROM projects WHERE project_id = :project_id";
        $query = $this->conn->prepare($sql);

        $query->bindParam(":project_id", $project_id);
        $query->execute();

        return $query->fetch();
    }
    function delete_user($user_id)
    {
        // Check if the user exists
        $sql = "SELECT * FROM user WHERE user_id = :user_id";
        $query = $this->conn->prepare($sql);
        $query->bindParam(":user_id", $user_id);
        $query->execute();
    
        // If the user exists, proceed with deletion
        if ($query->rowCount() > 0) {
            // Proceed with deleting the user
            $sql_delete = "DELETE FROM user WHERE user_id = :user_id";
            $delete_query = $this->conn->prepare($sql_delete);
            $delete_query->bindParam(":user_id", $user_id);
            $delete_query->execute();
    
            // Check if the deletion was successful
            if ($delete_query->rowCount() > 0) {
                return true; // Successfully deleted user
            } else {
                return false; // Deletion failed
            }
        } else {
            return false; // User not found
        }
    }
    
    function delete($project_id)
    {
        $sql = "UPDATE projects SET status = 'Deleted' WHERE project_id = :project_id";
        $query = $this->conn->prepare($sql);

        $query->bindParam(":project_id", $project_id);
        $query->execute();
    }
}
