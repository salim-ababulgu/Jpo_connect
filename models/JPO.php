<?php
require_once '../config/db.php';

class JPO {
    private $conn;
    private $table_name = "jpo";

    public $id;
    public $nom;
    public $date;
    public $lieu;
    public $capacite;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET nom=:nom, date=:date, lieu=:lieu, capacite=:capacite";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nom", $this->nom);
        $stmt->bindParam(":date", $this->date);
        $stmt->bindParam(":lieu", $this->lieu);
        $stmt->bindParam(":capacite", $this->capacite);

        if($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Ajoute d'autres méthodes comme read, update, delete
}
?>
