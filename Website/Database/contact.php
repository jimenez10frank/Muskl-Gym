<?php


require "db.php";

class Contact {
    private $pdo;
    public function __construct(){
        $this->pdo = new Database();
    }

    public function contact($name, $email, $message) {
        $this->pdo->run("INSERT INTO contact (name, email, message) VALUES (:name, :email, :message)",
        
        [
            ':name'     => $name,
            ':email'    => $email,
            ':message'  => $message
         ]);

    }
}

?>