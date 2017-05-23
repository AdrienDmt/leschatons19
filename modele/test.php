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
//echo "\n --- Classe Produit ---\n";
$prod = new Produit('1lqsdflhj', "chaton", 100, "chaton-01.jpg");
assert($prod->getProduit()==$prod);
assert($prod->getReference()=='1lqsdflhj');
unset($prod);
echo "Produit OK\n";


// création, lecture, mise à jour et suppression d'un utilisateur
//echo "\n --- Classe Utilisateur ---\n";
$util=new Utilisateur("casta", "raf", "r.c@free.fr", "mdptoutpourri");
assert($util->getMail()=="r.c@free.fr");
$util->setPrenom("Pierre");
assert($util->getPrenom()=="Pierre");
unset($util);
echo "Utilisateur OK\n";


// création, lecture, mise à jour et suppression d'une categorie
//echo "\n --- Classe Catégorie ---\n";
$cat1 = new Categorie("Mignons");
$cat2 = new Categorie('Jolis');
$cat3 = new Categorie();
assert($cat1->nom=="Mignons");
$cat2->nom = "Miaou";
assert($cat2->nom=="Miaou");
unset($cat1, $cat2, $cat3);
echo "Categorie OK\n";


// création, lecture, mise à jour et suppression d'une ligne de panier



// création, lecture, mise à jour et suppression d'une association appartient à


















// ----------------------------
// Test des Méthodes de la DAO
// ----------------------------

// création de la DAO
echo "\n --- Création DAO ---\n";
$dao=new DAO();
echo "DAO OK\n";

// Attention : un utilisateur peut être recréé (écrasé) si aucun test n'est fait dans la création d'utilisateur!
echo "\n --- Utilisateur ---\n";
$dao->createUtilisateur(new Utilisateur("viala", "julien", "vialaj@gmail.com", "plouf"));
//var_dump($dao->getAllUtilisateurs());
/*
var_dump($dao->getUtilisateur("vialaj@gmail.com"));
$dao->updateUtilisateur("hoareau", "brenda", "chatons", "idem");
var_dump($dao->getAllUtilisateurs());
$dao->updateUtilisateur("hoareau", "brenda", "vialaj@gmail.com", "idem");
var_dump($dao->getAllUtilisateurs());
$dao->deleteUtilisateur("vialaj@gmail.com");
var_dump($dao->getAllUtilisateurs());
*/


echo "\n --- Produit ---\n";
$dao->createProduit(new Produit('blabla', "chaton mignon", 110, 'chatons.jpg'));
//var_dump($dao->getProduits());


echo "\n === FIN TESTS === \n\n";

 ?>
