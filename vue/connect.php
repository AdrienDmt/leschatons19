<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="initial-scale=1, width=device-width"/>
    <title>Connection</title>
    <link rel="stylesheet" href="../vue/connect.css" media="screen" title="no title">
    <link rel="stylesheet" href="../vue/accueil.css">
</head>
<body>
  <header>
		<div id="Banderole">

			<h1><a href="../controleur/index.php?page=accueil"><img src="../data/logo-chat.png" alt="logo" id="logo"/></a> Bienvenue sur le site des chatons</h1>
		</div>
  </header>

    <form method="post" id="formulaire" action="../controleur/verifIdent.php">

        <fieldset>
          <div class="hr"><span>Connection</span></div>
            <label for="zone_id">Identifiant :</label>
            <input type="text" name="login" id="zone_id"/>
            <br>
            <label for="zone_mdp">Mot de passe : </label>
            <input type="password" name="psw" id="zone_mdp" />
            <br>
            <input type="submit" value="Se Connecter"/>
            <br>
            <a href="../controleur/index.php?page=inscription">Vous n'avez pas de compte ?</a>
        </fieldset>
    </form>
    <br>


    <footer>
    	<p>Le projet web de Julien, Brenda, Alexandre et Raphael.</p>
    </footer>
</body>
</html>
