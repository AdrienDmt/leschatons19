
/*

Fchier de remplissage de la base pour des tests fonctionnels.

Auteurs : RC.

*/


/* Utilisateurs */
INSERT INTO Utilisateur VALUES ("Castanier", "Raphael", "raf.c@free.fr", "bla");
INSERT INTO Utilisateur VALUES ("Castanier", "Raphael", "raphael.castanier@free.fr", "bla");
INSERT INTO Utilisateur VALUES ("Hoareau", "Brenda", "b.h@gmail.com", "bla");
INSERT INTO Utilisateur VALUES ("Garenza", "Alex", "ag@gmail.com", "bla");
INSERT INTO Utilisateur VALUES ("Viala", "Julien", "vialaj26@gmail.com", "bla");


/* Produits */
INSERT INTO produit VALUES("Boule de poils", "Chaton mignon né le 12/12/12 \nTaille: ", 12, "123456", "chaton-01.jpg");
INSERT INTO produit VALUES("Rooky", "Animal poilu qui ronronne\n Il est disponible dès maintenant", 123, "321654", "chaton-02.jpg");
INSERT INTO produit VALUES("Felix", "Le célèbre chat des villes.\nIl est calin et aime bien dormir", 200, "refbidon", "chaton-03.jpg");
INSERT INTO produit VALUES("truc", "Chaton mignon né le 12/12/12 \nTaille: ", 2, "12345678", "chaton-04.jpg");
INSERT INTO produit VALUES("Rooky", "Animal poilu qui ronronne\n Il est disponible dès maintenant", 123, "132456", "chaton-05.jpg");
INSERT INTO produit VALUES("Felix", "Le célèbre chat des villes.\nIl est calin et aime bien dormir", 200, "truc", "chaton-06.jpg");


/* Categorie */
INSERT INTO categorie VALUES("Mignons");
INSERT INTO categorie VALUES("Jolis");
INSERT INTO categorie VALUES("Beaux");
INSERT INTO categorie VALUES("Craquants");
INSERT INTO categorie VALUES("Méchants");

/* Ligne Panier */
INSERT INTO ligne_panier VALUES ("aujourd'hui", "r.c@free.fr", "132456", 1, "FALSE");
INSERT INTO ligne_panier VALUES ("aujourd'hui", "r.c@free.fr", "321654", 2, "TRUE");
INSERT INTO ligne_panier VALUES ("hier", "b.h@gmail.com", "refbidon", 5, "FALSE");
INSERT INTO ligne_panier VALUES ("24/05/2017", "raphael.castanier@free.fr", "132456", 1, "FALSE");
INSERT INTO ligne_panier VALUES ("24/05/2017", "raphael.castanier@free.fr", "132456", 2, "FALSE");
INSERT INTO ligne_panier VALUES ("20/05/2017", "raphael.castanier@free.fr", "321654", 20, "FALSE");
INSERT INTO ligne_panier VALUES ("10/05/2017", "raphael.castanier@free.fr", "321654", 3, "FALSE");
INSERT INTO ligne_panier VALUES ("02/05/2017", "raphael.castanier@free.fr", "refbidon", 5, "FALSE");


/* AppartientA */
INSERT INTO appartient_a VALUES ("123456", "Mignons");
INSERT INTO appartient_a VALUES ("321654", "Jolis");
INSERT INTO appartient_a VALUES ("refbidon", "Mignons");
INSERT INTO appartient_a VALUES ("12345678", "Beaux");
INSERT INTO appartient_a VALUES ("132456", "Craquants");
INSERT INTO appartient_a VALUES ("truc", "Beaux");






/**/
