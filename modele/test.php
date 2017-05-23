<?php

include_once "classes.php";
include_once "DAO.php";

$dao=new DAO();



$prod = new Produit('1lqsdflhj', "chaton", 100, "chaton-01.jpg", '');
var_dump($prod->getProduit());
$prod = new Produit('1lqsdflhj', "chaton", 100, "chaton-01.jpg", 'blz');
var_dump($prod->getProduit());

$util=new Utilisateur("casta", "raf", "r.c@free.fr", "mdptoutpourri");
var_dump($util);

$util=new Utilisateur("casta", "raf", "r.c@free.fr", "mdptoutpourri");
var_dump($util);

// Attention : un utilisateur peut être recréé (écrasé) si aucun test n'est fait dans la création d'utilisateur!

$dao->createUtilisateur($util);
$requtil=$dao->getUtilisateur($util->getMail());
var_dump($requtil[0]);

$dao->createUtilisateur($util);
$requtil=$dao->getUtilisateur($util->getMail());
var_dump($requtil[0]);

echo "--- TEST CREATE PRODUIT ---\n";

echo "\nCreation : ";
$dao->createProduit($prod);
echo "\nListe : ";
$reqprod=$dao->getProduits();
var_dump($reqprod);


 ?>
