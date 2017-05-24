<!-- ***************************Create By Hoareau Brenda Marinasy***************************-->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Produit</title>
  <link rel="stylesheet" href="../vue/accueil.css" media="screen" title="no title" >
  <link rel="stylesheet" href="../vue/listeProduit.css">
</head>

<body onload="init()">
  <header>
    <div id="Banderole">
      <h1><a href="../controleur/index.php?page=accueil"><img src="../data/logo-chat.png" alt="logo" id="logo"/></a> Bienvenue sur le site des chatons</h1>
    </div>
    <nav id="menu">
      <a href="../controleur/index.php?page=connexion"><img src="../data/utilisateur.png" alt="Image compte" id="monCompte" />Mon compte</a>
      <a href="../controleur/index.php?page=panier"><img src="../data/panier.png" alt="Image panier" id="panier"/>Mon panier</a>
      <ul>
          <li><a href="../controleur/index.php?page=accueil">Accueil</a></li>
          <li><a href="../controleur/index.php?page=liste&categorie=mignon">Mignons</a></li>
          <li><a href="../controleur/index.php?page=liste&categorie=joli">Jolis</a></li>
          <li><a href="../controleur/index.php?page=liste&categorie=beaux">Beaux</a></li>
          <li><a href="../controleur/index.php?page=liste&categorie=craquand">Craquants</a></li>
          <li><a href="../controleur/index.php?page=liste&categorie=tous">Tous</a></li>
      </ul>
    </nav>
  </header>
  <section>
    <article>
      <a href="#" class="lienChat">
        <div class="Chat1">
          <figure>
            <img src="../data/chaton-01.jpg" alt="img chaton1" />
          </figure>
          <figcaption>Mignon 1</figcaption>
          <p> 1 mâle <br> Nés : 24 avril 2017 <br> Disponibles : 24 juin 2017 </p>
        </div>
      </a>
      <a href="#" class="lienChat">
        <div class="Chat2">
          <figure>
            <img src="../data/chaton-01.jpg" alt="img chaton1" />
          </figure>
          <figcaption>Mignon 2</figcaption>
          <p> 1 mâle <br> Nés : 24 avril 2017 <br> Disponibles : 24 juin 2017 </p>
        </div>
      </a>
      <a href="#" class="lienChat">
        <div class="Chat3">
          <figure>
            <img src="../data/chaton-01.jpg" alt="img chaton1" />
          </figure>
          <figcaption>Mignon 3</figcaption>
          <p> 1 mâle <br> Nés : 24 avril 2017 <br> Disponibles : 24 juin 2017 </p>
        </div>
      </a>
      <a href="#" class="lienChat">
        <div class="Chat4">
          <figure>

            <img src="../data/chaton-01.jpg" alt="img chaton1" />
          </figure>
          <figcaption>Mignon 4</figcaption>
          <p> 1 mâle <br> Nés : 24 avril 2017 <br> Disponibles : 24 juin 2017 </p>

        </div>
      </a>
      <a href="#" class="lienChat">
        <div class="Chat5">
          <figure>
            <img src="../data/chaton-01.jpg" alt="img chaton1" />
          </figure>
          <figcaption>Mignon 5</figcaption>
          <p> 1 mâle <br> Nés : 24 avril 2017 <br> Disponibles : 24 juin 2017 </p>
        </div>
      </a>
      <a href="#" class="lienChat">
        <div class="Chat6">
          <figure>
            <img src="../data/chaton-01.jpg" alt="img chaton1" />
          </figure>
          <figcaption>Mignon 6</figcaption>
          <p> 1 mâle <br> Nés : 24 avril 2017 <br> Disponibles : 24 juin 2017 </p>
        </div>
      </a>
      <a href="#" class="lienChat">
        <div class="Chat7">
          <figure>
            <img src="../data/chaton-01.jpg" alt="img chaton1" />
          </figure>
          <figcaption>Mignon 7</figcaption>
          <p> 1 mâle <br> Nés : 24 avril 2017 <br> Disponibles : 24 juin 2017 </p>
        </div>
      </a>
      <a href="#" class="lienChat">
        <div class="Chat8">
          <figure>
            <img src="../data/chaton-01.jpg" alt="img chaton1" />
          </figure>
          <figcaption>Mignon 8</figcaption>
          <p> 1 mâle <br> Nés : 24 avril 2017 <br> Disponibles : 24 juin 2017 </p>
        </div>
      </a>
      <br>
      <a href="#" id="precedent"><img src="../data/fleche1.png" alt="test"></a>
      <a href="#" id="suivant"><img src="../data/fleche2.png" alt="test"></a>
    </article>
    <aside class="panneau">
      <h3>Triez votre chaton</h3>
      <input type="button" name="name" value="Prix">
      <input type="button" name="name" value="Nom">
      <input type="button" name="name" value="bouton3">
    </aside>

  </section>

  <div class="parametre">

  </div>
  <footer>
    <p>Le projet web de Julien, Brenda, Alexandre et Raphael.</p>
  </footer>
  <script src="../controleur/constPageVisu.js"></script>
</body>
</html>
