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
$prod = new Produit("chaton", "animal poilu", 100, "reference bidon", "chaton-01.jpg");
try {
    $prod = new Produit("chaton", "animal poilu", 100, "reference bidon", "chaton-01.jpg", "argument en trop");
}
catch (Exception $e) {
    echo "Erreur : ".$e->getMessage();
}

$prod2 = new Produit();
assert($prod->getProduit()==$prod);
assert($prod->getRef()=="reference bidon");
unset($prod, $prod2);
echo "Produit OK\n";

// création, lecture, mise à jour et suppression d'un utilisateur
$util=new Utilisateur("casta", "raf", "r.c@free.fr", "mdptoutpourri");
$util2 = new Utilisateur();
assert($util->getMail()=="r.c@free.fr");
$util->setPrenom("Pierre");
assert($util->getPrenom()=="Pierre");
unset($util, $util2);
echo "Utilisateur OK\n";

// création, lecture, mise à jour et suppression d'une categorie
$cat1 = new Categorie("Mignons");
$cat2 = new Categorie('Jolis');
$cat3 = new Categorie();
assert($cat1->nom=="Mignons");
$cat2->nom = "Miaou";
assert($cat2->nom=="Miaou");
unset($cat1, $cat2, $cat3);
echo "Categorie OK\n";

// création, lecture, mise à jour et suppression d'une ligne de panier
$ligne1 = new LignePanier("r.c@frfdsddf", 'redgsg', 'sdfluhsd', 2, TRUE);
$ligne2 = new LignePanier();
$ligne3 = new LignePanier("r.c@free.fr", "bla", "aujourd'hui");
assert($ligne1->mail == "r.c@frfdsddf");
assert($ligne3->ref=="bla");
assert($ligne2->date=='');
$ligne2->mail="r.c@free.fr";
$ligne2->valide=TRUE;
unset($ligne1, $ligne2, $ligne3);
echo "Ligne de Panier OK\n";

// création, lecture, mise à jour et suppression d'une association appartient à
$app1 = new AppartientA();
$app2 = new AppartientA("plouf", "plic");
$app3 = new AppartientA("cocou");
assert($app2->ref == "plic");
assert($app3->nom == "cocou");
$app1->nom = 'nome';
$app3->ref = "reference";
unset($app1, $app2, $app3);
echo "AppartientA OK\n";


// ----------------------------
// Test des Méthodes de la DAO
// ----------------------------

// création de la DAO
echo "\n --- Création DAO ---\n";
$dao=new DAO();
echo "DAO OK\n";

// utilisateur DAO
echo "\n --- Utilisateur ---\n";
$user = new Utilisateur("viala", "julien", "vialaj@gmail.com", "plouf");
try {
    $dao->createUtilisateur($user);
} catch (Exception $e) {
    echo "DEBUG : ".$e->getMessage();
}
assert($dao->getAllUtilisateurs()[0]==$user);
try {
    $dao->createUtilisateur($user);
} catch (Exception $e) {
    echo "OK : ".$e->getMessage();
}
$utilisateurs = $dao->getAllUtilisateurs();
try {
    $dao->updateUtilisateur("hoareau", "brenda", "chatons", "idem");
} catch (Exception $e) {
    echo "OK : ".$e->getMessage();
}
try {
    $dao->updateUtilisateur("hoareau", "brenda", "vialaj@gmail.com", "idem");
} catch (Exception $e) {
    echo "DEBUG : ".$e->getMessage();
}
assert($dao->getAllUtilisateurs()[0]->prenom == "brenda");
foreach ($utilisateurs as $key => $util) {
    $dao->deleteUtilisateur($util->mail);
}
assert($dao->getAllUtilisateurs()== []);
echo "Utilisateur DAO OK\n";




echo "\n === FIN TESTS === \n\n";

 ?>
