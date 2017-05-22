<?php

// Classe produit

class Produit {

  private $reference;
  private $intitule;
  private $prix;
  private $photo;
//  private $categories=array();

  function __construct($reference, $intitule, $prix, $photo) {
    $this->reference=$reference;
    $this->intitule=$intitule;
    $this->prix=$prix;
    $this->photo=$photo;
  }

  // Getters

  function getReference() {
    return $reference;
  }

  function getIntitule() {
    return $intitule;
  }

  function getPrix() {
    return $prix;
  }

  function getPhoto() {
    return $photo;
  }

  function getProduit() {
    return $this;
  }

}
 ?>
