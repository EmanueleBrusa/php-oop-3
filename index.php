<?php
    //usiamo il require_once per evitare eventuali errori
    require_once __DIR__.'/Models/SistemiComunicazione.php';

    $comm = new SistemiComunicazione('Fabrizio', 'Antonello', 'Saluto', 'Ciao Antonello');

    //var_dump($comm);

    //stampiamo a schermo
    echo "Mittente: ".$comm->getMittente()."<br>";
    echo "Destinatario: ".$comm->getDestinatario()."<br/>";
    echo "Oggetto: ".$comm->getOggetto()."<br/>";
    echo "Contenuto: ".$comm->getContenuto()."<br/>";
    echo "Stato invio: ".$comm->invio()."<br/>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop 3</title>
</head>
<body>
    
</body>
</html>