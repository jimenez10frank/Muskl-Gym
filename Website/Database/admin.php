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

    // see contact functie
    public function seeContact() {
        $data = $this->pdo->run("SELECT * FROM contact")->fetchAll();
        return $data;
    }

    // edit membership functie
    public function editMembership($id, $type, $created_at, $ends_at, $status) {
        $this->pdo->run("UPDATE membership SET type = :type, created_at = :created_at, ends_at = :ends_at, status = :status WHERE id = :id",
        [
            ':id'           => $id,
            ':type'         => $type,
            ':created_at'   => $created_at,
            ':ends_at'      => $ends_at,
            ':status'       => $status
        ]);
    }

    // edit user functie    

    public function editUser($id, $name, $lastname, $email, $birthdate, $sex, $phonenumber) {
        $this->pdo->run("UPDATE user SET name = :name, lastname = :lastname, email = :email, birthdate = :birthdate WHERE id = :id",
        [
            ':id'           => $id,
            ':name'         => $name,
            ':lastname'     => $lastname,
            ':email'        => $email,
            ':birthdate'    => $birthdate
        ]);
    }


        
    // get membership functie
    public function getMembership($id) {
        $data = $this->pdo->run("SELECT * FROM membership WHERE id = :id", [
            ':id' => $id
        ])->fetch();
        return $data;
    }
    public function getUser($id) {
        $data = $this->pdo->run("SELECT * FROM user WHERE id = :id", [
            ':id' => $id
        ])->fetch();
        return $data;
    }

    // delete membership functie
    public function deleteMembership($id) {
        $this->pdo->run("DELETE FROM membership WHERE id = :id", [
            ':id' => $id
        ]);
    }

    // delete message functie
    public function deleteMessage($id) {
        $this->pdo->run("DELETE FROM contact WHERE id = :id", [
            ':id' => $id
        ]);
    }

    // delete user functie
    public function deleteUser($id) {
        $this->pdo->run("DELETE FROM user WHERE id = :id", [
            ':id' => $id
        ]);
    }
}

?>