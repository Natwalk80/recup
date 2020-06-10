
<?php
    session_start();
    if (!isset($_SESSION['username']))
    {
        //header('Location: http://192.168.65.249/index.php');
        print("<script type=\"text/javascript\">  setTimeout('location=(\"http://192.168.65.249/index.php\")' ,10); </script>");
    }

        include'class.php';
        $user2= new Bdd("","","","");
        $champLogin=$_SESSION["username"];
        $champMdp=$_SESSION["password"];              
        $user2->Connexion_BDD("192.168.65.49","ProjetGPS","rootBDD","root123");                        
        $_SESSION['admin']=$user2->Admin("user",$champLogin,$champMdp); //Verification que la personne connectée en temps que admin ou non 
?>
<html>

<head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="Css/style.css" media="screen" type="text/css" />
        <link rel="stylesheet" href="Css/admin.css" type="text/css" />
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" 
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
        integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="position.js"></script> <!-- fichier AJAX -->
        <link rel="icon" href="/Images/gps.png" type="image/png">
        <title> GPS LOWRANCE </title>

</head>

<body>

                <?php

                        if(($_SESSION['admin'])==true)
                        {

                ?>

        <div id="position"></div>

        <div class="menu">
                <div class="data">
                        <nav>
                        <ul>

                        <a href="menu.php"><li>ACCUEIL</li></a>
                        <a href="admin.php"><li>ADMINISTRATION</li></a>
                        <a href="deco.php"><li>DECONNEXION</li></a>

                        </ul>

                        </nav>
                        
                </div>
        </div>

        <?php  
                try
                {
                        $bdd = new PDO('mysql:host=192.168.65.49;dbname=ProjetGPS;charset=utf8', 'rootBDD', 'root123');
                }
                        catch(Exception $e)
                {
                        die('Erreur : '.$e->getMessage());
                }

                $req = $bdd->query('SELECT *  FROM Bateau');

                while($valeur=$req->fetch())
                {
                     $longitude = $valeur['Longitude'];
                     $latitude = $valeur['Latitude'];   
                }

        ?>


        <center>
                <div id="macarte" style="position: relative; height:80vh; width:60vw">

                                <script>
                                        var latitude = <?php echo json_encode($latitude); ?>; //Récupération des variables $latitude et $longitude en php pour les retranscrire en javascript
                                        var longitude = <?php echo json_encode($longitude); ?>;

                                        var carte = L.map('macarte').setView([latitude,longitude], 8);
                                        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
                                        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a>',
                                        maxZoom: 18,
                                        id: 'mapbox.streets',
                                        accessToken: 'sk.eyJ1IjoieXZlYSIsImEiOiJjanhiamI4dzIwMGl3M3FwcjBpcXR5YXF3In0.vKXV81ZUV7EZnIxejVmDHA'
                                        }).addTo(carte);
                                           
                                       // var marker = L.marker([latitude, longitude]).addTo(carte);
                                        //marker.bindPopup("Position Actuelle ").openPopup();
                                        
                                </script>
                               
                </div>
        </center>

     <center>
        <div id ='tab'> 
                <table> <!-- Affichage tableau Coordonnées BaseDeDonnée-->
                        <td><b>Longitude</b></td>      
                        <td><b>Latitude</b></td>
                        <td><b>Coordo_ID</b></td>

                <?php

                        $requete = $bdd->query('SELECT * FROM Bateau'); //requète pour prendre tout le table "Bateau" dans la BaseDeDonnée
                        while ($donnee = $requete->fetch())
                        {
                            echo "</tr>";
                            echo "<td> ".$donnee['Longitude']."</td> ";
                            echo "<td> ".$donnee['Latitude']."</td> ";
                            echo "<td> ".$donnee['Coordo_ID']."</td> ";
                            echo"</tr>";
                        }

                ?>

                </table>
        </div>
     <center>

                <?php 
                        } 

                        else 
                        {
                                echo'<div id="erreur404">';
                                echo'<center>';
                                echo'<h2>Sorry</h2>';
                                echo'<h1 style="font-size: 160px; margin: 0; font-weight: 900; letter-spacing: 20px; background: url(Images/eau.jpg)center no-repeat; 
                                -webkit-text-fill-color: transparent; -webkit-background-clip: text;">404</h1>';
                                echo'<p>Page not found<p>';
                                echo'<a href="principale.php" style="text-decoration: none; background: #e55039aa; color: #fff; padding: 12px 24px;
                                display: inline-block; border-radius: 25px; font-size: 14px; text-transform: uppercase;">Retour Accueil</a>';
                                echo'<center>';
                                echo'</div>';

                        }   
                ?>

</body>
</html>