	<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','');
$base  = 'linkedin'; 
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
    <a href="accueil.html"><img src="loloentier.png" id="img1" /></a></div>

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


		 <img src="postuler1.jpg" onclick="this.src='postuler2.jpg'">
		 

		<?php 
		
		echo "______________________________________________________________________________".'<br>';
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
<div id="formG" class="bodyx">
   
    <h1> EMPLOIS</h1>

    <div class="trop" > 
        
    <li><a href="deposerEmploi.html" class="trop">DEPOSER UNE ANNONCE</a></li>
    <li><a href="rechercheEmploi.html"class="trop">RECHERCHER UN EMPLOI</a></li>
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
     
     
     
        </div> 	
		
		
		
</body>
</html>