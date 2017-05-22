<?php

include_once "classes.php";

// DAO classe Utilisateur

class DAO {
  private $db;

  function __construct() {
    try {
      $this->db=new PDO('sqlite:test.db');
      var_dump($this->db);
    } catch (PDOException $e) {
      exit("ERREUR : ".$e->getMessage());
    }
  }


  //fonctions CRUD classe Utilisateur

  function createUtilisateur($util) {
    $nom=$util->getNom();
    $prenom=$util->getPrenom();
    $mail=$util->getMail();
    $mdp=$util->getMdp();
    $req="INSERT INTO utilisateur VALUES('$nom', '$prenom', '$mail', '$mdp')";
    $this->db->exec($req);
  }

  function getUtilisateur($mail) {
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

  function getAllUtilisateurs($mail) {
    $req="SELECT * FROM utilisateur";
    $ligne=$this->db->query($req);
    if ($ligne == FALSE) {
      var_dump($this->db->errorInfo());
      exit("Erreur lors de la lecture");
    }
    else {
      $utils=$req->fetchAll(PDO::FETCH_CLASS, "Utilisateur");
      return $utils;
    }
  }

  function deleteUtilisateur($mail) {
    $req="DELETE FROM utilisateur WHERE mail='$mail'";
    $this->db->exec($req);
  }

  function updateUtilisateur($nom, $prenom, $mail, $mdp) {
    $req="UPDATE utilisateur SET ('$nom', '$prenom', '$mail', '$mdp') WHERE mail='$mail'";
    $this->db->exec($req);
  }

  // fonctions CRUD classe Produit

  function createProduit($prod) {
      $reference=$prod->getReference();
      $intitule=$prod->getIntitule();
      $prix=$prod->getPrix();
      $photo=$prod->getPhoto();
      $req="INSERT INTO produit VALUES('$intitule', '', $prix, $reference, '$photo')";
      $this->db->exec($req);
  }

  function getProduits() {
    $req="SELECT * FROM produit";
    $ligne=$this->db->query($req);
    return($ligne->fetchAll(PDO::FETCH_CLASS, "Produit"));
  }

  function getProduitsMinMax($prixMin, $prixMax) {
    $req="SELECT * FROM produit WHERE (prix>=$prixMin AND prix<=$prixMax)";
    $ligne=$this->db->query($req);
    return($ligne->fetchAll(PDO::FETCH_CLASS, "Produit"));
  }
}
?>
