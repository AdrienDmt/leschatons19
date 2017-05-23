<?php
/*

Fichier PHP d'implémentation des classes.

Auteurs : AG, RC.

*/

// ----------------------
// Classe Utilisateur
// ----------------------
class Utilisateur {
  private $nom;
  private $prenom;
  private $mail;
  private $mdp;

  function __construct($nom='', $prenom='', $mail='', $mdp='') {
    if ($nom!= '') {
      $this->nom=$nom;
      $this->prenom=$prenom;
      $this->mail=$mail;
      $this->mdp=$mdp;
    }
  }

  // Getters
  function getNom() {
    return $this->nom;
  }

  function getPrenom() {
    return $this->prenom;
  }

  function getMail() {
    return $this->mail;
  }

  function getMdp() {
    return $this->mdp;
  }

  // Setters
  function setNom($nom) {
    $this->nom=$nom;
  }

  function setPrenom($prenom) {
    $this->prenom=$prenom;
  }

  function setMail($mail) {
    $this->mail=$mail;
  }

  function setMdp($mdp) {
    $this->mdp=$mdp;
  }

}
// fin classe Utilisateur



// ----------------------
// Classe Produit
// ----------------------

class Produit {

  private $reference;
  private $intitule;
  private $prix;
  private $photo;
  //  private $categories=array();

  function __construct($reference='', $intitule='', $prix=-1, $photo='') {
    if ($reference != '') {
      $this->reference=$reference;
      $this->intitule=$intitule;
      $this->prix=$prix;
      $this->photo=$photo;
    }
  }

  // Getters

  function getReference() {
    return $this->reference;
  }

  function getIntitule() {
    return $this->intitule;
  }

  function getPrix() {
    return $this->prix;
  }

  function getPhoto() {
    return $this->photo;
  }

  function getProduit() {
    return $this;
  }

}
// Fin classe Produit


?>
