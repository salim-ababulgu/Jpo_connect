<?php
require_once '../routes/web.php';

if(isset($_GET['id'])) {
    $action = 'delete_inscription';
    $id = $_GET['id'];

    // Vérifie si l'id est valide
    if(!empty($id)) {
        // Appel à la méthode delete de InscriptionController
        if($inscriptionController->delete($id)) {
            echo "Inscription supprimée avec succès!";
        } else {
            echo "Erreur lors de la suppression de l'inscription.";
        }
    } else {
        echo "ID de l'inscription requis.";
    }
} else {
    echo "ID de l'inscription requis.";
}
?>
