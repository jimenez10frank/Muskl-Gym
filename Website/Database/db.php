<?php
// hier is een class database dan ga ik verder gebruik maken van oop
class Database {
    // hier maak ik een public pdo variabele die ik later ga gebruiken
        public $pdo;

    // hier is mijn public function om de database connectie te maken
        public function __construct($db = "musklgym", $user="root", $pwd="", $host="localhost") {
            try {
                $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // als het fout gaat geef ik deze melding terug:
            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
    
        }

         function run($sql, $placeholders = null) {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($placeholders);
            return $stmt;
        }
    }

// hier maak ik gebruik van de database class zo dat het wordt uitgevoerd.
$pdo = new Database();

?>
