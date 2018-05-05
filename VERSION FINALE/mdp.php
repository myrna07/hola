<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','');
$base  = 'linkedin'; 

//Récupération des id 
$nom=isset($_POST["identifiant"])?$_POST["identifiant"]:"";
$mail=isset($_POST["mail"])?$_POST["mail"]:"";

  // CONNEXION
 $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(error); //Connexion
 
 $db_found = mysqli_select_db($db_handle, $base)or die(error2);

     
  // VERIFICATION QUE LE PSEUDO ET MDP EXISTENT 
$sql  = "SELECT * FROM personne WHERE mail = '".$mail."' AND identifiant = '".$pseudi."'";
    $res  = mysqli_query($db_handle, $sql); //execution de la requete
    
    //ON TEST SI LES CHAMPS EXISTENT      
  if(mysqli_num_rows($res) != 0) {
	mail("Voici vos informations pour vous connecter à NODE IN"$pseudo, $mdp );
} else {
	echo "Le pseudo ou le mot de passe est incorrect.";
      
    
}

  header("site.html");
?>
