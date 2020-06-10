
<?php 
class Socket
{
   Private  $_Socket = null;
    function ConnexionSocket($adress , $port, $messageToSend)
    {
       // set_time_limit(0);
        $socket = socket_create(AF_INET , SOCK_STREAM, SOL_TCP); //créer l'ouverture du socket
        if($socket === false){ //si la création échoue ,un message d'erreur apparaît

            echo"socket_create() a échoué:". socket_strerror(socket_last_error())." <br> ";
        
        }
        else{

            echo"CREATION OK.<br>";
        }

        $result = socket_connect($socket,$adress,$port); //connexion à partir du socket 
        if($socket === false){

            echo"socket_connect() a échoué : ($result) ".socket_strerror(socket_last_error($socket)). "<br>";

        }else{
            echo"CONNEXION OK.<br>";
        } 
        socket_write($socket, $messageToSend, strlen($messageToSend)); //permet d'envoyer un message en tant que client
    }
}
?>
