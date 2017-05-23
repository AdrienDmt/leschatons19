<?php

/*

Fichier de test pour la DAO et les classes.

Auteurs : AG, RC.

*/

include_once "classes.php";
include_once "DAO.php";

echo "\n === TESTS CLASSES ET DAO === \n\n";

// -------------------
// Test des classes
// -------------------

// création, lecture, mise à jour et suppression d'un produit
echo "\n --- Classe Produit (création et lecture)---\n";
$prod = new Produit('1lqsdflhj', "chaton", 100, "chaton-01.jpg");
var_dump($prod->getProduit());
var_dump($prod->getReference());
unset($prod);


// création, lecture, mise à jour et suppression d'un utilisateur
echo "\n --- Classe Utilisateur (création, lecture, mise à jour et suppression)---\n";
$util=new Utilisateur("casta", "raf", "r.c@free.fr", "mdptoutpourri");
var_dump($util);
var_dump($util->getMail());
var_dump($util->setPrenom("Pierre"));
var_dump($util);
unset($util);




// ----------------------------
// Test des Méthodes de la DAO
// ----------------------------

// création de la DAO
echo "\n --- Création DAO ---\n";
$dao=new DAO();

// Attention : un utilisateur peut être recréé (écrasé) si aucun test n'est fait dans la création d'utilisateur!
echo "\n --- Utilisateur ---\n";
$dao->createUtilisateur(new Utilisateur("viala", "julien", "vialaj@gmail.com", "plouf"));
var_dump($dao->getAllUtilisateurs());
var_dump($dao->getUtilisateur("vialaj@gmail.com"));
$dao->updateUtilisateur("hoareau", "brenda", "chatons", "idem");
var_dump($dao->getAllUtilisateurs());
$dao->updateUtilisateur("hoareau", "brenda", "vialaj@gmail.com", "idem");
var_dump($dao->getAllUtilisateurs());
$dao->deleteUtilisateur("vialaj@gmail.com");
var_dump($dao->getAllUtilisateurs());



echo "\n --- Produit ---\n";
$dao->createProduit(new Produit('blabla', "chaton mignon", 110, 'chatons.jpg'));
var_dump($dao->getProduits());


echo "\n === FIN TESTS === \n\n";

 ?>
