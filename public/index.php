<?php
require_once '../routes/web.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>JPO Connect</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>
    <h1>Bienvenue à JPO Connect</h1>
    
    <h2>Créer Utilisateur</h2>
    <form method="POST">
        <input type="hidden" name="action" value="create_user">
        <label>Nom: <input type="text" name="nom"></label><br>
        <label>Prénom: <input type="text" name="prenom"></label><br>
        <label>Email: <input type="email" name="email"></label><br>
        <label>Mot de passe: <input type="password" name="mot_de_passe"></label><br>
        <label>Rôle ID: <input type="number" name="role_id"></label><br>
        <button type="submit">Créer Utilisateur</button>
    </form>

    <h2>Créer JPO</h2>
    <form method="POST">
        <input type="hidden" name="action" value="create_jpo">
        <label>Nom: <input type="text" name="nom"></label><br>
        <label>Date: <input type="date" name="date"></label><br>
        <label>Lieu: <input type="text" name="lieu"></label><br>
        <label>Capacité: <input type="number" name="capacite"></label><br>
        <button type="submit">Créer JPO</button>
    </form>

    <h2>Créer Inscription</h2>
    <form method="POST">
        <input type="hidden" name="action" value="create_inscription">
        <label>Utilisateur ID: <input type="number" name="utilisateur_id"></label><br>
        <label>JPO ID: <input type="number" name="jpo_id"></label><br>
        <label>Date Inscription: <input type="date" name="date_inscription"></label><br>
        <button type="submit">Créer Inscription</button>
    </form>

    <h2>Créer Commentaire</h2>
    <form method="POST">
        <input type="hidden" name="action" value="create_commentaire">
        <label>Utilisateur ID: <input type="number" name="utilisateur_id"></label><br>
        <label>JPO ID: <input type="number" name="jpo_id"></label><br>
        <label>Contenu: <textarea name="contenu"></textarea></label><br>
        <label>Date Commentaire: <input type="date" name="date_commentaire"></label><br>
        <button type="submit">Créer Commentaire</button>
    </form>

    <h2>Créer Notification</h2>
    <form method="POST">
        <input type="hidden" name="action" value="create_notification">
        <label>Utilisateur ID: <input type="number" name="utilisateur_id"></label><br>
        <label>JPO ID: <input type="number" name="jpo_id"></label><br>
        <label>Contenu: <textarea name="contenu"></textarea></label><br>
        <label>Date Notification: <input type="date" name="date_notification"></label><br>
        <button type="submit">Créer Notification</button>
    </form>

    <script src="js/main.js"></script>
</body>
</html>
