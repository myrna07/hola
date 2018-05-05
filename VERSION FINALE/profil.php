<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','');
$base  = 'linkedin2'; 

$name=$_GET['name'];
$password=$_GET['password'];
?>

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
    <div class = "header2"></div>
    <div class = "droite"></div>
    <div class = "couv"><img src ="loli.png" width ="850px"/></div>
    <div class = "profil"></div>
    <div class = "profilpic"><img src ="profil.png" height ="140px"/></div>
    <div class="bodyx" >

<?php

//VARIABLES DE CONNEXION 

$name=$_GET['name'];
$password=$_GET['password'];

  // CONNEXION
 $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(error); //Connexion
 
 $db_found = mysqli_select_db($db_handle, $base)or die(error2);
	$sql1= "SELECT numero FROM personne WHERE pseudo='$name'";
	$result1 = mysqli_query($db_handle, $sql1);
	
		
	
	$data1 = mysqli_fetch_assoc($result1);
	$personne=$data1['numero'];
	 

//echo '<img src=" MyImages/loli.png " />' ;
  if ($db_found) {
	
	$sql = "SELECT education,langue,competences,description FROM utilisateur WHERE numero='$personne'"; 
	$result = mysqli_query($db_handle, $sql);
	
	//$donn=mysqli_fetch_array($result,MYSQLI_ASSOC);
while (	$donn=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	// on affiche les résultats
 
echo 'Education : '.$donn['education'].'<br />';
    echo  'Langues : ' .$donn['langue'].'<br />';
       echo  'Competences : ' .$donn['competences'].'<br />';
        echo  'Description : ' .$donn['description'].'<br />'; 
    // echo '<img src=" localhost : MyImages/loli.png " />' ;
//echo $photo=$donn['photo'];
//echo '<img src="localhost : C:/wamp64/www/GitHub/hola/Site/MyImages/loli.png />' ;
//'';base64,'.base64_encode($photo ) .'" />';
    
}
      
 

  }
else { 
	echo "Database not found"; 
}   
  
?>
  
         </div>
        <a href=<?php echo "form2.php?name=".$name."&password=".$password; ?>><img src="modif.jpg" id="img2" /></a>
    <a href=<?php echo "form.php?name=".$name."&password=".$password; ?>><img src="modif.jpg" id="img3" /></a>
   
  
   

    
</body>

</html>       
 
    
    
