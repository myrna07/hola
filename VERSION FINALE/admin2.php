<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','');
$base  = 'linkedin'; 

//Récupération des id 
$nom=isset($_POST["nom"])?$_POST["nom"]:"";
$prenom=isset($_POST["prenom"])?$_POST["prenom"]:"";
$genre=isset($_POST["Genre"])?$_POST["Genre"]:"";
$naissance=isset($_POST["naissance"])?$_POST["naissance"]:"";
$mail=isset($_POST["mail"])?$_POST["mail"]:"";
$identifiant=isset($_POST["identifiant"])?$_POST["identifiant"]:"";
$pays=isset($_POST["pays"])?$_POST["pays"]:"";
$domaine=isset($_POST["domaine"])?$_POST["domaine"]:"";
$mdp=isset($_POST["password"])?$_POST["password"]:"";

$code = 2015;
$code2 =  isset($_POST["code"])?$_POST["code"]:"";
if ($code!=$code2)
{ echo "vous n'êtes pas administrateur"; 
 
 echo '<a href= "accueil.php"><label type="text" >Retour a accueil</label></a>';
}else
{
  // CONNEXION
 $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(error); //Connexion
 
 $num=3;
 $db_found = mysqli_select_db($db_handle, $base)or die(error2);

  if ($db_found) {
	
	$sql = "INSERT INTO utilisateur (numero, pays, domaine) VALUES ('$num', '$pays','$domaine')"; 
	$result = mysqli_query($db_handle, $sql);
	
		
	$sql2 = "INSERT INTO personne (numero, nom, prenom, mail, pseudo, mdp, naissance) VALUES ('$num', '$nom','$prenom','$mail','$identifiant','$mdp','$naissance')"; 
	$result2 = mysqli_query($db_handle, $sql2);
	
	   // on insère les informations du formulaire dans la table 

    // on affiche le résultat pour le visiteur 
    header("Location: accueil.php");

  }
else { 
	echo "Database not found"; 
}   
}
 //  header("Location: accueil.php");   
    
?>