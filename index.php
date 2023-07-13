<?php
    //usiamo il require_once per evitare eventuali errori di ripetizione
    require_once __DIR__.'/Models/SistemiComunicazione.php';
    require_once __DIR__.'/Models/Email.php';
    $comm = new SistemiComunicazione('Giangiorgio', 'Fumagalli', 'Saluto', 'Ciao Fumagalli');

    //var_dump($comm);

    //stampiamo a schermo
    echo "Mittente: ".$comm->getMittente()."<br>";
    echo "Destinatario: ".$comm->getDestinatario()."<br/>";
    echo "Oggetto: ".$comm->getOggetto()."<br/>";
    echo "Contenuto: ".$comm->getContenuto()."<br/>";
    echo "Stato invio: ".$comm->invio()."<br/>";

    $email = new Email('emanuelebrusa@hotmail.it', 'pietropietra@hotmail.it', 'Email test', 'Contenuto Email per Pietro', true);

    echo "<hr>";
    echo "Mittente: ".$email->getMittente()."<br>";
    echo "Destinatario: ".$email->getDestinatario()."<br/>";
    echo "Oggetto: ".$email->getOggetto()."<br/>";
    echo "Contenuto: ".$email->getContenuto()."<br/>";
    echo "Notifica Consegna: ".$email->getNotificaConsegna()."<br/>";
    /*oppure:
    if($email->getNotificaConsegna()){
        echo "L'email è stata consegnata correttamente al destinatario";
    }
    else{
        echo "L'email non è stata inviata. Riprova più tardi.";
    }
    */
    echo "Stato invio: ".$email->invio()."<br/>";
    echo "Inoltro: ".$email->inoltro()."<br/>";
    echo "Stampa: ".$email->stampa()."<br/>";
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