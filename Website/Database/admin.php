<?php

require "db.php";


class Admin {
    private $pdo;
    public function __construct(){
        $this->pdo = new Database();
    }

    // login functie Admin
    public function loginAdmin($email) {
    
        $data = $this->pdo->run("SELECT * FROM admin WHERE email = :email", [
            ':email' => $email
        ])->fetch();
        return $data;
        }

    // see memberships functie
    public function seeMemberships() {
        $data = $this->pdo->run("SELECT * FROM membership")->fetchAll();
        return $data;
    }

    // see users functie
    public function seeUsers() {
        $data = $this->pdo->run("SELECT * FROM user")->fetchAll();
        return $data;
    }
}

?>