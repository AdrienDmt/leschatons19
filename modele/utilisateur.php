<?php

// Classe utilisateur

class Utilisateur {
  private $nom;
  private $prenom;
  private $mail;
  private $mdp;

  // Constructeur
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

// DAO clase utilisateur

class UtilisateurDAO {
  private $db;

  function __construct() {
    try {
      $this->db=new PDO('sqlite:test.db');
      var_dump($this->db);
    } catch (PDOException $e) {
      exit("ERREUR : ".$e->getMessage());
    }
  }

  function create($util) {
    var_dump($util);
    $nom=$util->getNom();
    $prenom=$util->getPrenom();
    $mail=$util->getMail();
    $mdp=$util->getMdp();
    $req="INSERT INTO utilisateur VALUES('$nom', '$prenom', '$mail', '$mdp')";
    $this->db->exec($req);
  }

  function read($mail) {
    $req="SELECT * FROM utilisateur WHERE mail='$mail'";
    $ligne=$this->db->query($req);
    if ($ligne == FALSE) {
      var_dump($this->db->errorInfo());
      exit("Erreur lors de la lecture");
    } else {
      $util=$ligne->fetchAll(PDO::FETCH_CLASS, "Utilisateur");
      return $util;
    }
  }

  // Sécurité : attention aux passages de code SQL (injections possibles)

  function readAll($mail) {
    $req="SELECT * FROM utilisateur";
    $ligne=$this->db->query($req);
    if ($ligne == FALSE) {
      var_dump($this->db->errorInfo());
      exit("Erreur lors de la lecture");
    }
    else {
      var_dump($ligne);
      $utils=$req->fetchAll(PDO::FETCH_CLASS, "Utilisateur");
      return $utils;
    }
  }

  function delete($mail) {
    $req="DELETE FROM utilisateur WHERE mail='$mail'";
    $this->db->exec($req);
  }

  function update($nom, $prenom, $mail, $mdp) {
    $req="UPDATE utilisateur SET ('$nom', '$prenom', '$mail', '$mdp') WHERE mail='$mail'";
    $this->db->exec($req);
  }
}
?>
