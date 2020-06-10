//alert("je suis le fichier fonction.js");
setInterval("FonctionAjax()", 1000);

function FonctionAjax(){
   $.ajax( 
      //données aux format JSON 
      { 
         url : ' traitementajax.php', 
         type : 'GET', 
         dataType : 'html', 
         data : 'valeur1=2' , //+ ‘HelloAjax’; 
         //success est lancé si ajax ok  
         //code_html sera envoyé par ajax vers la fonction c’est le retour //du server web 
         success : function(code_html, statut){ 
            //alert(code_html);
            //$(code_html).appendTo("#temperature");  
            $("#position").replaceWith(code_html);  
            
         // On passe code_html à jQuery() qui va nous créer l'arbre DOM ! 
               }, 
         //error est  lancé si ajax à eu une effeur 
         error : function(resultat, statut, erreur){ 
            //alert("Erreur ajax");
         }, 
         //complete est lancé si ajax a fini 
         complete : function(resultat, statut){ 
         } 
         
         //fin des données jSon 
      }); 
}





