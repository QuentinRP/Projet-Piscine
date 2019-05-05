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

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO credicard ( Type_carte, Num_carte, Nom_carte, Date_expiration,  Code_sécurité, Nom, Prénom, Adresse1, Adresse2, Ville, Code_postal, Pays, Tel ) VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )');
$req->execute(array(  $_POST['Type_carte'],  $_POST['Num_carte'], $_POST['Nom_carte'],$_POST['Date_expiration'],$_POST['Code_sécurité'] ,$_POST['Nom'],$_POST['Prénom'],$_POST['Adresse1'],$_POST['Adresse2'],$_POST['Ville'],$_POST['Code_postal'],$_POST['Pays'],$_POST['Tel']));

// Redirection du visiteur vers la page du minichat
header('Location: paiement1.php');
?>

