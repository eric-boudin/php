<?php
    $erreurPseudo = false;
    $erreurMDP = false;
    $erreurMail = false;
    $erreurExistant = false;
    if(isset($_POST['connexion'])){
        if(!($_POST['pseudo'] == null)){
            if(!($_POST['password'] == null)){
                if(!($_POST['mail'] == null)){
                    $bdd=new PDO('mysql:host=127.0.0.1:3306;dbname=server','root','');
                    $erreurInscription = false;
                    $pseudo = htmlspecialchars($_POST['pseudo']);
                    $password = sha1($_POST['password']);

                    $sql = $bdd->prepare('SELECT * from members WHERE pseudo = ? OR mail = ?');
                    $sql->execute(array($pseudo,$password));
                    $result = $sql->fetch();
                    $userexist = $sql->rowCount();
                    if($userexist == 0){

                    }
                    else{
                        $erreurExistant = true;
                    }
                }
                else{
                    $erreurMail = true;
                }
            }
            else{
                $erreurMDP = true;
            }
        }
        else{
            $erreurPseudo = true;
        }
    }
?>
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
            <form method="post" action="inscription.php">
                <p>
                    <label>Votre pseudo</label> : <input type="text" name="pseudo"/><?php if($erreurPseudo): ?> Veuillez renseigner un pseudo. <?php endif;?>
                </p>
                <p>
                    <label>Votre mot de passse</label> : <input type="password" name="password"/><?php if($erreurMDP): ?> Veuillez renseigner un mot de passe. <?php endif;?>
                </p>
                <p>
                    <label>Votre adresse mail</label> : <input type="email" name="mail"/><?php if($erreurMail): ?> Veuillez renseigner une adresse mail. <?php endif;?>
                </p>
                <p>
                    <input type="submit" name="connexion" value="Envoyer" />
                </p>
            </form>
            <?php if($erreurExistant):?>
                <p>Un utilisateur avec ce psuedo ou cette adresse mail existe déjà.</p>
            <?php endif;?>
        </div>
    <?php
        include ("models/footer.php");
    ?>
</body>
</html>