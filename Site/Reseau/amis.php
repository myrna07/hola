<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','root');
$base  = 'linkedin'; 

  // CONNEXION
 $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(error); //Connexion
 
 $db_found = mysqli_select_db($db_handle, $base)or die(error2);

?>




<html>
<head>
  <title> Accueil </title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="amis.css">
 
    </head>
<body>
    
 <div class = "header1" > 
     <ul>
     <li><a href="#" id="Accueil" class="header1">Accueil</a></li>
	  <li><a href="#" id="Reseau" class="header1">Reseau</a></li>
	  <li><a href="#"id="Notifications" class="header1">Notifications</a></li>
	  <li><a href="#"id="Emplois" class="header1">Emplois</a></li>
      <li><a href="#"id="Messages" class="header1">Messages</a></li>
      <li><a href="#"id="Moi" class="header1">Moi</a></li>  
         
    <a href="Site.html"><img src="deco.png" id="img1" /></a>

   </ul>
    
      </div>
      
          
          <div class="bodyx">
   <div class=droite>
    <h1>MON RESEAU</h1>
     </div>

<div id="form3" class="bodyx">
    

                     
                
     <?php

  if ($db_found) {
	
	
	$sql = "SELECT nom,prenom FROM personne";
	$result = mysqli_query($db_handle, $sql);
	
	while ($data = mysqli_fetch_assoc($result)){
		echo "Nom: ".$data['nom'].'<br>'; 
		echo "Prenom: ".$data['prenom'].'<br>';
	
	}
  }
else { 
	echo "Database not found"; 
}   
     
          ?> 
		  
		  </form>
               
		  </div>  </div>    
     
     
   </div>
    
    
</body>
</html>