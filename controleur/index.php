<?php
/**
 * Created by IntelliJ IDEA.
 * User: julien
 * Date: 22/05/17
 * Time: 15:41
 */

    if(!empty($_GET['page'])){
        if ($_GET['page']=='accueil'){
            include '../vue/accueil.php';
        }elseif ($_GET['page']=='compte'){
            if (isset($_COOKIE['connecte'])){
                include '../vue/compte.php';
            }else{
                include '../vue/connect.php';
            }
        }elseif ($_GET['page']=='inscription'){
            include '../vue/inscription.php';
        }elseif ($_GET['page']=='panier'){
            if(isset($_COOKIE['connecte']) && $_COOKIE['connecte']!="unregistred")
                include '../vue/connect.php';
            else
                include '../vue/commande.php';
        }elseif ($_GET['page']=='achat'){

        }elseif ($_GET['page']=='liste') {
            //if(empty($_GET['categorie']))
            //    include 'index.php?page=error';
            //else
                include '../vue/listeProduit.php';
        }elseif ($_GET['page']=='deconnexion') {
            unset($_COOKIE['connecte']);
            include '../vue/accueil.php';
        }elseif ($_GET['page']=='error'){

        }else{
            include '../vue/accueil.php';
        }
    }

?>