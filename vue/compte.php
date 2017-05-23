<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Mon Compte</title>
  <link rel="stylesheet" href="../vue/accueil.css" media="screen" title="no title" >
  <link rel="stylesheet" href="../vue/compte.css" >
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
      <a href="#"><img src="../data/menu_logout.png" alt="Image deconnect" id="monCompte" />Deconnexion</a>
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
    <article id="info">
      <img src="../data/utilisateur.png" alt="photo" />
      <h2>Nom Prenom </h2>
      <p>nom.prenom@utilisateur.fr</p>
      <p>Nombre chat : xx</p>
    </article>

    <aside class="modification">
      <input type="button" name="name" value="Modifier mon profil">
    </aside>

    </section>
    <footer>
      <p>Le projet web de Julien, Brenda, Alexandre et Raphael.</p>
    </footer>
  </body>
  </html>
