<?php
require_once( '../modele/DAO.php');
require_once( '../modele/classes.php');

$test=new DAO();
$produit=$test->getProduitRefTest($_GET['recherche']);
var_dump($produit);

//$chat = $test->getProduitNom(var_dump($produit)[0]['intitule']);
//echo $produit[0]['intitule'];

//echo count($produit);
for($i=0; $i<count($produit);$i++){
  $chat[$i]=$test->getProduitNom($produit[$i]['intitule']);
  echo "string";
}
var_dump($chat);

 ?>
