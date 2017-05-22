<?php

// Classe utilisateur

class Utilisateur {
  private $nom;
  private $prenom;
  private $mail;
  private $mdp;

  // Constructeur
  function __construct($nom, $prenom, $mail, $mdp) {
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->mail=$mail;
    $this->mdp=$mdp;
  }

  // Getters

  function getNom() {
    return $nom;
  }

  function getPrenom() {
    return $prenom;
  }

  function getMail() {
    return $mail;
  }

  function getMdp() {
    return $mdp;
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

 ?>
