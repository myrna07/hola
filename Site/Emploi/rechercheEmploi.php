	<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','');
$base  = 'linkedin'; 

  // CONNEXION
 $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(error); //Connexion
 
 $db_found = mysqli_select_db($db_handle, $base)or die(error2);

?>



<html>
<title>NodeIn</title>
<head>
<link type="text/css" rel="stylesheet" href="rechercheEmploi.css" />

</head>
<body style="height:815px">

<div class="headerx">
</div>

<div class="header">

</div>


<div class="bodyx">
   
<div id="img2" class="bodyx"><img src="fond2.png"/></div>

<div id="form3" class="bodyx">
    <table>
        
	<?php

  if ($db_found) {
	
	$sql = "SELECT * FROM emploi";
	$result = mysqli_query($db_handle, $sql);
	
	while ($data = mysqli_fetch_assoc($result)){
		echo "Titre: ".$data['titre'].'<br>'; 
		echo "Categorie: ".$data['categorie'].'<br> ';
		echo "Societe: ".$data['societe'].' <br>';
		echo "Domaine: ".$data['domaine'].'<br> ';
		echo "Description: ".$data['description'].'<br>';
	}

    

  }
else { 
	echo "Database not found"; 
}   
  
?>

    </table>    
     </div>
    
<br><hr>


        </div>
		

		
		
		
		
<div class="body1">
<div id="conclu1" class="body1">English UK....<br><hr>Leran more......</div></div>
</body>
</html>