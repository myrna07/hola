	<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','root');
$base  = 'linkedin'; 

  // CONNEXION
 $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(error); //Connexion
 
 $db_found = mysqli_select_db($db_handle, $base)or die(error2);



  if ($db_found) {
	
	$sql = "SELECT * FROM emploi";
	$result = mysqli_query($db_handle, $sql);
	
	while ($data = mysqli_fetch_assoc($result)){
		echo "Titre: ".$data['titre'].'<br>'; 
		echo "Categorie: ".$data['categorie'].'<br> ';
		echo "Societe: ".$data['societe'].' <br>';
		echo "Domaine: ".$data['domaine'].'<br> ';
		echo "Description: ".$data['description'].'<br>';
		

		echo "______________________________________________________________________________".'<br>';
	}

    

  }
else { 
	echo "Database not found"; 
}   
  
?>