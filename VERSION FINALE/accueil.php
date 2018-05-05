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
  
   
	
<form method="post" action="exprime.php" >

	<div id="postboxpos" class="post"><td> <select name="acces" id="box">
			<option value = "public">public</option>
            <option value = "privee">privee</option></div>
			
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
	
	

 
<?php

//$personne=1; //On est sur cet utilisateur 

$name=$_GET['name'];
$password=$_GET['password'];
//if ($db_found) {
	
	$sql1= "SELECT numero FROM personne WHERE pseudo='$name'";
	$result1 = mysqli_query($db_handle, $sql1);
	
		
	
	$data1 = mysqli_fetch_assoc($result1);
	$personne=$data1['numero'];
		if( mysqli_num_rows($result1) != 0)
	{
				echo "<script>alert('$personne');</script>";
		echo "<script>alert('found no result');</script>";

	}	
				echo " ".$data1['numero'].'';
		
echo "<script>alert(" . $personne . " 'coucou');</script>";

		$sql = "SELECT publication.photo, nom, prenom, data, acces, heure, texe, commentaire FROM publication, amis, personne WHERE publication.utilisateur=amis.ami AND amis.ami=personne.numero AND amis.utilisateur='$personne' ORDER BY data DESC";

	$result = mysqli_query($db_handle, $sql);
	
	while ($data = mysqli_fetch_assoc($result)){
		echo '<br/>';	echo '<br/>';	echo '<br/>';	echo '<br/>';	echo '<br/>';	echo '<br/>';	echo '<br/>';
		echo " ".$data['data'].''; 
		echo " ".$data['heure'].'';
		echo " ".$data['acces'].'<br>';
		 
		echo " ".$data['prenom'].' '; 
		echo " ".$data['nom'].''; echo '';
		echo " a partage :  ".$data['texe'].'<br>'; echo '';
		$photo=$data['photo'];
	    echo '<img src="data:photo/png;base64,'.base64_encode($data['photo'] ) .'" />';
		echo '<br/>';
		echo "Commentaires : ".$data['commentaire'].'<br>'; 
		
		
		?>       
        
<td></td>  <img src="LIKE.png" onclick="this.src='like.jpg'">
		
		<form method="post" action="commenter.php" >

    <table>
		
        <dd><td></td><td>  <dd><textarea type="text" name="commenter" rows="3" cols="40"> </textarea></dd></td>
		<tr><td></td><td> <dd><input type="submit" id="button3" value="Commenter"/></dd> </td></tr>
            <td><p>     </p></td>
			

		  </table>    
        
</form>

			        



 <?php

		
  }
//}
//else { 
//	echo "Database not found"; 
//}   

?> 

        
        		 		 </div>
        
   </div>     
     
      
             
    
</form>
<br><hr>
<div id="formG" class="bodyx">
    <h1> ACCUEIL</h1>
    <div id="img2" class="bodyx" >
    <a href="test.html"><img src="vide.png" id="img2" /></a>
   
    <div class="trop" > 
        <br>
    <li><a  class="trop" <?php echo "profil.php?name=".$name."&password=".$password; ?>>MON PROFIL</a></li>
    <li><a class="trop"  <?php echo "messages.php?name=".$name."&password=".$password; ?>>MESSAGES</a></li>
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
     
		   </div>

       
		
		
</body>
</html>