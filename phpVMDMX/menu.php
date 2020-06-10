<?php
    session_start();
?>
<html>
<head>
<meta charset="utf-8">
<!-- importer le fichier de style -->
<link rel="stylesheet" href="Css/newmenu.css" media="screen" type="text/css" />



</head>
<body>
<?php   
        if (isset($_POST['connexion'])) //Condition pour vérifier les utilisateurs 
        {
            include'class.php';
            $user2= new Bdd("","","","");
            $champLogin=$_POST["username"];
            $champMdp=$_POST["password"];              
            $user2->Connexion_BDD("192.168.65.49","ProjetGPS","rootBDD","root123");                        
            $_SESSION['user']=$user2->Autorisation("user",$champLogin,$champMdp);         
            $_SESSION['username']=$champLogin;
            $_SESSION['password']=$champMDP;
        }
        
        if (!isset($_SESSION['username']))
        {
            //header('Location: http://192.168.65.249/index.php');
            print("<script type=\"text/javascript\">  setTimeout('location=(\"http://192.168.65.249/index.php\")' ,10); </script>");
        }
           
    if ($_SESSION['user']==true)  //Condition si l'utilisateur est bien connecté 
        {  
            
            if($_SESSION['username'] !== ""){
                $user = $_SESSION['username'];
                // affiche un message de bienvenue
                //echo "<center style='color:black;'>Bonjour $user</center>"; 
                //echo "<center style='color:#1E90FF;'><u>Bienvenue sur le Projet GPS/DMX</u></center>";
            }
?>

                <header id="header">
                    <nav class="links" style="--items: 5;">
                        <a href="menu.php">Accueil</a>
                        <a href="admin.php">Administration</a>
                        <a href="trace.php">Position du Bateau</a>
                        <a href="ihm.php">Lumière DMX</a>
                        <a href="deco.php">Déconnexion</a>
                        <span class="line"></span>
                    </nav>
                </header>

                <center><!--<img src="Images/bateau-phare-2.png"></center>--> 

                    <footer id="footer">
                        <ul>
                        © MAAN - BTS SN2 
                        </ul>
                    </footer>
        <?php
        } else 
            {
                //header('Location: http://192.168.65.249/index.php');
                print("<script type=\"text/javascript\">  setTimeout('location=(\"http://192.168.65.249/index.php\")' ,10); </script>");
            }
        ?>

</body>
</html>
