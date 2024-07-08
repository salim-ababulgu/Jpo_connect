<?php
require_once '../models/JPO.php';

class JPOController {
    private $db;
    private $jpo;

    public function __construct($db) {
        $this->db = $db;
        $this->jpo = new JPO($db);
    }

    public function create($data) {
        $this->jpo->nom = $data['nom'];
        $this->jpo->date = $data['date'];
        $this->jpo->lieu = $data['lieu'];
        $this->jpo->capacite = $data['capacite'];

        if($this->jpo->create()) {
            return true;
        }

        return false;
    }

    // Ajoute d'autres méthodes comme read, update, delete
}
?>
