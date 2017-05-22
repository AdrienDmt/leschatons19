<?php
/**
 * Created by IntelliJ IDEA.
 * User: julien
 * Date: 22/05/17
 * Time: 11:03
 */

    if (!empty($_POST)) {
                global $login;
                $login = htmlentities($_POST['psw']);
                global $psw;
                $psw = htmlentities($_POST['login']);
        }
        echo "test";
        echo $login.' '.$psw;
            include 'DAO.php';
            if (touverUser($mail, $psw)) {
                $user = recupererUser($mail, $psw);
                setcookie("connecte", $user.login,time()+(60*60));
            }else{
                header('Location:../vue/inscription.html');
                exit;
            }
    }
?>