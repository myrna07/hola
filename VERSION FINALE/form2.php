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
    
 
  

  
     
   
  <form method="post" action = "form2bis.php" >

<div id="form3" class="bodyx">
    <table>
        
<label>Profil</label>
<tr> <td> <p>  </p>  </td>      </tr>
<tr> <td> <p>  </p>  </td>      </tr>
<tr><td><label>Description du profil</label></td>
    <td><textarea type="text" id="box2" name="description_profil" rows="100" cols="500"></textarea></td></tr>
<tr><td><label>Education</label></td>
    <td><textarea type="text" id="box2" name="education" rows="100" cols="500" ></textarea></td></tr>
<tr><td><label>Competences</label></td>
    <td><textarea type="text" id="box2" name="competences" rows="100" cols="500"></textarea></td></tr>
<tr><td><label>Langues parlees</label></td>
    <td><textarea type="text" id="box2" name="langue" rows="100" cols="500" ></textarea></td></tr>
<tr> <td> <p>  </p>  </td>      </tr>
<tr><td>  <input type="submit" value="enregistrer" /> </td></tr>
        
<tr> <td> <p>  </p>  </td>      </tr>
    </table>
      
   

        </div>
    </form>
        
</body>

</html>




 