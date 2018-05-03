<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','');
$base  = 'linkedin'; 





//$description=isset($_POST["description"])?$_POST["description"]:"";
$hola=$_FILES['video']['name'];


  // CONNEXION
 $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(error); //Connexion
 
 $db_found = mysqli_select_db($db_handle, $base)or die(error2);

  if ($db_found) {
	
	$sql = "UPDATE utilisateur SET description = '$description' WHERE numero='2'"; 
	$result = mysqli_query($db_handle, $sql);
	
	

    // on affiche le résultat pour le visiteur 
    header("Location: ok.html");

  }
else { 
	echo "Database not found"; 
}   
  
?>