$code = 2015;
$code2 =  isset($_POST["code"])?$_POST["code"]:"";
if ($code!=$code2)
{ echo "vous n'êtes pas administrateur"; 
 
 echo '<a href= "accueil.php"><label type="text" >Retour a accueil</label></a>';
}else
{<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','');
$base  = 'linkedin'; 

//Récupération des id 
$nom=isset($_POST["nom"])?$_POST["nom"]:"";
$prenom=isset($_POST["prenom"])?$_POST["prenom"]:"";
$mail=isset($_POST["mail"])?$_POST["mail"]:"";
$identifiant=isset($_POST["identifiant"])?$_POST["identifiant"]:"";


$code = 2015;
$code2 =  isset($_POST["code"])?$_POST["code"]:"";
if ($code!=$code2)
{ echo "vous n'êtes pas administrateur"; 
 
 echo '<a href= "accueil.php"><label type="text" >Retour a accueil</label></a>';
}else
{
  // CONNEXION
 $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(error); //Connexion
 
 $db_found = mysqli_select_db($db_handle, $base)or die(error2);

  if ($db_found) {
	
	$sql1 = "SELECT numero FROM personne WHERE nom='$nom' AND prenom='$prenom' AND pseudo='$identifiant'"; 
	$result = mysqli_query($db_handle, $sql1);
	
		while ($data = mysqli_fetch_assoc($result)){
		$num=$data['numero'];
		
		}
	
	$sql = "DELETE FROM personne WHERE nom='$nom' AND prenom='$prenom' AND pseudo='$identifiant'"; 
	$result = mysqli_query($db_handle, $sql);
	
	
	$sql2 = "DELETE from utilisateur WHERE numero='$num'"; 
	    $result2 = mysqli_query($db_handle, $sql2);
		
	
	
	   // on insère les informations du formulaire dans la table 

    // on affiche le résultat pour le visiteur 
    header("Location: accueil.html");

  }
else { 
	echo "Database not found"; 
} }  
  
?>