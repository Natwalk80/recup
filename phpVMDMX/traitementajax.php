<?php

    try
    {
            $bdd = new PDO('mysql:host=192.168.65.49;dbname=ProjetGPS;charset=utf8', 'rootBDD', 'root123');
    }
            catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    $req = $bdd->query("SELECT * FROM Bateau ORDER BY `Coordo_ID` DESC LIMIT 2");

    if($valeur=$req->fetch()){
        $longitude = $valeur['Longitude'];
        $latitude = $valeur['Latitude'] ;   
    }
    
        
    
    if($valeur=$req->fetch()){
        $longitude2 = $valeur['Longitude'];
        $latitude2 = $valeur['Latitude'] ;   

    }

    
       
    $bdd = NULL;
    //$valeur->closeCursor();

    //$nombre = rand(0,100);
    echo  '<div id="position">';//.$nombre;
    ?>
    <script>
    // <?php echo "SELECT * FROM Bateau ORDER BY `Coordo_ID` DESC LIMIT 2";?> 

        var latitude2 = <?php echo json_encode($latitude2); ?>;
        var longitude2 = <?php echo json_encode($longitude2); ?>;
        var latlngs = [
                [<?php echo json_encode($latitude); ?>, <?php echo json_encode($longitude); ?>],
                [latitude2,longitude2]
                ];
        
                var marker = L.marker([latitude, longitude]).addTo(carte);
                marker.bindPopup("Position du Bateau").openPopup();
                var polyline = L.polyline(latlngs, {color: 'green'}).addTo(carte);
                // zoom the map to the polyline
                //carte.fitBounds(polyline.getBounds());
    
    
    </script></div>

