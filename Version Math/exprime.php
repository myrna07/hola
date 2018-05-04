<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','root');
$base  = 'linkedin'; 

//Récupération des id 

$exprime=isset($_POST["exprime"])?$_POST["exprime"]:"";
$acces=isset($_POST["acces"])?$_POST["acces"]:"";
$utilisateur='1';
$date = date ("Y-m-d");
$heure = date ("H:i");


  // CONNEXION
 $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(error); //Connexion
 
 $db_found = mysqli_select_db($db_handle, $base)or die(error2);

  if ($db_found) {
	
	$sql = "INSERT INTO publication (texe, utilisateur, data, heure, acces) VALUES ('$exprime', '$utilisateur', '$date', '$heure', '$acces') "; 
	$result = mysqli_query($db_handle, $sql);

    header("Location: accueil.php");

  }
else { 
	echo "Database not found"; 
}   
  
?>