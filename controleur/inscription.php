<?php
/**
 * Created by IntelliJ IDEA.
 * User: julien
 * Date: 22/05/17
 * Time: 18:54
 */
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail'])
        && !empty($_POST['psw']) && !empty($_POST['pswVerif'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $psw = $_POST['psw'];
        $pswVerif = $_POST['pswVerif'];
        if(strcmp($psw,$pswVerif)!=0){
            echo"<script language=\"javascript\">";
            echo"alert('Les mots de passes ne sont pas identiques');";
            echo"</script>";
            $_GET['page'] = 'inscription';
            include '../controleur/index.php';
            exit;
        }
        include '../modele/DAO.php';
        $dao=new DAO();
        $util=new Utilisateur($nom, $prenom,$mail, $psw);
        try{
            $dao->createUtilisateur($util);
        }catch(Exception $e){
            echo "DEBUG test  inscription.php: ".$e->getMessage();
        }

        echo"<script language=\"javascript\">";
        echo"alert('Inscription complete ! Vous pouvez vous connecter ! ')";
        echo"</script>";
        include '../controleur/index.php';
    }else{
        echo"<script language=\"javascript\">";
        echo"alert('Remplissez tout les champs svp')";
        echo"</script>";
        $_GET['page'] = 'inscription';
        include '../controleur/index.php';
    }
?>