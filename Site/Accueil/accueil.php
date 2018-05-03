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
<head>
  <title> Accueil </title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="accueil1.css">
 
    </head>
<body>
    

     
<div class = "header1" > 
    
    <div id="img0" class="header1" >
    <a ><img src="logo.png" id="img0" /></a></div>
     <ul class="niveau1">
     <li><a href="accueil.html" id="Accueil" class="header1">Accueil</a></li>
	  <li><a href="amis.php" id="Reseau" class="header1">Reseau</a></li>
	  <li><a href="#"id="Notifications" class="header1">Notifications</a></li>
	  <li><a class="emplois" href="deposerEmploi.html"id="Emplois" class="header1">Emplois</a></li>
        
        <ul class="niveau2">
          <li><a href="#">Deposer un emploi</a></li>
          <li><a href="#">Rechercher un emploi</a></li>
          
        </ul>
      <li><a href="#"id="Messages" class="header1">Messages</a></li>
      <li><a href="profil.html"id="Moi" class="header1">Moi</a></li>  
         
    <a href="Site/Site.html"><img src="deco.png" id="img1" /></a>

   </ul>
    
   </div>
    
   

    <div class=menu>
        
    
<div class=droite>
    <h1>ACCUEIL</h1>
    <div id="img2" class="droite" >
    <a href="test.html"><img src="vide.png" id="img2" /></a>
        </div>
    <li><a href="Site.html">MON PROFIL</a></li>
    <li><a href="#">MESSAGES</a></li>
    <li><a href="#">NOTIFICATIONS</a></li>

<div class = pub>
    <a href="Site.html"><img src="pub1.png" id="imgp1" /></a>
    <a href="Site.html"><img src="pub2.png" id="imgp2" /></a>
    <a href="Site.html"><img src="pub3.png" id="imgp3" /></a>
    <a href="Site.html"><img src="pub4.png" id="imgp4" /></a>
    <a href="Site.html"><img src="pub5.png" id="imgp5" /></a>
        </div>
          
    <div class="post">

	
<form method="post" action="exprime.php" >


			<div id="postboxpos" class="post"><td> <select name="acces" id="box">
			<option value = "public">public</option>
            <option value = "prive">prive</option></div>
			
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
  
</div>
    </div>
	
	<div id="form3" class="bodyx" >

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
        <td><textarea type="text" name="commenter" rows="3" cols="40"> </textarea></td></tr>
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

    </div>


</body>
</html>
