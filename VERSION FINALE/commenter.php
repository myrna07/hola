<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','');
$base  = 'linkedin'; 

//Récupération des id 

$commenter=isset($_POST["commenter"])?$_POST["commenter"]:"";



  // CONNEXION
 $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(error); //Connexion
 
 $db_found = mysqli_select_db($db_handle, $base)or die(error2);

  if ($db_found) {
	
	$sql = "UPDATE publication SET commentaire='$commenter' WHERE utilisateur=2"; 
	$result = mysqli_query($db_handle, $sql);

    header("Location: accueil.php");

  }
else { 
	echo "Database not found"; 
}   
  
?>