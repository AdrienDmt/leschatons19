
/*
Fichier de création de la base de données SQLite.

Auteur : RC


*/



CREATE TABLE utilisateur (
nom STRING,
prenom STRING,
mail STRING, /* Clé Primaire */
mdp STRING
);


CREATE TABLE produit (
intitule STRING,
complement STRING,
prix INT,
ref STRING, /* Clé Primaire */
photo STRING /* adresse de la photo dans /data/ */
);

/* Table simple qui contitent la catégorie à laquelle appartient à un produit */
CREATE TABLE categorie (
nom STRING /* Clé Primaire */
);



CREATE TABLE ligne_panier (
date DATE, /* Format de date à valider */
quantite INT,
validite BOOLEAN
mail STRING,
ref STRING
/* Clés étrangères à gérer*/
);



CREATE TABLE appartient_a (
ref STRING,
nom STRING
/* Clés étrangères à gérer */
);
