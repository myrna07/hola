<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','root');
$base  = 'linkedin'; 

//Récupération des id 
$name=isset($_POST["name"])?$_POST["name"]:"";
$password=isset($_POST["password"])?$_POST["password"]:"";


  // CONNEXION
 $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(error); //Connexion
 
 $db_found = mysqli_select_db($db_handle, $base)or die(error2);

     
  // VERIFICATION QUE LE PSEUDO ET MDP EXISTENT 
$sql  = "SELECT * FROM personne WHERE pseudo = '".$name."' AND mdp = '".$password."'";
    $res  = mysqli_query($db_handle, $sql); //execution de la requete
    
    //ON TEST SI LES CHAMPS EXISTENT      
  if(mysqli_num_rows($res) != 0) {
	header("Location: accueil.html");
} else {
	header("Location: Site.html");
}
?>