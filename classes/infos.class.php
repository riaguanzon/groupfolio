<?php
require_once "database.class.php";

class Infos
{
    public $user_id;
    public $lastname = "";
    public $firstname = "";
    public $birthday = "";
    public $section = "";
    public $bio = "";
    public $address= "";
    public $contact = "";
    public $facebook = "";
    public $github = "";
    public $insta = "";
    public $email = "";
    public $elem = "";
    public $elemgrad = "";
    public $high = "";
    public $juniorgrad = "";    
    public $shs = "";
    public $seniorgrad = "";
    public $college = "";
    public $collegegrad = "";

    private $conn;

    function __construct()
    {
        $db = new Database;
        $this->conn = $db->connect();
    }       
    function add()
    {
        $sql = "INSERT INTO infos(user_id, birthday, section, bio, contact, facebook, github, insta, address, email, elem, elemgrad, high, juniorgrad, shs, seniorgrad, college, collegegrad) VALUES (:user_id, :birthday, :section, :bio, :contact, :facebook, :github, :insta, :address, :email, :elem, :elemgrad, :high, :juniorgrad, :shs, :seniorgrad, :college, :collegegrad)";
        $query = $this->conn->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);
        // $query->bindParam(':lastname', $this->lastname);
        // $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':birthday', $this->birthday);
        $query->bindParam(':section', $this->section);
        $query->bindParam(':bio', $this->bio);
        $query->bindParam(':contact', $this->contact);
        $query->bindParam(':facebook', $this->facebook);
        $query->bindParam(':github', $this->github);
        $query->bindParam(':insta', $this->insta);
        $query->bindParam(':address', $this->address);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':elem', $this->elem);
        $query->bindParam(':elemgrad', $this->elemgrad);
        $query->bindParam(':high', $this->high);
        $query->bindParam(':juniorgrad', $this->juniorgrad);
        $query->bindParam(':shs', $this->shs);
        $query->bindParam(':seniorgrad', $this->seniorgrad);
        $query->bindParam(':college', $this->college);
        $query->bindParam(':collegegrad', $this->collegegrad);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
    function fetchinfos($user_id){
        $sql = "SELECT * FROM infos WHERE user_id = :user_id";
        $query = $this->conn->prepare($sql);
        $query->bindParam(':user_id', $user_id);

        $query->execute();
        return $query->fetch();
    }

    function all_pending(){
        $sql = "SELECT * FROM user WHERE request_status = 'Pending'";
        $query = $this->conn->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    function user_info(){
        $sql = "SELECT * FROM user WHERE user_id = :user_id";
        $query = $this->conn->prepare($sql);

        $query->bindParam(':user_id', $this->user_id);
        $query->execute();
        return $query->fetch();
    }
    function account()
    {
        $sql = "SELECT infos.*, user.* FROM infos
                INNER JOIN user ON infos.user_id = user.user_id
                WHERE infos.user_id = :user_id";
        $query = $this->conn->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);

        $query->execute();
        return $query->fetch();
    }
}
