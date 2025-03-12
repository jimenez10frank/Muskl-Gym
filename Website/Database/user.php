<?php

require "db.php";

class User{
    private $pdo;
    public function __construct(){
        $this->pdo = new Database();
    }

    // register functie
 public function register($name, $lastname, $birthdate, $sex, $phonenumber, $email,  $password) {

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $this->pdo->run("INSERT INTO user (name, lastname, birthdate, sex, phonenumber, email, password) VALUES (:name, :lastname, :birthdate, :sex, :phonenumber, :email, :password)",
        
        [
            ':name'     => $name,
            ':lastname' => $lastname,
            ':birthdate' => $birthdate,
            ':sex'      => $sex,
            ':phonenumber' => $phonenumber,
            ':email'    => $email,
            ':password' => $hashedPassword,
         ]);

    }

    // login functie

    public function loginUser($email) {
    
        $data = $this->pdo->run("SELECT * FROM user WHERE email = :email", [
            ':email' => $email
        ])->fetch();
        return $data;
        }

    // membership functie

    public function memberships($user_id, $type, $created_at, $ends_at) {
        $this->pdo->run(
            "INSERT INTO membership (user_id, type, created_at, ends_at) 
             VALUES (:user_id, :type, :created_at, :ends_at)", 
            [
                ':user_id' => $user_id,
                ':type' => $type,
                ':created_at' => $created_at,
                ':ends_at' => $ends_at
            ]
        );
    }
    
    
}

?>