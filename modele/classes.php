<?php
/*

Fichier PHP d'implémentation des classes.

Auteurs : AG, RC.

*/

// ----------------------
// Classe Utilisateur
// ----------------------
class Utilisateur {
  public $nom;
  public $prenom;
  public $mail;
  public $mdp;

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

  public $intitule;
  public $complement;
  public $prix;
  public $ref;
  public $photo;
  //  private $categories=array();

  function __construct($intitule='', $complement='', $prix=-1, $ref=-1, $photo='') {
      $this->intitule=$intitule;
      $this->complement=$complement;
      $this->prix=$prix;
      $this->ref=$ref;
      $this->photo=$photo;
  }

  // Getters

  function getRef() {
    return $this->ref;
  }

  function getComplement() {
    return $this->complement;
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


// ----------------------
// Classe Categorie
// ----------------------

class Categorie
{

    public $nom;

    function __construct($nom='')
    {
        $this->nom = $nom;
    }

}


// ----------------------
// Classe Ligne Panier
// ----------------------

class LignePanier
{
    public $mail;
    public $ref;
    public $date;
    public $quantite;
    public $valide;

    function __construct($mail='', $ref='', $date='', $quantite=1, $valide=FALSE)
    {
        // constructeur peut être appelé vide, mais attention à la cohérence!!
        $this->mail = $mail;
        $this->ref = $ref;
        $this->date = $date;
        $this->quantite = $quantite;
        $this->valide = $valide;
    }

}

// ----------------------
// Classe Appartient à
// ----------------------

class AppartientA
{
    public $nom;
    public $ref;

    function __construct($nom='', $ref='')
    {
        // constructeur peut être appelé vide, mais attention à la cohérence!!
        $this->nom = $nom;
        $this->ref = $ref;
    }

}


?>
