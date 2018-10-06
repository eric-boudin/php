<?php session_start();?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/menu.css">
</head>
<body>
    <div id="menu">
        <ul>
            <li><a href="index.php">Index</a></li>
            <?php if(isset($_SESSION['id'])):?>
                <li><a href="profil.php">Profil</a></li>
            <?php else: ?>
                <li><a href="inscription.php">S'inscrire</a></li>
                <li><a href="login.php">Connexion</a></li>
            <?php endif; ?>
        </ul>
    </div>
</body>
</html>