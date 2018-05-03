<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','');
$base  = 'linkedin2'; 

//$description=isset($_POST["description"])?$_POST["description"]:"";
//$hola=$_FILES['pdp']['pdp'];
//header("Content-type: image/png");
//readfile($_FILES['file']['tmp_name']);
// CONNEXION

 $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(error); //Connexion
 
 $db_found = mysqli_select_db($db_handle, $base)or die(error2);

  if ($db_found) {
	
//	$sql = "UPDATE utilisateur SET photo = '$hola' WHERE numero='2'"; 
      $sql = "UPDATE utilisateur SET description = '2' WHERE numero='1'"; 
	$result = mysqli_query($db_handle, $sql);
	
	

    // on affiche le résultat pour le visiteur 
    header("Location: ok.html");

  }
else { 
	echo "Database not found"; 
}   
  
?>