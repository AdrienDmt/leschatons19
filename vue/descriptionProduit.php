<!-- ***************************Create By Hoareau Brenda Marinasy***************************-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Description</title>
    <link rel="stylesheet" href="../vue/accueil.css" media="screen" title="no title">
    <link rel="stylesheet" href="../vue/descriptionProduit.css">
  </head>
  <body>
    <header>
      <div id="Banderole">
        <h1><a href="../controleur/index.php?page=accueil"><img src="../data/logo-chat.png" alt="logo" id="logo"/></a> Bienvenue sur le site des chatons</h1>
      </div>
      <nav id="menu">
        <h2>Categories</h2>
        <a href="../controleur/index.php?page=connexion"><img src="../data/utilisateur.png" alt="Image compte" id="monCompte" />Mon compte</a>
        <a href="#"><img src="../data/panier.png" alt="Image panier" id="panier"/>Mon panier</a>
        <ul>
          <li><a href="#">Accueil</a></li>
          <li><a href="#">Mignons</a></li>
          <li><a href="#">Jolis</a></li>
          <li><a href="#">Beaux</a></li>
          <li><a href="#">Craquants</a></li>
          <li><a href="#">Tous</a></li>
        </ul>
      </nav>
    </header>
    <section>
      <img src="../data/chaton-03.jpg" alt="img produit" />
      <div class="description">
        <h2>Mignon 1 reference 767624</h2>
          <p>
            1 mâle <br> Nés : 24 avril 2017 <br> Disponibles : 24 juin 2017 <br>
            Prix : xxx euros .... blabla
          </p>
      </div>
      <div class="achat">
        <p> Quantité : </p> <input type="number" name="name" min="0" max="10">
        <input type="button" name="name" value="Acheter">
      </div>
    </section>
    <footer>
      <p>Le projet web de Julien, Brenda, Alexandre et Raphael.</p>
    </footer>
  </body>
</html>
