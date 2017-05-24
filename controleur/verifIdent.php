<?php
/**
 * Created by IntelliJ IDEA.
 * User: julien
 * Date: 22/05/17
 * Time: 11:03
 */

    if (!empty($_POST['login']) && !empty($_POST['psw'])) {
        global $mail;
        $mail = htmlentities($_POST['login']);
        global $psw;
        $psw = htmlentities($_POST['psw']);
        //echo $login.' '.$psw;
        include '../modele/DAO.php';
        $dao=new DAO();
        if ($dao->getUtilisateur($mail, $psw)!==FALSE) {
            $user = $dao->getUtilisateur($mail);
            setcookie("connecte", $user.$mail,time()+(24*60*60));
        }else{
            echo"<script language=\"javascript\">";
            echo"alert('Vous n'êtes pas inscrit ! Remediez à cela ! ')";
            echo"</script>";
            $_GET['page'] = "inscription";
            include '../controleur/index.php';
            exit;
        }
        $_GET['page'] = "accueil";
        include '../controleur/index.php';
    }else{
        $_GET['page'] = "connexion";
        include '../controleur/index.php';
    }
?>