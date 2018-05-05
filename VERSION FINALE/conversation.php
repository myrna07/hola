	<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','');
$base  = 'linkedin4'; 
$name=$_GET['name'];
$password=$_GET['password'];
?>

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
     <li><a  id="Accueil" class="header" href=<?php echo "accueil.php?name=".$name."&password=".$password; ?>>Accueil</a></li>
	  <li><a id="Reseau" class="header" href=<?php echo "suggestion1.php?name=".$name."&password=".$password; ?>>Reseau</a></li>
	  <li><a id="Notifications" class="header" href=<?php echo "accueil.php?name=".$name."&password=".$password; ?>>Notifications</a></li>
	  <li><a id="Emplois" class="header" href=<?php echo "deposerEmploi.php?name=".$name."&password=".$password; ?>>Emplois</a></li>
      <li><a id="Messages" class="header" href= <?php echo "messages.php?name=".$name."&password=".$password; ?>>Messages</a></li>
      <li><a id="Moi" class="header" href=<?php echo "profil.php?name=".$name."&password=".$password; ?>>Moi</a></li> 
    <li><a id="Admin" class="header" href=<?php echo "admin3.php?name=".$name."&password=".$password; ?>>Admin</a></li>
    <a href="Site.html"><img src="deco.png" id="img1" /></a>
   </ul>
   </div>
    <form method="post" action="envoyer.php" >
<div id="form4" class="bodyxx" >
 
        
<?php
//VARIABLES DE CONNEXION 


  // CONNEXION
 $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(error); //Connexion
 
 $db_found = mysqli_select_db($db_handle, $base)or die(error2); 

  if ($db_found) {
	
	$sql = "SELECT datheure, sms,nom FROM messages,personne WHERE messages.user1=personne.numero AND user1='1' AND user2='2' ORDER BY datheure DESC"; 
	$result = mysqli_query($db_handle, $sql);
	
	//$donn=mysqli_fetch_array($result,MYSQLI_ASSOC);
while (	$donn=mysqli_fetch_assoc($result)) {
	// on affiche les résultats
  echo 'Date et heure : ' .$donn['datheure'].'<br />';
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
    
     <a href=<?php echo "messages.php?name=".$name."&password=".$password; ?>>Retour</a>
       
    </div>
    </form>
   
</body>

</html>       
 
    
    
