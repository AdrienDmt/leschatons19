<?php
/**
 * Created by IntelliJ IDEA.
 * User: julien
 * Date: 22/05/17
 * Time: 11:03
 */

    if (!empty($_POST['login'] && !empty($_POST['psw']))) {
        global $mail;
        $login = htmlentities($_POST['login']);
        global $psw;
        $psw = htmlentities($_POST['psw']);
        echo $mail.' '.$psw;
        include 'DAO.php';
        if (touverUser($mail, $psw)) {
            $user = recupererUser($mail, $psw);
            setcookie("connecte", $user.$mail,time()+(24*60*60));
        }else{
            $_GET['page'] = "inscription";
            include '../controleur/index.php';
            exit;
        }
        $_GET['page'] = "inscription";
        include '../controleur/index.php';
    }else{
        $_GET['page'] = "connexion";
        include '../controleur/index.php';
    }
?>