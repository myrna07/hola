<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','');
$base  = 'linkedin2'; 
$name=$_GET['name'];
$password=$_GET['password'];

//Récupération des id 

$description=isset($_POST["description_profil"])?$_POST["description_profil"]:"";
$education=isset($_POST["education"])?$_POST["education"]:"";
$competences=isset($_POST["competences"])?$_POST["competences"]:"";
$langue=isset($_POST["langue"])?$_POST["langue"]:"";
 // CONNEXION
 $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(error); //Connexion
 
 $db_found = mysqli_select_db($db_handle, $base)or die(error2);

	$sql1= "SELECT numero FROM personne WHERE pseudo='$name'";
	$result1 = mysqli_query($db_handle, $sql1);
	
		
	
	$data1 = mysqli_fetch_assoc($result1);
	$personne=$data1['numero'];
	 

 

  if ($db_found) {
	
	$sql = "UPDATE utilisateur SET description = '$description',education = '$education', competences ='$competences',langue = '$langue' WHERE numero='$personne'"; 
	$result = mysqli_query($db_handle, $sql);
	
	

    // on affiche le résultat pour le visiteur 
   

 }
else { 
	echo "Database not found"; 
}    header("Location: profil.php?name=".$name."&password=".$password);
  
?>