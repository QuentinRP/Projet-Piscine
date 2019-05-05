<?php require 'header.php'; ?>

 		<header class="page-header header container-fluid">
 			<div class="overlay"></div>
			<div class="description">
 				<h2>Vos achats</h2>
			</div>
<div class="container features">
	
 		<div class="row">
 			<div class=" col-sm-6">

				<h1 align="center">Coordonnées de livraison</h1>
				<form align="center">
					<tr><br>
						<td>Nom :</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<td><input type="txt" id="name" placeholder="Votre nom" required autofocus></td><br>
						<br>
						<td>Prénom :</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<td><input type="txt" id="firstname" placeholder="Votre Prénom" required autofocus></td><br>
						<br>
						<td>Adresse 1 :</td></tr>&nbsp;&nbsp;&nbsp;&nbsp;
						<td><input type="txt" id="adresse" placeholder="Votre Adresse" rows=5 required></td><br>
						<br>
						<td>Adresse 2 :</td></tr>&nbsp;&nbsp;&nbsp;&nbsp;
						<td><input type="txt" id="adresse" rows=5 required></td><br>
						<br>
						<td>Ville :</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<td><input type="txt" id="name" placeholder="Votre Ville"></td><br>
						<br>
						<td>Code Postal :</td>&nbsp;
						<td><input type="txt" id="codepostal" placeholder="Votre code postal" type=text required></td><br>
						<br>
						<td>Pays :</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<td><input type="txt" id="pays" placeholder="Votre Pays" required></td><br>
						<br>
					    <td>N° Tel :</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					    <td><input type="tel" id="telephone" placeholder="ex&nbsp;: +336 12 34 56 78" required></td>
						<br><br>
						
				</td>
				</form>
 			</div>

			<div class=" col-sm-6"> 
		
				<h1 align="center">Option de paiement</h1>
				<form  action="insert_piscine_method.php" method="post">
       			<p>

      				<br><label for="Type_carte" align="left">Type de carte</label> :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <input type="text" name="Type_carte" id="Type_carte" align="center" placeholder="Visa, MasterCard, PayPal..."/><br />
        			<br><label for="Num_carte" align="left">Numéro carte</label> :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="Num_carte" id="Num_carte" align="center" placeholder="16 chiffres"/><br />
       				<br><label for="Nom_carte" align="left">Nom carte</label> : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="Nom_carte" id="Nom_carte" align="center" placeholder="Nom propriétaire"/><br />
        			<br><label for="Date_expiration" align="left"> Date d'expiration</label> :  <input type="number" name="Date_expiration" id="Date_expiration"align="center" placeholder="0519 (Mai 2019)"/><br />
        			<br><label for="Code_sécurité" align="left">Code de sécurité</label> :  <input type="number" name="Code_sécurité" id="Code_sécurité"align="center" placeholder="3 où 4 chiffres" /><br />
        			<br>

					<input class="bouton3" type="submit" value="Envoyer" align="center" />

					


				</p>
    			</form>


    		</div>
    	</div>
    </div>
</header>

<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=piscine;charset=utf8', 'rot', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

?>


<?php require 'footer.php'; ?>


