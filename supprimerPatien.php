<?php 
	include "connexion.php";
	$id=$_GET['id'];
	$req = $bdd->prepare('DELETE FROM patient WHERE id= ?');
	$lignes = $req->execute(array($id));
	if ($lignes==1) {
		header("Location:Admin.php");
	}
	else
	{
		echo "Echec de suppression";
	}
 ?>