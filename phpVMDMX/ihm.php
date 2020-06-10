<?php
if(isset($_GET['msg']))
{
    
    include 'classSocket.php';
    $socket = new Socket("");
    $messageToSend = $_GET['msg'];
    $socket->ConnexionSocket("192.168.65.10","25010", $messageToSend);  
}
?>

<html>
    <head>
    <!-- Boutons couleurs -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>   
    <!-- CSS -->
    <link href="Css/ihm.css" rel="stylesheet" type="text/css">
    </head>

        <body>
        <div class="menu">
            <div class="data">
                <nav>
                   <ul>

                    <a href="menu.php"><li>ACCUEIL</li></a>
                    <a href="deco.php"><li>DECONNEXION</li></a>

                   </ul>

                </nav>
                   
            </div>
        </div>    
                <div class="container"> <!-- On récupére les boutons à laide d'un formulaire permettant de faire fonctionner les lumières -->
                    <form method="GET">
                        <input type="submit" class="btn btn-1" name="Rouge" value="rouge">
                        <input type="hidden" name="msg" value="1">
                    </form>    
                    <form method="GET">
                        <input type="submit" class="btn btn-2" name="Vert" value="Vert">
                        <input type="hidden" name="msg" value="2">
                    </form>  
                        <form method="GET">
                        <input type="submit" class="btn btn-3" name="Bleu" value="Bleu">
                        <input type="hidden" name="msg" value="3">
                    </form>
                    <form method="GET">
                        <input type="submit" class="btn btn-4" name="Blanc" value="Blanc">
                        <input type="hidden" name="msg" value="4">
                    </form>
                    <form method="GET">
                        <input type="submit" class="btn btn-5" name="Stroboscope" value="Stroboscope Violet">
                        <input type="hidden" name="msg" value="5">
                    </form>
                    <form method="GET">
                        <input type="submit" class="btn btn-8" name="Jaune" value="Jaune">
                        <input type="hidden" name="msg" value="8">
                    </form>
                    <form method="GET">
                        <input type="submit" class="btn btn-9" name="Fondu" value="Fondu">
                        <input type="hidden" name="msg" value="9">
                    </form>
                    <form method="GET">
                        <input type="submit" class="btn btn-6" name="ON" value="ON">
                        <input type="hidden" name="msg" value="6">
                    </form>
                    <form method="GET">
                        <input type="submit" class="btn btn-7" name="OFF" value="OFF">
                        <input type="hidden" name="msg" value="7">
                    </form>

                </div>
            </body> 

</html>