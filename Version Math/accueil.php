	<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','root');
$base  = 'linkedin'; 

  // CONNEXION
 $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(error); //Connexion
 
 $db_found = mysqli_select_db($db_handle, $base)or die(error2);

        


$personne=1; //On est sur cet utilisateur 


if ($db_found) {
	
		$sql = "SELECT publication.photo, nom, prenom, data, acces, heure, texe, commentaire FROM publication, amis, personne WHERE publication.utilisateur=amis.ami AND amis.ami=personne.numero AND amis.utilisateur='$personne' ORDER BY data DESC";

	$result = mysqli_query($db_handle, $sql);
	
	while ($data = mysqli_fetch_assoc($result)){
		echo " ".$data['data'].'<br>'; 
		echo " ".$data['heure'].'<br>';
		echo " ".$data['acces'].'<br>';
		echo " ".$data['nom'].'<br>'; 
		echo " ".$data['prenom'].'<br>'; 
		echo " ".$data['texe'].'<br>'; 
		$photo=$data['photo'];
	    echo '<img src="data:photo/png;base64,'.base64_encode($data['photo'] ) .'" />';
		echo " ".$data['commentaire'].'<br>'; 
		

}
  }
else { 
	echo "Database not found"; 
}   

?> 