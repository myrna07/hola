<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','');
$base  = 'linkedin2'; 
$name=$_GET['name'];
$password=$_GET['password'];
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
    <li><a  id="Accueil" class="header" href=<?php echo "accueil.php?name=".$name."&password=".$password; ?>>Accueil</a></li>
	  <li><a id="Reseau" class="header" href=<?php echo "suggestion1.php?name=".$name."&password=".$password; ?>>Reseau</a></li>
	  <li><a id="Notifications" class="header" href=<?php echo "accueil.php?name=".$name."&password=".$password; ?>>Notifications</a></li>
	  <li><a id="Emplois" class="header" href=<?php echo "deposerEmploi.php?name=".$name."&password=".$password; ?>>Emplois</a></li>
      <li><a id="Messages" class="header" href= <?php echo "messages.php?name=".$name."&password=".$password; ?>>Messages</a></li>
      <li><a id="Moi" class="header" href= <?php echo "profil.php?name=".$name."&password=".$password; ?>>Moi</a></li> 
    <li><a id="Admin" class="header" href=<?php echo "admin3.php?name=".$name."&password=".$password; ?>>Admin</a></li>
         
    <a href="Site.html"><img src="deco.png" id="img1" /></a>

   </ul>
    
      </div>
      
          
          <div class="bodyx">
   <div class=droite>
    <h1>MON RESEAU</h1>
     </div>

<div id="form3" class="bodyx">
        
     <?php
	 $name=$_GET['name'];
$password=$_GET['password'];
//if ($db_found) {
	
	$sql1= "SELECT numero FROM personne WHERE pseudo='$name'";
	$result1 = mysqli_query($db_handle, $sql1);
	
		
	
	$data1 = mysqli_fetch_assoc($result1);
	$personne=$data1['numero'];
	 

  if ($db_found) {
	
	
	$sql = "SELECT  photo,nom,prenom FROM personne, amis WHERE personne.numero=amis.ami AND amis.utilisateur='$personne'";
	$result = mysqli_query($db_handle, $sql);
	
	while ($data = mysqli_fetch_assoc($result)){
	$photo=$data['photo'];
	 echo '<img src="data:photo/png;base64,'.base64_encode($data['photo'] ) .'" />';
		echo "Nom: ".$data['nom'].'<br>'; 
		echo "Prenom: ".$data['prenom'].'<br>';
	
	}
  }
else { 
	echo "Database not found"; 
}   
     
          ?> 
		  
		
		  </div>  </div>    
     
     
 
    
    
</body>
</html>