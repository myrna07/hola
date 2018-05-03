<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','');
$base  = 'linkedin4'; 



//Récupération des id 

$user1=isset($_POST["user1"])?$_POST["user1"]:"";
$user2=isset($_POST["user2"])?$_POST["user2"]:"";
$datheure=isset($_POST["datheure"])?$_POST["datheure"]:"";
$messages=isset($_POST["messages"])?$_POST["messages"]:"";



  // CONNEXION
 $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(error); //Connexion
 
 $db_found = mysqli_select_db($db_handle, $base)or die(error2);

  if ($db_found) {
	
	$sql = "INSERT INTO messages(user1,user2,datheure,sms) VALUES ('$user1','$user2','$datheure','$messages')"; 
	$result = mysqli_query($db_handle, $sql);
	
	

    // on affiche le résultat pour le visiteur 
    header("Location: conversation.php");

  }
else { 
	echo "Database not found"; 
}   
  
?>