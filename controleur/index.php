<?php
/**
 * Created by IntelliJ IDEA.
 * User: julien
 * Date: 22/05/17
 * Time: 15:41
 */

    if(!empty($_GET['page'])){
        if ($_GET['page']=='acceuil' || empty($_GET['page'])){
            include '../vue/accueil.html';
        }elseif ($_GET['page']=='connexion'){
            include '../vue/connect.html';
        }elseif ($_GET['page']=='inscription'){
            include '../vue/inscription.html';
        }elseif ($_GET['page']=='panier'){

        }elseif ($_GET['page']=='achat'){

        }elseif ($_GET['page']=='liste') {

        }
    }
?>