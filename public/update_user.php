<?php
require_once '../routes/web.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>JPO Connect - Mettre à jour Utilisateur</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>
    <h1>Mettre à jour Utilisateur</h1>
    
    <form method="POST">
        <input type="hidden" name="action" value="update_user">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <label>Nom: <input type="text" name="nom"></label><br>
        <label>Prénom: <input type="text" name="prenom"></label><br>
        <label>Email: <input type="email" name="email"></label><br>
        <label>Mot de passe: <input type="password" name="mot_de_passe"></label><br>
        <label>Rôle ID: <input type="number" name="role_id"></label><br>
        <button type="submit">Mettre à jour Utilisateur</button>
    </form>

    <a href="javascript:history.back()">Retour</a>

    <script src="js/main.js"></script>
</body>
</html>
