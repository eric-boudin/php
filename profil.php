<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Profil de <?php echo $_SESSION['pseudo']?></title>
</head>
<body>
    <?php
    include("models/header.php");
    include("models/menu.php");
    ?>
        <div id="index">
            <p>OUIIIIIIIIIIIIIIIIIIIIIIIIIIIII</p>
            <a href="deconnexion.php">Deconnexion</a>
        </div>
    <?php
    include ("models/footer.php");
    ?>
</body>
</html>