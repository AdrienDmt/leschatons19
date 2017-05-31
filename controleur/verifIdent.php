<?php
/**
 * Created by IntelliJ IDEA.
 * User: julien
 * Date: 22/05/17
 * Time: 11:03
 */

 /*
    Scrit de vérification de l'identité de l'utilisateur lors de sa connexion

    Auteurs : JV, RC
 */

// Le cas de l'administrateur est traité?? RC



    if (!empty($_POST['login']) && !empty($_POST['psw'])) { // informations transmises par la page de connexion

        global $mail;
        $mail = htmlentities($_POST['login']);
        global $psw;
        $psw = htmlentities($_POST['psw']);
        // Pourquoi utiliser des variables globales?? RC

        include '../modele/DAO.php';
        $dao=new DAO();
        $user = $dao->getUtilisateur($mail, $psw);
        if ($user!==FALSE) {
            echo "test VerifIdent $user!==FALSE";
            if (isset($_COOKIE["connecte"])){
                // Pourquoi ce test? RC

                setcookie("connecte", $mail);
                // setcookie("nom", $user->nom);
                // setcookie("prenom", $user->prenom);
            }else{
                setcookie("connecte", $mail, time()+24*60*60);
                // setcookie("nom", $user->nom);
                // setcookie("prenom", $user->prenom);
            }
            //echo $_COOKIE["connecte"];
        }else{
            // aucun utilisateur n'est associé au mail/mot de passe passé

            // NE FONCTIONNE PAS
            // echo"<script language=\"javascript\">";
            // echo"alert('Vous n'êtes pas inscrit ou votre mot de passe n'est pas bon!')";
            // echo"</script>";
            unset($_COOKIE["connecte"]);
            unset($_COOKIE["nom"]);
            unset($_COOKIE["prenom"]);
            $_GET['page'] = "inscription";
            include '../controleur/index.php';
            exit;
        }
        $_GET['page'] = "accueil";
        include '../controleur/index.php';
    }else{
        // la connexion s'est mal passée, on retourne à l'accueil, sans indiquer qu'il y a eu une erreur
        unset($_COOKIE["connecte"]);
        unset($_COOKIE["nom"]);
        unset($_COOKIE["prenom"]);

        // NE FONCTIONNE PAS
        // echo"<script language=\"javascript\">";
        // echo"alert('Une erreur est survenue lors de votre inscription!')";
        // echo"</script>";
        $_GET['page'] = "connexion";
        include '../controleur/index.php';
    }
?>
