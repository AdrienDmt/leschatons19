<?php
include "produit.php";

$prod = new Produit(1, "chaton", 100, "chaton-01.jpg");
var_dump($prod->getProduit());

 ?>
