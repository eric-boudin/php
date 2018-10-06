<?php
    session_start();
    $bdd=new PDO('mysql:host=127.0.0.1:3306;dbname=server','root','');
    $erreurLogin = false;
    if(isset($_POST['connexion'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['password']);
        if(!empty($pseudo) AND !empty($mdp)){
            $sql=$bdd->prepare('SELECT * FROM members WHERE pseudo = ? AND password = ?');
            $sql->execute(array($pseudo,$mdp));
            $resultat = $sql->fetch();
            $userexist = $sql->rowCount();
            if($userexist == 1){
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['pseudo'] = $pseudo;
                header('Location: profil.php');
            }
            else{
                $erreurLogin = true;
            }
        }
    }

