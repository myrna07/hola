<!DOCTYPE>
<?php

$name=$_GET['name'];
$password=$_GET['password'];
?>
<html>
<title>NodeIn</title>
<head>
<link type="text/css" rel="stylesheet" href="deposerEmploi1.css" />

</head>
<body style="height:600px">



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
      <li><a id="Messages" class="header" href= <?php echo "messages.php?name=".$name."&password=".$password; ?>>Messages</a></li>
      <li><a id="Moi" class="header" href=<?php echo "profil.php?name=".$name."&password=".$password; ?>>Moi</a></li> 
    <li><a id="Admin" class="header" href=<?php echo "admin3.php?name=".$name."&password=".$password; ?>>Admin</a></li>
         
   

   </ul>
    
     </div>
    



   

<div class="bodyx">
    
    

    
    

<form method="post" action="deposerEmploi2.php"  >
<div id="form3" class="bodyx">
    <table>
        
         <label>DEPOSER UNE OFFRE D'EMPLOI</label>
        <tr> <td> <p>  </p>  </td>      </tr>
        <tr> <td> <p>  </p>  </td>      </tr>
    <tr><td><label>Titre</label></td>
             <td><input type="text" id="box" name="titre"></td></tr>
      
          <tr><td><label>Categorie</label></td>
       <td> <select name="categorie" id="box1"  >
           <option value = "Selectionner votre categorie">Selectionner votre categorie</option>
            <option value = "Stage">Stage</option>
           <option value = "Apprentissage">Apprentissage</option>
           <option value = "CDD">CDD</option>
		    <option value = "CDI">CDI</option>
			
           </select></td></tr>
  
  
            <tr><td><label>Societe</label></td>
             <td><input type="text" id="box" name="societe"></td></tr>
        
          
      
              
			<tr><td><label>Domaine</label></td>
			<td> <select name="domaine" id="box1">
			<option value = "Selectionner votre domaine">Selectionner votre domaine</option>
            <option value = "Ingenieur">Ingenieur</option>
			<option value = "Journaliste">Journaliste</option>
			<option value = "Medecin">Medecin</option>
		    <option value = "Commercial">Commercial</option>
			<option value = "Artisan">Artisan</option>
			<option value = "Autre">Autre</option>
			</select></td></tr>
     
	   <tr><td><label>Description </label></td>
             <td><textarea type="text" id="description" name="description" rows="100" cols="500"> </textarea></td></tr>
	 
        <tr> <td> <p>  </p>  </td>      </tr>
		
        <tr><td></td><td> <input type="submit" id="button3" value="Deposer votre annonce maintenant !"/>  </td></tr>
            <td><p>     </p></td>
    </table>
    
    
      
             
     </div>
    
</form>
<br><hr>

<div id="formG" class="bodyx">
    <h1> EMPLOIS</h1>
   
   
    <div class="trop" > 
        
    <li><a href="deposerEmploi.php" class="trop">DEPOSER UNE ANNONCE</a></li>
    <li><a href="rechercherEmploi.php"class="trop">RECHERCHER UN EMPLOI</a></li>
  </div>
        
    
</div> 

       
		

 <div id="formD" class = "bodyx">
     
      <div id="imgp1" class="bodyx" >
     <a href="http://www.ece.fr/ecole-ingenieur/"><img src="pub1.png" id="imgp1"/></a></div>
     
      <div id="imgp2" class="bodyx" >
     <a href="https://www.facebook.com"><img src="pub2.png" id="imgp2"/></a></div>
    
    </div>
     
    
     
     
     <div class="body1">
<div id="conclu1" class="body1">Copyright by NODEIN TEAM / Audrey Bacquart / Mathilde Hoche / Myrna El Awady <br><hr>Version 1.0 / Mai 2018</div></div>

        </div> 	
		
		
		
</body>
</html>