<?php

// Inclure le fichier de configuration de la base de données
require_once '../config/db.php';

// Créer une instance de la classe Database pour obtenir la connexion
$database = new Database();
$db = $database->getConnection();

// Inclure les fichiers de contrôleur après avoir obtenu la connexion à la base de données
require_once '../controllers/UtilisateurController.php';
require_once '../controllers/JPOController.php';
require_once '../controllers/InscriptionController.php';
require_once '../controllers/CommentaireController.php';
require_once '../controllers/NotificationController.php';

// Créer les instances de contrôleur en passant $db
$utilisateurController = new UtilisateurController($db);
$jpoController = new JPOController($db);
$inscriptionController = new InscriptionController($db);
$commentaireController = new CommentaireController($db);
$notificationController = new NotificationController($db);

// Routes pour Inscription
if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch($action) {
        case 'create_inscription':
            // Vérifie les données postées
            if(isset($_POST['utilisateur_id']) && isset($_POST['jpo_id']) && isset($_POST['date_inscription'])) {
                // Préparation des données
                $data = array(
                    'utilisateur_id' => $_POST['utilisateur_id'],
                    'jpo_id' => $_POST['jpo_id'],
                    'date_inscription' => $_POST['date_inscription']
                );

                // Appel à la méthode create du contrôleur
                if($inscriptionController->create($data)) {
                    echo "Inscription créée avec succès!";
                } else {
                    echo "Erreur lors de la création de l'inscription.";
                }
            } else {
                echo "Tous les champs sont requis.";
            }
            break;

        case 'update_inscription':
            // Vérifie les données postées
            if(isset($_POST['id']) && isset($_POST['utilisateur_id']) && isset($_POST['jpo_id']) && isset($_POST['date_inscription'])) {
                // Préparation des données
                $data = array(
                    'id' => $_POST['id'],
                    'utilisateur_id' => $_POST['utilisateur_id'],
                    'jpo_id' => $_POST['jpo_id'],
                    'date_inscription' => $_POST['date_inscription']
                );

                // Appel à la méthode update du contrôleur
                if($inscriptionController->update($data)) {
                    echo "Inscription mise à jour avec succès!";
                } else {
                    echo "Erreur lors de la mise à jour de l'inscription.";
                }
            } else {
                echo "Tous les champs sont requis.";
            }
            break;

        case 'delete_inscription':
            // Vérifie l'id envoyé en POST
            if(isset($_POST['id'])) {
                // Appel à la méthode delete du contrôleur
                if($inscriptionController->delete($_POST['id'])) {
                    echo "Inscription supprimée avec succès!";
                } else {
                    echo "Erreur lors de la suppression de l'inscription.";
                }
            } else {
                echo "ID de l'inscription requis.";
            }
            break;
    }
}

// Routes pour Commentaire
if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch($action) {
        case 'create_commentaire':
            // Vérifie les données postées
            if(isset($_POST['utilisateur_id']) && isset($_POST['jpo_id']) && isset($_POST['contenu']) && isset($_POST['date_commentaire'])) {
                // Préparation des données
                $data = array(
                    'utilisateur_id' => $_POST['utilisateur_id'],
                    'jpo_id' => $_POST['jpo_id'],
                    'contenu' => $_POST['contenu'],
                    'date_commentaire' => $_POST['date_commentaire']
                );

                // Appel à la méthode create du contrôleur
                if($commentaireController->create($data)) {
                    echo "Commentaire créé avec succès!";
                } else {
                    echo "Erreur lors de la création du commentaire.";
                }
            } else {
                echo "Tous les champs sont requis.";
            }
            break;

        case 'update_commentaire':
            // Vérifie les données postées
            if(isset($_POST['id']) && isset($_POST['utilisateur_id']) && isset($_POST['jpo_id']) && isset($_POST['contenu']) && isset($_POST['date_commentaire'])) {
                // Préparation des données
                $data = array(
                    'id' => $_POST['id'],
                    'utilisateur_id' => $_POST['utilisateur_id'],
                    'jpo_id' => $_POST['jpo_id'],
                    'contenu' => $_POST['contenu'],
                    'date_commentaire' => $_POST['date_commentaire']
                );

                // Appel à la méthode update du contrôleur
                if($commentaireController->update($data)) {
                    echo "Commentaire mis à jour avec succès!";
                } else {
                    echo "Erreur lors de la mise à jour du commentaire.";
                }
            } else {
                echo "Tous les champs sont requis.";
            }
            break;

        case 'delete_commentaire':
            // Vérifie l'id envoyé en POST
            if(isset($_POST['id'])) {
                // Appel à la méthode delete du contrôleur
                if($commentaireController->delete($_POST['id'])) {
                    echo "Commentaire supprimé avec succès!";
                } else {
                    echo "Erreur lors de la suppression du commentaire.";
                }
            } else {
                echo "ID du commentaire requis.";
            }
            break;
    }
}

// Routes pour Notification
if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch($action) {
        case 'create_notification':
            // Vérifie les données postées
            if(isset($_POST['utilisateur_id']) && isset($_POST['jpo_id']) && isset($_POST['contenu']) && isset($_POST['date_notification'])) {
                // Préparation des données
                $data = array(
                    'utilisateur_id' => $_POST['utilisateur_id'],
                    'jpo_id' => $_POST['jpo_id'],
                    'contenu' => $_POST['contenu'],
                    'date_notification' => $_POST['date_notification']
                );

                // Appel à la méthode create du contrôleur
                if($notificationController->create($data)) {
                    echo "Notification créée avec succès!";
                } else {
                    echo "Erreur lors de la création de la notification.";
                }
            } else {
                echo "Tous les champs sont requis.";
            }
            break;

        case 'update_notification':
            // Vérifie les données postées
            if(isset($_POST['id']) && isset($_POST['utilisateur_id']) && isset($_POST['jpo_id']) && isset($_POST['contenu']) && isset($_POST['date_notification'])) {
                // Préparation des données
                $data = array(
                    'id' => $_POST['id'],
                    'utilisateur_id' => $_POST['utilisateur_id'],
                    'jpo_id' => $_POST['jpo_id'],
                    'contenu' => $_POST['contenu'],
                    'date_notification' => $_POST['date_notification']
                );

                // Appel à la méthode update du contrôleur
                if($notificationController->update($data)) {
                    echo "Notification mise à jour avec succès!";
                } else {
                    echo "Erreur lors de la mise à jour de la notification.";
                }
            } else {
                echo "Tous les champs sont requis.";
            }
            break;

        case 'delete_notification':
            // Vérifie l'id envoyé en POST
            if(isset($_POST['id'])) {
                // Appel à la méthode delete du contrôleur
                if($notificationController->delete($_POST['id'])) {
                    echo "Notification supprimée avec succès!";
                } else {
                    echo "Erreur lors de la suppression de la notification.";
                }
            } else {
                echo "ID de la notification requis.";
            }
            break;
    }
}
