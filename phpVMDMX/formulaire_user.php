<?php  
try
{
	$bdd = new PDO('mysql:host=192.168.65.49;dbname=ProjetGPS;charset=utf8', 'rootBDD', 'root123');
}
catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}

		//Requete include dans la bdd ,permet de s'inscrire

$req = $bdd->prepare('INSERT INTO user (username,password) VALUES (?,?)');
$req->execute(array($_POST['username'],$_POST['password']));


//a changé car 2fois utilisation du serveur  
//header('Location: http://192.168.65.249/index.php');
print("<script type=\"text/javascript\">  setTimeout('location=(\"http://192.168.65.249/index.php\")' ,10); </script>");
?>

