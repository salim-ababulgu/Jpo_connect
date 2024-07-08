<?php
require_once '../config/db.php';

class Utilisateur {
    private $conn;
    private $table_name = "utilisateur";

    public $id;
    public $nom;
    public $prenom;
    public $email;
    public $mot_de_passe;
    public $role_id;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET nom=:nom, prenom=:prenom, email=:email, mot_de_passe=:mot_de_passe, role_id=:role_id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nom", $this->nom);
        $stmt->bindParam(":prenom", $this->prenom);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":mot_de_passe", $this->mot_de_passe);
        $stmt->bindParam(":role_id", $this->role_id);

        if($stmt->execute()) {
            return true;
        }

        return false;
    }

    // On ajoute ici d'autres méthodes comme read, update, delete
}
?>
