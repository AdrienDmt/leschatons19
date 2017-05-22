<?php
include "produit.php";
include "utilisateur.php";

$prod = new Produit(1, "chaton", 100, "chaton-01.jpg");
var_dump($prod->getProduit());

$util=new Utilisateur("a", "b", "c", "d");
var_dump($util);

$dao=new UtilisateurDAO();
$dao->create($util);
$util2=$dao->read('c');
var_dump($util2);



 ?>
