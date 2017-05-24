
/*

Fchier de remplissage de la base pour des tests fonctionnels.

Auteurs : RC.

*/


/* Utilisateurs */
INSERT INTO Utilisateur VALUES ("Castanier", "Raphael", "r.c@free.fr", "bla");
INSERT INTO Utilisateur VALUES ("Hoareau", "Brenda", "h.h@gmail.com", "bla");
INSERT INTO Utilisateur VALUES ("Garenza", "Alex", "ag@gmail.com", "bla");
INSERT INTO Utilisateur VALUES ("Viala", "Julien", "vialaj@gmail.com", "bla");


/* Produits */
INSERT INTO produit VALUES("Boule de poils", "Chaton mignon né le 12/12/12 \nTaille: ", 12, "123456", "chaton-01.jpg");
INSERT INTO produit VALUES("Rooky", "Animal poilu qui ronronne\n Il est disponible dès maintenant", 123, "321654", "chaton-02.jpg");
INSERT INTO produit VALUES("Felix", "Le célèbre chat des villes.\nIl est calin et aime bien dormir", 200, "refbidon", "chaton-03.jpg");


/* Categorie */
INSERT INTO categorie VALUES("Mignons");
INSERT INTO categorie VALUES("Jolis");
INSERT INTO categorie VALUES("Beaux");
INSERT INTO categorie VALUES("Craquants");
INSERT INTO categorie VALUES("Méchants");

/* Ligne Panier */
INSERT INTO ligne_panier VALUES ('$lignePanier->date', $lignePanier->quantite, $lignePanier->valide, '$lignePanier->mail', $lignePanier->ref);


/* AppartientA */







/**/
