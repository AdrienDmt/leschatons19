<!-- ***************************Create By Hoareau Brenda Marinasy***************************-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Paiement</title>
    <link rel="stylesheet" href="../vue/paiement.css">
</head>
<body>
  <img src="../data/carte.jpg" alt="image banque" />
<hr>
<form method="post" id="formulaire" action="../controleur/ajoutProduit.php">
    <fieldset>
      <div><span>Montant de la transaction </span></div>
        <label>Numéro carte bancaire : </label>
        <input type="text" name="nom" id="nom"/>
        <br>
        <label>Date d'éxpiration : </label>
         <input type="number" name="mois" id="mois" min="1" max="12" /> /
        <input type="number" name="annee" id="annee" min="2017" max=2030>
        <br>
        <label>Code de vérification : </label>
        <input type="text" name="codeVerif" id="codeVerif" />
        <br>
        <input type="submit" name="name" value="Valider">
        <input type="button" name="name" value="Abandonner">
    </fieldset>

</form>

</body>
</html>
