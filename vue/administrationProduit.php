<!-- ***************************Create By Hoareau Brenda Marinasy***************************-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admnistration produit</title>
  <link rel="stylesheet" href="../vue/accueil.css" media="screen" title="no title" >
  <link rel="stylesheet" href="../vue/compte.css" >
  <link rel="stylesheet" href="../vue/admin.css">
  <link rel="stylesheet" href="../vue/administrationUtilisateur.css">
</head>
<body>
  <header>
    <div id="Banderole">
      <h1><a href="../controleur/index.php?page=accueil"><img src="../data/logo-chat.png" alt="logo" id="logo"/></a> Bienvenue sur le site des chatons</h1>
    </div>
    <nav id="menu">
      <h2>Admin</h2>
      <a href="../controleur/index.php?page=admin"><img src="../data/utilisateur.png" alt="Image compte" id="monCompte" />Mon compte</a>
      <a href="../controleur/index.php?page=deconnexion"><img src="../data/menu_logout.png" alt="Image deconnect" id="monCompte" />Deconnexion</a>
      <ul>
        <li><a href="#">Utilisateurs</a></li>
        <li><a href="#">Produits</a></li>
      </ul>
    </nav>
  </header>

  <section>
    <input type="button" name="name" value="Ajouter produit">
    <table>
      <caption>Liste Produit</caption>
      <tr>
        <th>id</th>
        <th>Nom</th>
        <th>References</th>
        <th>Action</th>
      </tr>
      <tr>
        <td>id </td>
        <td>Jolie 1 </td>
        <td>16561</td>
        <td><a href="#">Supprimer</a> <a href="#">Modifier</a></td>
      </tr>
      <tr>
        <td>id</td>
        <td>Jolie 2</td>
        <td>aze66</td>
        <td><a href="#">Supprimer</a> <a href="#">Modifier</a></td>
      </tr>
    </table>
    <a href="#" id="precedent"><img src="../data/fleche1.png" alt="test"></a>
    <a href="#" id="suivant"><img src="../data/fleche2.png" alt="test"></a>
  </section>

</body>
</html>
