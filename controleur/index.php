<?php
/**
 * Created by IntelliJ IDEA.
 * User: julien
 * Date: 22/05/17
 * Time: 15:41
 */

/*
    Point d'entrée du contrôleur
    Vérifie la présence des paramètres GET et POST pour afficher la bonne page de la vue
*/


if(!empty($_GET['page'])) { // si le paramètre GET 'page' est non vide, on affiche la page demandée, sinon on renvoie à l'accueil

    switch ($_GET['page']) {
        // selon la valeur de la page demandée, on va inclure certaines pages

        case 'accueil':
            include '../vue/accueil.php';
            break;

        case 'compte':
            // on vérifie que l'utilisateur est connecté
            if (isset($_COOKIE['connecte'])){
                include '../vue/compte.php';
            }else{
                include '../vue/connect.php';
            }
            break;

        case 'inscription':
            include '../vue/inscription.php';
            break;

        case 'panier':
            // si l'utilisateur n'est pas connecté, on l'envoie vers la page de connection
            if(!isset($_COOKIE['connecte'])) {
                include '../vue/connect.php';
            }
            else {
                include '../vue/commande.php';
            }
            break;

        case 'achat':
            // la page arrive
            break;

        case 'liste':
            if(empty($_GET['categorie'])) {
                include 'index.php?page=error';
            } else {
                $_GET['cate'] = $_GET['categorie'];
                include '../vue/listeProduit.php';
            }
            break;

        case 'deconnexion':
            setcookie('connecte','',time()-1);
            unset($_COOKIE["connecte"]);
            include '../vue/accueil.php';
            break;

        case 'error':
            // renvoyer vers une page d'erreur
            // à faire
            break;
        default:
            include '../vue/accueil.php';
            break;
    }

}

else {
    include '../vue/accueil.php';
}

    // if(!empty($_GET['page'])){
    //     if ($_GET['page']=='accueil'){
    //         include '../vue/accueil.php';
    //
    //     }elseif ($_GET['page']=='compte'){
    //         if (isset($_COOKIE['connecte'])){
    //             include '../vue/compte.php';
    //         }else{
    //             include '../vue/connect.php';
    //         }
    //
    //     }elseif ($_GET['page']=='inscription'){
    //         include '../vue/inscription.php';
    //
    //     }elseif ($_GET['page']=='panier'){
    //         if(isset($_COOKIE['connecte']) && $_COOKIE['connecte']!="unregistred")
    //             include '../vue/connect.php';
    //         else
    //             include '../vue/commande.php';
    //
    //     }elseif ($_GET['page']=='achat'){
    //
    //
    //     }elseif ($_GET['page']=='liste') {
    //         if(empty($_GET['categorie']))
    //             include 'index.php?page=error';
    //         else
    //             $_GET['cate'] = $_GET['categorie'];
    //             include '../vue/listeProduit.php';
    //
    //     }elseif ($_GET['page']=='deconnexion') {
    //         unset($_COOKIE['connecte']);
    //         include '../vue/accueil.php';
    //
    //     }elseif ($_GET['page']=='error'){
    //
    //     }else{
    //         include '../vue/accueil.php';
    //     }
    // }

?>
