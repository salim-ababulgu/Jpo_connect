<?php
require_once '../models/Commentaire.php';

class CommentaireController {
    private $db;
    private $commentaire;

    public function __construct($db) {
        $this->db = $db;
        $this->commentaire = new Commentaire($db);
    }

    public function create($data) {
        $this->commentaire->utilisateur_id = $data['utilisateur_id'];
        $this->commentaire->jpo_id = $data['jpo_id'];
        $this->commentaire->contenu = $data['contenu'];
        $this->commentaire->date_commentaire = $data['date_commentaire'];

        if($this->commentaire->create()) {
            return true;
        }

        return false;
    }

    public function read() {
        return $this->commentaire->read();
    }

    public function update($data) {
        $this->commentaire->id = $data['id'];
        $this->commentaire->utilisateur_id = $data['utilisateur_id'];
        $this->commentaire->jpo_id = $data['jpo_id'];
        $this->commentaire->contenu = $data['contenu'];
        $this->commentaire->date_commentaire = $data['date_commentaire'];

        if($this->commentaire->update()) {
            return true;
        }

        return false;
    }

    public function delete($id) {
        $this->commentaire->id = $id;

        if($this->commentaire->delete()) {
            return true;
        }

        return false;
    }
}
?>
