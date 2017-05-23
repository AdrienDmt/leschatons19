<?php
/*

Fichier PHP de gestion des objets du modèle.

Auteurs : AG, RC.

*/

include_once "classes.php";

// ----------------------
// DAO
// ----------------------
class DAO {

  private $db; /* PDO de la base */

  function __construct() {
    try {
        echo "\n Construceteur \n";
      $this->db=new PDO('sqlite:test.db'); /* test.db est le nom de la base, peut être modifié */
      /* var_dump($this->db); */
    } catch (PDOException $e) {
      exit("\nERREUR : ".$e->getMessage());
    }
  }

  // ----------------------
  // Fonctions CRUD classe Utilisateur
  // ----------------------

  function createUtilisateur($util) {
    // Crée un utilisatuer à partir de l'objet utilisateur passé en paramètre
    $nom=$util->getNom();
    $prenom=$util->getPrenom();
    $mail=$util->getMail();
    $mdp=$util->getMdp();
    // Vérifier que cet utilisateur n'existe pas déja !!
    $req="INSERT INTO utilisateur VALUES('$nom', '$prenom', '$mail', '$mdp')";
    $this->db->exec($req);
    // Ajouter les vérifications d'erreur et d'intégrité
  }

  function getUtilisateur($mail, $mdp='') {
    // Renvoie un tableau contenant 1 utilisateur (si il existe)
    // Sécurité : attention aux passages de code SQL (injections possibles)

    // Ajouter le test si on demande $mail et $mdp (cas d'une identification utilisateur)
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

  function getAllUtilisateurs() {
    // Renvoie un tableau contenant tous les utilisateurs
    $req="SELECT * FROM utilisateur";
    $ligne=$this->db->query($req);
    var_dump($ligne);
    if ($ligne == FALSE) {
      var_dump($this->db->errorInfo());
      exit("Erreur lors de la lecture");
    }
    else {
      $utils=$ligne->fetchAll(PDO::FETCH_CLASS, "Utilisateur");
      return $utils;
    }
  }

  function deleteUtilisateur($mail) {
    // Supprime un utilisateur dont l'adresse mail est passée en paramètre
    $req="DELETE FROM utilisateur WHERE mail='$mail'";
    $this->db->exec($req);
  }

  function updateUtilisateur($nom, $prenom, $mail, $mdp) {
    // Modifie un utilisateur existant avec les nouvelles valeurs
    // Vérifier que l'utilisateur existe !!
    // Ne marche pas!!!
    $req="UPDATE utilisateur SET ('$nom', '$prenom', '$mail', '$mdp') WHERE mail='$mail'";
    $this->db->exec($req);
  }

  // ----------------------
  // fonctions CRUD classe Produit
  // ----------------------

  function createProduit($prod) {
      // Ajoute un produit à la base, à condition que sa ref n'existe pas encore
      // Ne marche pas!!!
      $reference=$prod->getReference();
      $intitule=$prod->getIntitule();
      $prix=$prod->getPrix();
      $photo=$prod->getPhoto();
      // Vérifier validité de la ref, du prix (positif...)
      $req="INSERT INTO produit VALUES('$intitule', '', $prix, $reference, '$photo')";
      $this->db->exec($req);
  }

  function getProduits() {
    // Renvoie un tableau contenant tous les produits de la base
    $req="SELECT * FROM produit";
    $ligne=$this->db->query($req);
    return $ligne->fetchAll(PDO::FETCH_CLASS, "Produit");
  }

  function getProduitsMinMax($prixMin, $prixMax) {
    // Renvoie un tableau contenant tous les produits dont le prix est compris entre les bornes passées en paramètre
    $req="SELECT * FROM produit WHERE (prix>=$prixMin AND prix<=$prixMax)";
    $ligne=$this->db->query($req);
    return($ligne->fetchAll(PDO::FETCH_CLASS, "Produit"));
  }
}
?>
