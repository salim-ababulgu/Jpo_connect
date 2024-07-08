<?php
require_once '../routes/web.php';

if(isset($_GET['id'])) {
    $action = 'delete_user';
    $id = $_GET['id'];

    // Vérifie si l'id est valide
    if(!empty($id)) {
        // Appel à la méthode delete de UtilisateurController
        if($utilisateurController->delete($id)) {
            echo "Utilisateur supprimé avec succès!";
        } else {
            echo "Erreur lors de la suppression de l'utilisateur.";
        }
    } else {
        echo "ID de l'utilisateur requis.";
    }
} else {
    echo "ID de l'utilisateur requis.";
}
?>
