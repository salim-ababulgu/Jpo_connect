<?php
    require_once '../models/Utilisateur.php';

    class UtilisateurController {
        private $db;
        private $utilisateur;

        public function __construct($db) {
            $this->db = $db;
            $this->utilisateur = new Utilisateur($db);
        }

        public function create($data) {
            $this->utilisateur->nom = $data['nom'];
            $this->utilisateur->prenom = $data['prenom'];
            $this->utilisateur->email = $data['email'];
            $this->utilisateur->mot_de_passe = password_hash($data['mot_de_passe'], PASSWORD_BCRYPT);
            $this->utilisateur->role_id = $data['role_id'];

            if($this->utilisateur->create()) {
                return true;
            }

            return false;
        }

        // Ajoute d'autres méthodes comme read, update, delete
    }
?>