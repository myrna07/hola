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
<body>
 
 <div class = "header1" > 
     <ul>
      <li><a href="#"id="Accueil" class="header1">Accueil</a></li>
	  <li><a href="#" id="Reseau" class="header1">Reseau</a></li>
	  <li><a href="#"id="Notifications" class="header1">Notifications</a></li>
	  <li><a href="#"id="Emplois" class="header1">Emplois</a></li>
      <li><a href="#"id="Messages" class="header1">Messages</a></li>
      <li><a href="#"id="Moi" class="header1">Moi</a></li>  
         
    <a href="Site.html"><img src="deco.png" id="img1" /></a>

   </ul>
    
   </div>

   
   
  

   
   
   

<div class="bodyx">
   
 
   
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
		
		?>
		 <input type="submit" id="button3" value="Postuler"/> 
		 
		 <?php
		echo "_______________________________________________________".'<br>';
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