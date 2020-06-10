<html>
        <head>
	        <meta charset="utf-8">
                <!-- importer le fichier de style -->
                <link rel="stylesheet" href="Css/style.css" media="screen" type="text/css" />
	</head>
	
	<body>
	        <div id="containerinscri">
                        <!-- zone de connexion -->
            
                 <form action="formulaire_user.php" method="POST">
                        <h1>Inscription</h1>
                
                   <label><b>Nom d'utilisateur</b></label>
                   <input type="text" placeholder="Entrer votre nom d'utilisateur" name="username" required>

                  <label><b>Mot de passe</b></label>
                  <input type="password" placeholder="Entrer votre mot de passe" name="password" required>
        
                  <input type="submit" id='submit' value='Créer' >
                
            
	         </form>
               </div>
	</body>
</html>