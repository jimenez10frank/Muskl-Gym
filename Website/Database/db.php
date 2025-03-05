<?php
class Database{
    public $pdo;
    
    public function __construct($db = "musklgym", $user = "root", $pwd = "", $host = "localhost")
    {
        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
            echo "Connected to the database";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            echo $e->getMessage();
        }
    }

    // Run je queries gelijk 
    public function run($sql, $plcd = null){
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($plcd);
        return $stmt;
    }

};
$pdo = new Database();

?>
