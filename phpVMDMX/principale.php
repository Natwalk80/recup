<?php
    session_start();
?>
<html>
    <head>

        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="Css/principale.css" media="screen" type="text/css" />
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="icon" href="/Images/gps.png" type="image/png"> 

        <title> GPS LOWRANCE </title>
    </head>

    <body>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
 
    <!-- tester si l'utilisateur est connecté -->

    <h1>
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
                echo "<center style='color:black;'>Bonjour $user</center>"; 
                echo "<center style='color:#1E90FF;'><u>Bienvenue sur le Projet GPS/DMX</u></center>";
            }
        ?>
            <center><img src="Images/gps.png"></center>
        </h1>

        <div class="nav">
            <div class="toggle-btn">
                <span class="one"></span>
                <span class="two"></span>
            </div>

            <div class="menu">
                <div class="data">
                    <ul>

                            <li style='color:black;'>Menu</li>
                            <li><a href="principale.php">Accueil</a></li>
                            <li><a href="admin.php">Administration</a></li>
                            <li><a href="trace.php">Position du bateau</a></li>
                            <li><a href="ihm.php">Lumiere DMX</a></li>
                            <li><a href="deco.php">Déconnexion</a></li>
                            

                            <center><img src="Images/ship.png"></center>

                    </ul>
                    
                </div>
            </div>
        </div>     

        <script>    //Script permettant de faire descendre le menu  
                        var t1 = new TimelineMax({paused: true});


                    t1.to(".one", 0.6, {
                        y: 6,
                        rotation: 45,
                        ease: Expo.easeInOut
                    });
                    t1.to(".two", 0.6, {
                        y: -6,
                        rotation: -45,
                        ease: Expo.easeInOut,
                        delay: 0
                    });

                    t1.to(".menu", 1.5, {
                        top: "0%", 
                        ease: Expo.easeInOut,
                        delay: 0.2
                    });

                    t1.staggerFrom(".menu ul li", 2, {x: -200, opacity: 0, ease:Expo.easeOut}, 0.3);

                    t1.reverse();
                    $(document).on("click", ".toggle-btn", function() {
                        t1.reversed(!t1.reversed());
                    });
                    $(document).on("click", "a", function() {
                        t1.reversed(!t1.reversed());
                                });

                        
        </script>
        <?php 
    }
    else 
    {
        //header('Location: http://192.168.65.249/index.php');
        print("<script type=\"text/javascript\">  setTimeout('location=(\"http://192.168.65.249/index.php\")' ,10); </script>");
    }
        ?>

        </body>

    </html>