
<?php 

    session_start();
    session_unset();
    session_destroy();


    //header('Location: http://192.168.65.249/index.php');
    //====================================================
    //Autre façon que le header 
    print("<script type=\"text/javascript\">  setTimeout('location=(\"http://192.168.65.249/index.php\")' ,10); </script>");
     

?>