<?php
require_once "database.class.php";

class Projects
{
    public $user_id;
    public $project_id;
    private $conn;
    public $title = "";
    public $projects = "";
    public $description = "";

    function __construct()
    {
        $db = new Database;
        $this->conn = $db->connect();
    }

    // Add project method
    function addprojects()
    {
        $sql = "INSERT INTO projects (user_id, projects, title, description) VALUES (:user_id, :projects, :title, :description) ";
        $query = $this->conn->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);
        $query->bindParam(':projects', $this->projects);
        $query->bindParam(':title', $this->title);
        $query->bindParam(':description', $this->description);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Get all projects for a specific user
    function ac()
    {
        $sql = "SELECT * FROM projects WHERE user_id = :user_id AND status = 'Active'   ";
        $query = $this->conn->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);

        $query->execute();
        return $query->fetchAll();
    }


    function allprojects()
    {
        $sql = "SELECT * FROM projects WHERE status = 'Active' ";
        $query = $this->conn->prepare($sql);
        // $query->bindParam(':user_id', $this->user_id);

        $query->execute();
        return $query->fetchAll();
    }


    function image()
    {
        $sql = "SELECT project_id FROM projects WHERE user_id = :user_id ORDER BY project_id DESC LIMIT 1 ";
        $query = $this->conn->prepare($sql);
        $query->bindParam(":user_id", $this->user_id);
        $query->execute();
        return $query->fetchColumn();
    }
    function getimage()
    {
        $sql = "SELECT * FROM projects WHERE user_id = :user_id AND status = 'Active'   ";
        $query = $this->conn->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);

        $query->execute();
        return $query->fetch();
    }
    



    // Delete project method
    function deleteProject($projectId)
    {
        // Prepare the SQL statement with parameterized query to prevent SQL injection
        $sql = "DELETE FROM projects WHERE id = :projectId AND user_id = :userId";

        // Bind the parameters to the query
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':projectId', $projectId);
        $stmt->bindParam(':userId', $this->user_id);

        // Execute the query
        if ($stmt->execute()) {
            return true; // Deletion successful
        } else {
            // Handle errors, log them, or throw an exception
            error_log("Error deleting project: " . $stmt->errorInfo()[2]);
            return false; // Deletion failed
        }
    }
    // function delete($project_id){
    //     $sql = "DELETE FROM projects WHERE id = :project_id;";
    //     $query = $this->conn->prepare($sql);
    //     $query->bindParam(':project_id', $project_id);
    //     return $query->execute();

    // }
}
