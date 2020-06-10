<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="Css/style.css" media="screen" type="text/css" />
        <link rel="icon" href="/Images/gps.png" type="image/png">
        <title>GPS/DMX</title>
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="menu.php" method="POST">
                <h1>  Connexion  </h1> 
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer votre nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer votre mot de passe" name="password" required>
        
                <input type="submit" id='submit' value='LOGIN' name='connexion'>
                
            
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
                 
            </form>
            
            <form method="POST" action="inscri_user.php">
                <input type="submit" id='submit' value='Pas encore inscrit ?' />
            </form>

        </div>

    </body>
</html>