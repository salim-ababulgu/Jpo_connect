<?php
require_once '../models/Inscription.php';

class InscriptionController {
    private $db;
    private $inscription;

    public function __construct($db) {
        $this->db = $db;
        $this->inscription = new Inscription($db);
    }

    public function create($data) {
        $this->inscription->utilisateur_id = $data['utilisateur_id'];
        $this->inscription->jpo_id = $data['jpo_id'];
        $this->inscription->date_inscription = $data['date_inscription'];

        if($this->inscription->create()) {
            return true;
        }

        return false;
    }

    public function read() {
        return $this->inscription->read();
    }

    public function update($data) {
        $this->inscription->id = $data['id'];
        $this->inscription->utilisateur_id = $data['utilisateur_id'];
        $this->inscription->jpo_id = $data['jpo_id'];
        $this->inscription->date_inscription = $data['date_inscription'];

        if($this->inscription->update()) {
            return true;
        }

        return false;
    }

    public function delete($id) {
        $this->inscription->id = $id;

        if($this->inscription->delete()) {
            return true;
        }

        return false;
    }
}
?>
