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
<link type="text/css" rel="stylesheet" href="accueil.css" />

</head>
<body style="height:3000px">



<div class="header">
<div id="img1" class="header" >
    <a href="accueil.html"><img src="loloentier.png" id="img1" /></a></div>

    <div id="imgdeco" class="header" >
    <a href="site.html"><img src="deco.png" id="imgdeco" /></a></div>
<ul class="niveau1">
    
     <li><a  href="accueil.html"id="Accueil" class="header">Accueil</a></li>
	  <li><a href="suggestion1.html" id="Reseau" class="header">Reseau</a></li>
	  <li><a href="#"id="Notifications" class="header">Notifications</a></li>
	  <li><a href="deposerEmploi.html"id="Emplois" class="header">Emplois</a></li>
      <li><a href="#"id="Messages" class="header">Messages</a></li>
      <li><a href="profil.html"id="Moi" class="header">Moi</a></li> 
    <li><a href="admin.html"id="Admin" class="header">Admin</a></li>
         
   

   </ul>
    
     </div>
<div class="bodyx">

<form method="post" >
  
<div id="form3" class="bodyx">
  
   
	
<form method="post" action="exprime.php" >


			<div id="postboxpos" class="post"><td> <select name="acces" id="box">
			<option value = "public">public</option>
            <option value = "prive">prive</option></select></div>
			
<div id="postboxpos" class="post"><textarea placeholder="Exprimez vous ...... !" id="postbox" name= "exprime" type="text"></textarea></div>
<div id="postpos" class="post"><input type="submit" id="texte1" value="Partager"/></div>

</form> 

<form method="post" action="sql_editer.php" enctype="multipart/form-data">
   <div id="postboxpos3" class="post"><input type="submit" id="texte" value="Photo"/>
     <input type="file" name="pdp" id="texte" /><br /></div>
     <br />

<div id="postboxpos2" class="post"><input type="submit" id="texte" value="Texte"/></div>
<div id="postboxpos4" class="post"><input type="submit" id="texte" value="Video"/></div>

    </form>
	
	</div>
 
<?php

$personne=1; //On est sur cet utilisateur 


if ($db_found) {
	
		$sql = "SELECT publication.photo, nom, prenom, data, acces, heure, texe, commentaire FROM publication, amis, personne WHERE publication.utilisateur=amis.ami AND amis.ami=personne.numero AND amis.utilisateur='$personne' ORDER BY data DESC";

	$result = mysqli_query($db_handle, $sql);
	
	while ($data = mysqli_fetch_assoc($result)){
		echo " ".$data['data'].'<br>'; 
		echo " ".$data['heure'].'<br>';
		echo " ".$data['acces'].'<br>';
		echo " ".$data['nom'].'<br>'; 
		echo " ".$data['prenom'].'<br>'; 
		echo " ".$data['texe'].'<br>'; 
		$photo=$data['photo'];
	    echo '<img src="data:photo/png;base64,'.base64_encode($data['photo'] ) .'" />';
		echo " ".$data['commentaire'].'<br>'; 
		
		
		?>       
        
        

		
		<form method="post" action="commenter.php" >

    <table>
		<img src="like.png" onclick="this.src='like2.jpg'">
        <td><textarea type="text" name="commenter" rows="3" cols="40"> </textarea></td>
		<tr><td></td><td>  <input type="submit" id="button3" value="Commenter"/> </td></tr>
            <td><p>     </p></td>
		 
		  </table>    
        
</form>
		 
 <?php
}
  }
else { 
	echo "Database not found"; 
}   

?> 

        
        
        
      
<br><hr>
<div id="formG" class="bodyx">
    <h1> ACCUEIL</h1>
    <div id="img2" class="bodyx" >
    <a href="test.html"><img src="vide.png" id="img2" /></a>
   
    <div class="trop" > 
        <br>
    <li><a href="#" class="trop">MON PROFIL</a></li>
    <li><a href="#"class="trop">MESSAGES</a></li>
    <li><a href="#"class="trop">NOTIFICATIONS</a></li></div>
        
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
    </form></div>
        
</body>
</html>