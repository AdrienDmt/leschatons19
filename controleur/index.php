<?php
/**
 * Created by IntelliJ IDEA.
 * User: julien
 * Date: 22/05/17
 * Time: 15:41
 */

    if(!empty($_GET['page'])){
        if ($_GET['page']=='accueil' || empty($_GET['page'])){
            include '../vue/accueil.html';
        }elseif ($_GET['page']=='connexion'){
            include '../vue/connect.html';
        }elseif ($_GET['page']=='inscription'){
            include '../vue/inscription.html';
        }elseif ($_GET['page']=='panier'){
            if($_COOKIE['connecte']=="unregistred")
                include '../vue/connect.html';
        }elseif ($_GET['page']=='achat'){

        }elseif ($_GET['page']=='liste') {
            if(empty($_GET['categorie']))
                include 'index.php?page=error';

        }elseif ($_GET['page']=='error'){

        }else{
            include '../vue/accueil.html';
        }
    }
?>