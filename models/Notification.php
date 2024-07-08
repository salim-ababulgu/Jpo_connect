<?php
require_once '../config/db.php';

class Notification {
    private $conn;
    private $table_name = "notification";

    public $id;
    public $utilisateur_id;
    public $jpo_id;
    public $contenu;
    public $date_notification;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET utilisateur_id=:utilisateur_id, jpo_id=:jpo_id, contenu=:contenu, date_notification=:date_notification";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":utilisateur_id", $this->utilisateur_id);
        $stmt->bindParam(":jpo_id", $this->jpo_id);
        $stmt->bindParam(":contenu", $this->contenu);
        $stmt->bindParam(":date_notification", $this->date_notification);

        if($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " SET utilisateur_id=:utilisateur_id, jpo_id=:jpo_id, contenu=:contenu, date_notification=:date_notification WHERE id=:id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":utilisateur_id", $this->utilisateur_id);
        $stmt->bindParam(":jpo_id", $this->jpo_id);
        $stmt->bindParam(":contenu", $this->contenu);
        $stmt->bindParam(":date_notification", $this->date_notification);
        $stmt->bindParam(":id", $this->id);

        if($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id=:id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id", $this->id);

        if($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
