<?php
require_once '../routes/web.php';

if(isset($_GET['id'])) {
    $action = 'delete_notification';
    $id = $_GET['id'];

    // Vérifie si l'id est valide
    if(!empty($id)) {
        // Appel à la méthode delete de NotificationController
        if($notificationController->delete($id)) {
            echo "Notification supprimée avec succès!";
        } else {
            echo "Erreur lors de la suppression de la notification.";
        }
    } else {
        echo "ID de la notification requis.";
    }
} else {
    echo "ID de la notification requis.";
}
?>
