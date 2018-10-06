<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php
    include("models/header.php");
    include("models/menu.php");
    ?>
    <div id="index">
            <form method="post" action="traitement.php">
                <p>
                    <label>Votre pseudo</label> : <input type="text" name="pseudo"/>
                </p>
                <p>
                    <label>Votre mot de passe</label> : <input type="password" name="password"/>
                </p>
                <input type="submit" name="connexion" value="Connexion"/>
            </form>
            <p></p>
        <?php if(isset($erreurLogin)):?>
            <p>Erreur dans le couple login/mot de passe.</p>
        <?php endif ?>
    </div>
    <?php
    include ("models/footer.php");
    ?>
</body>