<?php
require_once '../routes/web.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>JPO Connect - Mettre à jour Notification</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>
    <h1>Mettre à jour Notification</h1>
    
    <form method="POST">
        <input type="hidden" name="action" value="update_notification">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <label>ID Utilisateur: <input type="number" name="utilisateur_id"></label><br>
        <label>ID JPO: <input type="number" name="jpo_id"></label><br>
        <label>Contenu: <textarea name="contenu"></textarea></label><br>
        <label>Date Notification: <input type="date" name="date_notification"></label><br>
        <button type="submit">Mettre à jour Notification</button>
    </form>

    <a href="javascript:history.back()">Retour</a>

    <script src="js/main.js"></script>
</body>
</html>
