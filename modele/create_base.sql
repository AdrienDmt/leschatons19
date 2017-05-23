
/*
Fichier de création de la base de données SQLite.

Auteur : RC
*/



CREATE TABLE utilisateur (
nom STRING,
prenom STRING,
mail STRING PRIMARY KEY, /* Clé Primaire */
mdp STRING
);


CREATE TABLE produit (
intitule STRING,
complement STRING,
prix INT,
ref STRING PRIMARY KEY, /* Clé Primaire */
photo STRING /* adresse de la photo dans /data/ */
);

/* Table simple qui contitent la catégorie à laquelle appartient à un produit */
CREATE TABLE categorie (
nom STRING PRIMARY KEY /* Clé Primaire */
);



CREATE TABLE ligne_panier (
date DATE, /* Format de date à valider */
quantite INT,
validite BOOLEAN,
mail STRING REFERENCES utilisateur(mail),
ref STRING REFERENCES produit(ref),
PRIMARY KEY (date, mail, ref)
);



CREATE TABLE appartient_a (
ref STRING REFERENCES produit(ref),
nom STRING REFERENCES categorie(nom),
PRIMARY KEY (ref, nom)
);
