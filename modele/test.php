<?php
include_once "classes.php";
include_once "DAO.php";

$prod = new Produit(1, "chaton", 100, "chaton-01.jpg");
var_dump($prod->getProduit());

$util=new Utilisateur("a", "b", "c", "d");
var_dump($util);

$dao=new DAO();
$dao->createUtilisateur($util);
$requtil=$dao->getUtilisateur("c");
var_dump($requtil);

$dao->createProduit($prod);
$reqprod=$dao->getProduits();
var_dump($reqprod);

 ?>
