<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','');
$base  = 'netpro'; 

//Récupération des id 
$pseudo=isset($_POST["pseudo"])?$_POST["pseudo"]:"";
$mdp=isset($_POST["mdp"])?$_POST["mdp"]:"";


  // CONNEXION
 $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(error); //Connexion
 
 $db_found = mysqli_select_db($db_handle, $base)or die(error2);

     
  // VERIFICATION QUE LE PSEUDO ET MDP EXISTENT 
$sql  = "SELECT * FROM personne WHERE Pseudo = '".$pseudo."' AND Mdp = '".$mdp."'";
    $res  = mysqli_query($db_handle, $sql); //execution de la requete
    
    //ON TEST SI LES CHAMPS EXISTENT      
  if(mysqli_num_rows($res) != 0) {
	echo "Connexion reussie.";
} else {
	echo "Le pseudo ou le mot de passe est incorrect.";
}
?>