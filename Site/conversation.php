<html>
<title>
Node in 
</title>
<head>
    <link type="text/css" rel="stylesheet" href="profil2.css" />
    

    
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
    <form method="post" action="envoyer.php" >
<div id="form4" class="bodyxx" >
 
        
<?php
//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','');
$base  = 'linkedin4'; 




  // CONNEXION
 $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(error); //Connexion
 
 $db_found = mysqli_select_db($db_handle, $base)or die(error2); 

  if ($db_found) {
	
	$sql = "SELECT sms,nom FROM messages,personne WHERE messages.user1=personne.numero AND user1='1' AND user2='2' ORDER BY datheure DESC"; 
	$result = mysqli_query($db_handle, $sql);
	
	//$donn=mysqli_fetch_array($result,MYSQLI_ASSOC);
while (	$donn=mysqli_fetch_assoc($result)) {
	// on affiche les résultats
 echo 'Messages : '.$donn['sms'].'<br />';
    echo 'Nom : '.$donn['nom'].'<br />';
/*echo 'Education : '.$donn['education'].'<br />';
    echo  'Langues : ' .$donn['langue'].'<br />';
       echo  'Competences : ' .$donn['competences'].'<br />';
        echo  'Description : ' .$donn['description'].'<br />';*/
     
    

    
}
      

  }
else { 
	echo "Database not found"; 
}   
  
?>
    
     <a href="messages.html">Retour</a>
       
    </div>
    </form>
   
</body>

</html>       
 
    
    
