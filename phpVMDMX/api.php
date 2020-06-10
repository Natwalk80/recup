<?php
if(isset($_GET['msg']))
{
    //include 'classSocket.php';
    //$socket->new Socket("","");
    //$socket->ConnexionSocket(...);
    //$messageToSend = $_GET['msg'];
    //$socket->EnvoiMessage($messageToSend);
    //utiliser la fonction d'envoi de message

    /*
    1= rouge
    2= vert
    3= bleu
    4= blanc
    5= stroboscope violet
    6= ON
    7= OFF
    */
    include 'classSocket.php';
    $socket = new Socket("");
    $messageToSend = $_GET['msg'];
    $socket->ConnexionSocket("192.168.65.10","25010", $messageToSend);  
    echo '{reponse:"ok"}';
}else{
    echo '{reponse:"msg Key Not Sendk"}';
}
?>


