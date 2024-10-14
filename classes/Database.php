<?php


class Database {
    private $server_name = "localhost";
    private $username = "root";
    private $password = ""; //root - for Mac users
    private $db_name = "the_company";
    protected $conn; //Child classes that extends to this class e.g Users.php is allowed to use

    public function __construct(){
        $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);

        if($this->conn->connect_error){
            die("Unable to connect to the database: " . $this->conn->connect_error);
        }
    }
}

?>