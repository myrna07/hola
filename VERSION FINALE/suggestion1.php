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
<title>NodeIn</title>
<head>
<link type="text/css" rel="stylesheet" href="accueil.css" />

</head>
<body style="height:3000px">



<div class="header">
<div id="img1" class="header" >
    <a href="accueil.php"><img src="loloentier.png" id="img1" /></a></div>

    <div id="imgdeco" class="header" >
    <a href="site.html"><img src="deco.png" id="imgdeco" /></a></div>
<ul class="niveau1">
     <li><a  id="Accueil" class="header" href=<?php echo "accueil.php?name=".$name."&password=".$password; ?>>Accueil</a></li>
	  <li><a id="Reseau" class="header" href=<?php echo "suggestion1.php?name=".$name."&password=".$password; ?>>Reseau</a></li>
	  <li><a id="Notifications" class="header" href=<?php echo "accueil.php?name=".$name."&password=".$password; ?>>Notifications</a></li>
	  <li><a id="Emplois" class="header" href=<?php echo "deposerEmploi.php?name=".$name."&password=".$password; ?>>Emplois</a></li>
      <li><a id="Messages" class="header"  href=<?php echo "messages.php?name=".$name."&password=".$password; ?>>Messages</a></li>
      <li><a id="Moi" class="header" href=<?php echo "profil.php?name=".$name."&password=".$password; ?>>Moi</a></li> 
    <li><a id="Admin" class="header" href=<?php echo "admin3.php?name=".$name."&password=".$password; ?>>Admin</a></li>
         
   

   </ul>
    
     </div>
<div class="bodyx">

<form method="post" action="suggestion.php" >
<div id="form3" class="bodyx">


		 <div id="searchbar">
     
               <input id="box" type="text" name="amis"/>
               <input type="submit" id="button3" value="Rechercher"/>   
			   
	<?php 




if ($db_found) {
	
	$sql = "SELECT  photo,nom, prenom FROM personne "; 
	$result = mysqli_query($db_handle, $sql);
	
	
while ($data = mysqli_fetch_assoc($result)){
		
		$photo=$data['photo'];
	    echo '<img src="data:photo/png;base64,'.base64_encode($data['photo'] ) .'" />';
		echo "Nom: ".$data['nom'].'<br>'; 
		echo "Prenom: ".$data['prenom'].'<br> ';
		
		}
}
		else { 
	echo "Database not found"; 
}   
 
		 
		 
		
?>	
		       

			               
		  </div> 
		 


    </div>

       
      
             
    
</form>
<br><hr>
<div id="formG" class="bodyx">
   
    <h1> RESEAU</h1>

    <div class="trop" > 
        
    <li><a  class="trop" href=<?php echo "suggestion1.php?name=".$name."&password=".$password; ?>>TOUS</a></li>
<li><a class="trop" href=<?php echo "amis.php?name=".$name."&password=".$password; ?>>MES AMIS</a></li>
  </div>
        
</div> 
    
  
		

 <div id="formD" class = "bodyx">
     
      <div id="imgp1" class="bodyx" >
     <a href="http://www.ece.fr/ecole-ingenieur/"><img src="pub1.png" id="imgp1"/></a></div>
     <div id="imgp2" class="bodyx" >
    <a href="https://fr-fr.facebook.com"><img src="pub2.png" id="imgp2"/></a></div>
    <div id="imgp3" class="bodyx" >
        <a href="http://www.ece.fr/ecole-ingenieur/"><img src="pub3.png"  id="imgp3"/></a></div>
     <div id="imgp4" class="bodyx" >
         <a href="https://www.youtube.com"><img src="pub4.png" id="imgp4"/></a></div>
     
     <div id="imgp5" class="bodyx" > 
         <a href="http://www.ece.fr/ecole-ingenieur/"><img src="pub5.png" id="imgp5"/></a></div>
     
     <div id="imgp1" class="bodyx" >
     <a href="http://www.ece.fr/ecole-ingenieur/"><img src="pub1.png" id="imgp1"/></a></div>
     
     <div id="imgp2" class="bodyx" >
    <a href="https://fr-fr.facebook.com"><img src="pub2.png" id="imgp2"/></a></div>
    
        
        <div id="imgp3" class="bodyx" >
        <a href="http://www.ece.fr/ecole-ingenieur/"><img src="pub3.png"  id="imgp3"/></a></div>
     <div id="imgp4" class="bodyx" >
         <a href="https://www.youtube.com"><img src="pub4.png" id="imgp4"/></a></div>
     
     <div id="imgp5" class="bodyx" > 
         <a href="http://www.ece.fr/ecole-ingenieur/"><img src="pub5.png" id="imgp5"/></a></div>
    
    
    <div id="imgp1" class="bodyx" >
     <a href="http://www.ece.fr/ecole-ingenieur/"><img src="pub1.png" id="imgp1"/></a></div>
     
         
         </div> 
     
     
     <div class="body1">
<div id="conclu1" class="body1">Copyright by NODEIN TEAM / Audrey Bacquart / Mathilde Hoche / Myrna El Awady <br><hr>Version 1.0 / Mai 2018</div></div>

        </div> 	
		
		
		
</body>
</html>