<?php
    session_start();
        include'class.php';
        $user2= new Bdd("","","","");
        $champLogin=$_SESSION["username"];
        $champMdp=$_SESSION["password"];              
        $user2->Connexion_BDD("192.168.65.49","ProjetGPS","rootBDD","root123"); //Connexion à la BDD                        
        $_SESSION['admin']=$user2->Admin("user",$champLogin,$champMdp); //Verification que la personne connectée est admin ou non
?>


<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="Css/admin.css" type="text/css" />
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="icon" href="/Images/gps.png" type="image/png">
        <title>GPS LOWRANCE</title>
    </head>

<body>
    
<?php
    if(($_SESSION['admin'])==true) //Si la personne est admin alors le code s'execute sinon il est renvoyer à la page principale
    {
?>

        <div class="menu">
            <div class="data">
                <nav>
                   <ul>

                    <a href="menu.php"><li>ACCUEIL</li></a>
                    <a href="trace.php"><li>POSITION DU BATEAU</li></a>
                    <a href="deco.php"><li>DECONNEXION</li></a>

                   </ul>

                </nav>
                   
            </div>
        </div>


            <?php
                try
                {
                    $bdd = new PDO('mysql:host=192.168.65.49;dbname=ProjetGPS;charset=utf8', 'rootBDD', 'root123'); //connection à la BDD
                    //$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } 
                catch(Exception $e)
                {
                  // En cas d'erreur, on affiche un message et on arrête tout
                    die('Erreur : '.$e->getMessage()); 
                }
            ?>

            <div id="tab">
                <center>
                    <table> <!-- Affichage tableau compte BaseDeDonnée -->
                        <td><b>Nom d'utilisateur</b></td>      
                        <td><b>Mot de passe</b></td>
                        <td><b>N° d'utilisateur</b></td>
                        <td><b>Admin</b></td>

                        <?php
                            $mdp="*****";
                            $result = $bdd->query("SELECT * FROM user "); //affichage en fonction du numéro de machine
                            while ($donnee = $result->fetch()) 
                            {
                                echo "</tr>";
                                echo "<td> ".$donnee['username']."</td> ";
                                echo "<td> ".$mdp."</td> ";
                                echo "<td> ".$donnee['user_index']."</td> ";
                                echo "<td>".$donnee['admin']."</td>";
                                echo"</tr>";
                            }
                        ?>
                    </table>
                </center>
            </div>

        <center><img src="Images/123.png" width=10% height=20%></center>

        <div id="admin">
            <center>
			    <form method="POST" action="admin.php">
                
                    <div class=separation></div>
                <p>
                    <label for="user_index">Numéro de l'Utilisateur à Supprimer : (ex:2)</label> 
                    <input type="number" name="user_index"/>  
                </p>	
                
                    <input class=bouton type="submit" value="Supprimer">   	
                </form>  
            </center>
            <!-- Vérification avec le user index -->
                <?php
                    if(empty($_POST))
                    {
                        $_POST["user_index"]=0;
                    }
                    $user_index = $_POST["user_index"];
                ?>
                    
                <?php
                    if (!empty($_POST["user_index"]))
                    {
                        $result = $bdd->query("DELETE FROM user WHERE user_index='$user_index'");
                        //header('Location: http://192.168.65.249/admin.php');
                        print("<script type=\"text/javascript\">  setTimeout('location=(\"http://192.168.65.249/admin.php\")' ,10); </script>");

                    }   
                ?>
        </div>

        <div id="modif">
            <center>
                <form method="GET" action="admin.php">
                    <p>
                        <div class="Modif">Modification</div>
                        <input type="number" name="user_index" placeholder="Index"><br>
                        <input type="text" name="username" placeholder="Nouveau nom d'utilisateur">
                        <input type="password" name="password" placeholder="Nouveau Mot de Passe">
                    </p>
                    <input class=button type="submit" value="Valider">
                </form>
            </center>

            <?php //
                if(empty($_GET))
                    {
                        $_GET["username"]=0;
                        $_GET["password"]=0;
                        $_GET["user_index"]=0;
                    }
                $username = $_GET["username"];
                $password = $_GET["password"];
                $user_index = $_GET["user_index"];
            ?>
                    
            <?php //Verification si on est inscrit dans la BDD
                if (!empty($_GET["username"]) && (!empty($_GET["password"])) && (!empty($_GET["user_index"])))
                    {
                        $result = $bdd->query("UPDATE user SET username = '$username',
                          password = '$password' WHERE user_index = '$user_index'");
                          //header('Location: http://192.168.65.249/admin.php');
                        print("<script type=\"text/javascript\">  setTimeout('location=(\"http://192.168.65.249/admin.php\")' ,10); </script>");

                    }
    }
    else 
    {   
        echo'<div id="erreur404">';
        echo'<center>';
        echo'<h2>Sorry</h2>';
        echo'<h1 style="font-size: 160px; margin: 10; font-weight: 900; letter-spacing: 5px; background: url(Images/eau.jpg)center no-repeat; 
        -webkit-text-fill-color: transparent; -webkit-background-clip: text;">Only Admin</h1>';
        echo"<p>You don't have the permission</p>";
        echo'<a href="principale.php" style="text-decoration: none; background: #e55039aa; color: #fff; padding: 12px 24px;
        display: inline-block; border-radius: 25px; font-size: 14px; text-transform: uppercase;">Retour Accueil</a>';
        echo'<center>';
        echo'</div>';
    
        //header('Location: http://192.168.65.249/admin.php');
        //print("<script type=\"text/javascript\">  setTimeout('location=(\"http://192.168.65.249/admin.php\")' ,10); </script>");

    } 
    ?>
    </div>
    
</body>
</html>