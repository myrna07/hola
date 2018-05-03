<html>
<title>
Node in 
</title>
<head>
    <link type="text/css" rel="stylesheet" href="profil.css" />
    

    
    </head>
<body >
    <div>    <label type="text" ></label></div>



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
    <div class = "header2"></div>
    <div class = "droite"></div>
    <div class = "couv"><img src ="loli.png" width ="850px"/></div>
    <div class = "profil"></div>
    <div class = "profilpic"><img src ="profil.png" height ="140px"/></div>
    <div class="bodyx" >

<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','');
$base  = 'linkedin2'; 




  // CONNEXION
 $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(error); //Connexion
 
 $db_found = mysqli_select_db($db_handle, $base)or die(error2);

  if ($db_found) {
	
	$sql = "SELECT * FROM utilisateur WHERE numero='2'"; 
	$result = mysqli_query($db_handle, $sql);
	
	//$donn=mysqli_fetch_array($result,MYSQLI_ASSOC);
while (	$donn=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	// on affiche les résultats
 
	echo 'Education : '.$donn['education'].'<br />';
    echo  'Langues : ' .$donn['langue'].'<br />';
       echo  'Competences : ' .$donn['competences'].'<br />';
        echo  'Description : ' .$donn['description'].'<br />';
     
   /* <form method="post" action="formbis.php" enctype="multipart/form-data">
        <label for="pdc">Photo de couverture :</label><br />
        <input type="file" name="pdc" id="pdc" /><br />
        <label for="pdp">Photo de profil :</label><br />
        <input type="file" name="pdp" id="pdp" /><br />
</form>*/
}
      
 

  }
else { 
	echo "Database not found"; 
}   
  
?>
    </div>
  
    <a href="form2.html"><img src="modif.jpg" id="img2" /></a>
    <a href="form.html"><img src="modif.jpg" id="img3" /></a>

    
</body>

</html>       
 
    
    
