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
      $this->db=new PDO('sqlite:../modele/data/base.db'); /* test.db est le nom de la base, peut être modifié */
      /* var_dump($this->db); */
    } catch (PDOException $e) {
      throw new Exception("\nERREUR : ".$e->getMessage());
    }
  }

  // ----------------------
  // Fonctions CRUD classe Utilisateur
  // ----------------------

  function getUtilisateur($mail, $mdp='') {
    // Renvoie un tableau contenant 1 utilisateur (si il existe)
    // Sécurité : attention aux passages de code SQL (injections possibles)

    // Ajouter le test si on demande $mail et $mdp (cas d'une identification utilisateur)
    if ($mdp == '') {
      $req="SELECT * FROM utilisateur WHERE mail='$mail'";
    } else {
      $req="SELECT * FROM utilisateur WHERE mail='$mail' AND mdp='$mdp'";
    }
    $ligne=$this->db->query($req);
    if ($ligne == FALSE) {
      //var_dump($this->db->errorInfo());
      return FALSE;
    } else {
      $util=$ligne->fetchAll(PDO::FETCH_CLASS, "Utilisateur");
      return $util;
    }
  }

  function createUtilisateur($util) {
    // Crée un utilisatuer à partir de l'objet utilisateur passé en paramètre
    $nom=$util->getNom();
    $prenom=$util->getPrenom();
    $mail=$util->mail;
    $mdp=$util->getMdp();
    // Vérifier que cet utilisateur n'existe pas déja !!
    $existant=$this->getUtilisateur($mail);
    if($existant == FALSE) {
      $req="INSERT INTO utilisateur VALUES('$nom', '$prenom', '$mail', '$mdp')";
      $resExec=$this->db->exec($req);
      if ($resExec == FALSE)
      throw new Exception("ERREUR : Impossible de créer l'utilisateur\n");
    } else
    throw new Exception("ERREUR : l'adresse mail ".$util->mail." existe déjà\n");
    // Ajouter les vérifications d'erreur et d'intégrité
  }

  function getAllUtilisateurs() {
    // Renvoie un tableau contenant tous les utilisateurs
    $req="SELECT * FROM utilisateur";
    $ligne=$this->db->query($req);
    if ($ligne == FALSE) {
      var_dump($this->db->errorInfo());
      throw new Exception("Erreur dans getAllUtilisateurs");
    }
    else {
      $utils=$ligne->fetchAll(PDO::FETCH_CLASS, "Utilisateur");
      return $utils;
    }
  }

  function deleteUtilisateur($mail) {
    // Supprime un utilisateur dont l'adresse mail est passée en paramètre
    $req="DELETE FROM utilisateur WHERE mail='$mail'";
    $resExec=$this->db->exec($req);
    if($resExec == 0)
    echo("L'utilisateur d'adresse mail ".$mail." n'existe pas");
  }

  function updateUtilisateur($nom, $prenom, $mail, $mdp) {
    // Modifie un utilisateur existant avec les nouvelles valeurs
    // Vérifier que l'utilisateur existe au préalable!!
    // Ne marche pas!!!
    $existant=getUtilisateur($mail);
    if ($existant == FALSE)
    throw new Exception("ERREUR : L'utilisateur d'adresse mail ".$mail." n'existe pas");
    else {
      $req="UPDATE utilisateur SET nom='$nom', prenom='$prenom', mail='$mail', mdp='$mdp' WHERE mail='$mail'";
      $resExec=$this->db->exec($req);
      if ($resExec == FALSE) {
        throw new Exception("ERREUR : impossible de mettre à jour les informations de l'utilisateur d'adresse mail ".$mail);
      }
      // regarder ce que rend exec (si erreur, le signaler)
    }
  }

  // ----------------------
  // fonctions CRUD classe Produit
  // ----------------------

  function createProduit($prod) {
    // Ajoute un produit à la base, à condition que sa ref n'existe pas encore
    // Ne marche pas!!!
    $ref=$prod->getRef();
    $complement=$prod->getComplement();
    $intitule=$prod->getIntitule();
    $prix=$prod->getPrix();
    $photo=$prod->getPhoto();
    $existant=$this->getProduitRef($ref);
    if ($existant == FALSE) {
      if ($prix < 0)
        throw new Exception("ERREUR : le prix est invalide (négatif)\n");
      else {
        $req="INSERT INTO produit VALUES('$intitule', '$complement', $prix, $ref, '$photo')";
        $this->db->exec($req);
      }
    } else
      throw new Exception("ERREUR : le produit de référence ".$ref." existe déjà\n");
  }

  function getProduitRef($ref) {
    // Renvoie le produit de référence $REF
    $req="SELECT * FROM produit WHERE ref=$ref";
    $ligne=$this->db->query($req);
    if ($ligne == FALSE) return FALSE;
    else {
      $prod=$ligne->fetchAll(PDO::FETCH_CLASS, "Produit");
      return $prod;
    }
  }

  function getProduits() {
    // Renvoie un tableau contenant tous les produits de la base
    $req="SELECT * FROM produit";
    $ligne=$this->db->query($req);
    if ($ligne==FALSE)
      throw new Exception("Erreur dans getProduits()\n");
    else
      return $ligne->fetchAll(PDO::FETCH_CLASS, "Produit");
  }

  function getProduitsMinMax($prixMin, $prixMax) {
    // Renvoie un tableau contenant tous les produits dont le prix est compris entre les bornes passées en paramètre
    $req="SELECT * FROM produit WHERE (prix>=$prixMin AND prix<=$prixMax)";
    $ligne=$this->db->query($req);
    if ($ligne==FALSE)
      throw new Exception("Erreur dans getProduitsMinMax()\n");
    else
      return($ligne->fetchAll(PDO::FETCH_CLASS, "Produit"));
  }

  function getProduitsCategorie($categorie) {
    // Renvoie un tableau contenant les produits de la catégorie passée en paramètre
    $req="SELECT * FROM produit WHERE categorie='$categorie'";
    $ligne=$this->db->query($req);
    if ($ligne==FALSE)
      throw new Exception("Erreur dans getProduitsCategorie()\n");
    else
      return($ligne->fetchAll(PDO::FETCH_CLASS, "Produit"));
  }

  function getProduitsUtilisateur($mail) {
    // Renvoie un tableau contenant les produits de l'utilisateur (donc son panier) dont le mail est passé en paramètre
    $util=$this->getUtilisateur($mail);
    if ($util == FALSE)
      throw new Exception("ERREUR : l'utilisateur d'adresse mail ".$mail." n'existe pas\n");
    else {
      $req="SELECT intitule, complement, prix, ref, photo FROM utilisateur NATURAL JOIN ligne_panier NATURAL JOIN produit WHERE mail='$mail'";
      $ligne=$this->db->query($req);
      if ($ligne==FALSE)
        throw new Exception("Erreur dans getProduitsUtilisateur()\n");
      else
        return($ligne->fetchAll(PDO::FETCH_CLASS, "Produit"));
    }
  }

  function deleteProduit($ref) {
    // Supprime de la table produit le produit dont la référence est passée en paramètre
    $req="DELETE FROM produit WHERE ref='$ref'";
    $resExec=$this->db->exec($req);
    if ($resExec==0)
      throw new Exception("ERREUR : Produit de référence ".$ref." inexistant\n");
    }

  function updateProduit($intitule, $complement='', $prix, $ref, $photo) {
    $prod=getProduitRef($ref);
    if ($prod == FALSE)
      throw new Exception("ERREUR : Produit de référence ".$ref." inexistant\n");
    else {
      $req="UPDATE produit SET ($intitule, '$complement', '$prix', '$ref', '$photo') WHERE ref='$ref'";
      $resExec=$this->db->exec($req);
      if ($resExec == 0)
        throw new Exception("ERREUR : Produit de référence ".$ref." inexistant\n");
    }
  }
  // ----------------------
  // fonctions CRUD classe Categorie
  // ----------------------

  function getCategorie($nom) {
    $req="SELECT * FROM categorie WHERE nom='$nom'";
    $ligne=$this->db->query($req);
    if ($ligne == FALSE) {
      throw new Exception("Catégorie ".$nom." inexistante\n");
      return FALSE;
    }
    else
      return($ligne->fetchAll(PDO::FETCH_CLASS, "Categorie"));
  }

  function createCategorie($nom) {
    $cat=getCategorie($nom);
    if ($cat == FALSE) {
      $req="INSERT INTO categorie VALUES('$nom')";
      $this->db->exec($req);
    } else
      throw new Exception("ERREUR : la catégorie ".$nom." existe déjà\n");
  }

  function deleteCategorie($nom) {
    $cat=$this->getCategorie($nom);
    if ($cat == FALSE)
      throw new Exception("ERREUR : catégorie ".$nom." inexistante\n");
    else {
      $req="DELETE FROM categorie WHERE nom='$nom'";
      $resExec=$this->db->exec($req);
      if ($resExec == 0)
        echo("Aucun produit de la catégorie ".$nom."\n");
  }

  function updateCategorie($nom) {
    $cat=$this->getCategorie($nom);
    if ($cat == FALSE)
      throw new Exception("ERREUR : catégorie ".$nom." inexistante\n");
    else {
      $req="UPDATE categorie SET nom='$nom' WHERE nom='$nom'";
      $resExec=$this->db->exec($req);
      if ($resExec == 0)
        echo("Aucun produit de la catégorie ".$nom."\n");
    }
  }

}
?>
