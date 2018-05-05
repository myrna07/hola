<html>
<title>
Node in 
</title>
<head>
    </head>
<link type="text/css" rel="stylesheet" href="profil.css" />
    <body >

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
              
  
   
    <div class="bodyx"></div>
  <form action = "formbis.php" method="POST" enctype="multipart/form-data">
              
        <label for="pdp">Photo de profil :</label><br />
        <input type="file" name='pdp' id="pdp" /><br />
        
        <input type="submit" value="enregistrer" name="enregistrer "/>
</form>

</body>

    
</html>




 