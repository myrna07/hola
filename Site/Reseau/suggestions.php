<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','root');
$base  = 'linkedin'; 

  // CONNEXION
 $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(error); //Connexion
 
 $db_found = mysqli_select_db($db_handle, $base)or die(error2);


$nom=isset($_POST["amis"])?$_POST["amis"]:"";

if ($db_found) {
	
	$sql = "SELECT nom, prenom FROM personne WHERE nom='$nom'"; 
	$result = mysqli_query($db_handle, $sql);
	
	
while ($data = mysqli_fetch_assoc($result)){
	

		echo "Nom: ".$data['nom'].'<br>'; 
		echo "Prenom: ".$data['prenom'].'<br> ';
 

  }
}
else { 
	echo "Database not found"; 
}   

?>			   
        
	