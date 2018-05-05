	<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','');
$base  = 'linkedin'; 
$name=$_GET['name'];
$password=$_GET['password'];
?>
<html>
<title>
Node in 
</title>
<head>
    </head>
<link type="text/css" rel="stylesheet" href="profil2.css" />
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
     <div class="bodyx">
   


<form method="post" action="envoyer.php" >
<div id="form4" class="bodyxx">
    <table>
        
        <label>Envoyer un message</label>
        <tr> <td> <p>  </p>  </td>      </tr>
        <tr> <td> <p>  </p>  </td>      </tr>
        <tr><td><label>User 1 </label></td>
        <td><textarea type="text" id="box" name="user1"></textarea></td></tr>
      
         <tr><td><label>User 2 </label></td>
             <td><textarea type="text" id="box" name="user2"></textarea></td></tr>
      
        <tr><td><label>Message</label></td>
             <td><textarea type="text" id="box" name="messages"></textarea></td></tr>
  
        <tr><td></td><td> <input type="submit" id="button3" value="Envoyer"/> </td></tr>
        
            <td><p>     </p></td>
    </table>    
     </div>
    
</form>

<br><hr>


        </div>
		

		
		
		
	
</body>
</html>   
   