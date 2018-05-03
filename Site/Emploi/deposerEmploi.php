<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','root');
$base  = 'linkedin'; 

//Récupération des id 
$titre=isset($_POST["titre"])?$_POST["titre"]:"";
$categorie=isset($_POST["categorie"])?$_POST["categorie"]:"";
$societe=isset($_POST["societe"])?$_POST["societe"]:"";
$domaine=isset($_POST["domaine"])?$_POST["domaine"]:"";
$description=isset($_POST["description"])?$_POST["description"]:"";



  // CONNEXION
 $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(error); //Connexion
 
 $db_found = mysqli_select_db($db_handle, $base)or die(error2);

  if ($db_found) {
	
	$sql = "INSERT INTO emploi (societe, categorie, description, domaine, titre) VALUES ('$societe','$categorie', '$description', '$domaine', '$titre')"; 
	$result = mysqli_query($db_handle, $sql);
	
	

    // on affiche le résultat pour le visiteur 
    header("Location: ok.html");

  }
else { 
	echo "Database not found"; 
}   
  
?>