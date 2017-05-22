<?php
/**
 * Created by IntelliJ IDEA.
 * User: julien
 * Date: 22/05/17
 * Time: 11:03
 */
    if (!empty($_POST)) {
        foreach ($_POST as $key => $value){
            if ($key == "login"){
                $login = $value;
            }elseif ($key == "psw"){
                $psw = $value;
            }
        }

    }
?>