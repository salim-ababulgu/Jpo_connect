<?php
require_once '../routes/web.php';

if(isset($_GET['id'])) {
    $action = 'delete_commentaire';
    $id = $_GET['id'];

    // Vérifie si l'id est valide
    if(!empty($id)) {
        // Appel à la méthode delete de CommentaireController
        if($commentaireController->delete($id)) {
            echo "Commentaire supprimé avec succès!";
        } else {
            echo "Erreur lors de la suppression du commentaire.";
        }
    } else {
        echo "ID du commentaire requis.";
    }
} else {
    echo "ID du commentaire requis.";
}
?>
