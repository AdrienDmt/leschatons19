<?php
/**
 * Created by IntelliJ IDEA.
 * User: julien
 * Date: 22/05/17
 * Time: 11:03
 */
    if (!empty($_POST)) {
        foreach ($_POST as $key => $value){
            if ($key == "mail"){
                $login = $value;
            }elseif ($key == "psw"){
                $psw = $value;
            }
        }
        echo "test";
        echo '$login $psw';
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