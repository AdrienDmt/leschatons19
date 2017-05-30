<?php
require_once( '../modele/DAO.php');
require_once( '../modele/classes.php');

$test=new DAO();
$produit=$test->getProduitRefTest($_GET['recherche']);
var_dump($produit);

for($i=0; $i<count($produit);$i++){
  $chat[$i]=$test->getProduitRef($produit[$i]['ref']);
  echo "string";
}
var_dump($chat);

 ?>
