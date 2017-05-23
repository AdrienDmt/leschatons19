<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="../vue/accueil.css">
    <link rel="stylesheet" href="../vue/connect.css">
    <link rel="stylesheet" href="../vue/inscription.css">

</head>
<body>
  <header>
		<div id="Banderole">

			<h1><a href="../controleur/index.php?page=accueil"><img src="../data/logo-chat.png" alt="logo" id="logo"/></a> Bienvenue sur le site des chatons</h1>
		</div>
  </header>
<form method="post" id="formulaire" action="../controleur/inscription.php">
    <fieldset>
      <div class="hr"><span>Inscription</span></div>
        <label>Nom :</label>
        <input type="text" name="nom" id="name"/>
        <br>
        <label>Prenom : </label>
        <input type="text" name="prenom" id="firstName" />
        <br>
        <label>Mail : </label>
        <input type="email" name="mail" id="mail" />
        <br>
        <label>Mot de Passe : </label>
        <input type="password" name="psw" id="mdp" />
        <br>
        <label>Verif. Mot de Passe : </label>
        <input type="password" name="pswVerif" id="mdpVerif" />
        <br>
        <input type="submit" value="Envoyer"/>
    </fieldset>
</form>
<footer>
	<p>Le projet web de Julien, Brenda, Alexandre et Raphael.</p>
</footer>
<script src="../controleur/inscVerifMdp.js"></script>
</body>
</html>
