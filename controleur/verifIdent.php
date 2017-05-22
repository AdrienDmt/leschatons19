<?php
/**
 * Created by IntelliJ IDEA.
 * User: julien
 * Date: 22/05/17
 * Time: 11:03
 */
    var_dump($_COOKIE);
    if (!empty($_POST['login'] || !empty($_POST['psw']))) {
        global $login;
        $login = htmlentities($_POST['login']);
        global $psw;
        $psw = htmlentities($_POST['psw']);
        echo $login.' '.$psw;
        /*include 'DAO.php';
        if (touverUser($mail, $psw)) {
            $user = recupererUser($mail, $psw);
            setcookie("connecte", $user.login,time()+(24*60*60));
        }else{
            include '../vue/inscription.html';
            exit;
        }*/
        include '../vue/inscription.html';
    }else{
        include '../vue/connect.html';
    }
?>