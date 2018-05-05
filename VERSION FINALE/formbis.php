<?php

//VARIABLES DE CONNEXION 
define ('DB_SERVER','localhost');
define ('DB_USER','root');
define ('DB_PASS','');
$base  = 'linkedin2'; 

$name=$_GET['name'];
$password=$_GET['password'];
//$description=isset($_POST["description"])?$_POST["description"]:"";
if (isset ($_POST['enregistrer']))
{
 $hola=$_FILES['pdp']['name'];  
    $file = $_FILES['pdp'];
    $filename = $_FILES['pdp']['name'];
}


//header("Content-type: image/png");
//readfile($_FILES['file']['tmp_name']);
// CONNEXION

 $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(error); //Connexion
 
 $db_found = mysqli_select_db($db_handle, $base)or die(error2);


  if ($db_found) {
	if($hola!='')
{
 $upload_directory = "MyImages/"; //This is the folder which you created just now
 $TargetPath=time().$hola;
 
  if(move_uploaded_file($_FILES['files']['tmp_name'], $upload_directory.$TargetPath)){  

  $sql="UPDATE utilisateur SET photo='$TargetPath' WHERE numero ='$personne'"; 

           $result = mysqli_query($db_handle, $sql);
 
  }
 
}
		
	echo "ok";

    // on affiche le résultat pour le visiteur 
    header("Location: ok.html");

  }
else { 
	echo "Database not found"; 
}   
  
?>