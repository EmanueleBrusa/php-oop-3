<?php
    //usiamo il require_once per evitare eventuali errori di ripetizione
    require_once __DIR__.'/Models/SistemiComunicazione.php';
    require_once __DIR__.'/Models/Email.php';
    require_once __DIR__.'/Models/Allegato.php';


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

    //sezione allegato
    $email_2 = new Email ('emanuelebrusa@hotmail.it', 'gianciottomalatesta@nonloso.it', 'Email per lo Sciancato', 'Contenuto email per Gianciotto', false);
    $allegato = new Allegato ('immagine', 'png', "2" );

    $email_2->setAllegato($allegato);
    echo "<hr>";
    echo "Mittente: ".$email_2->getMittente()."<br>";
    echo "Destinatario: ".$email_2->getDestinatario()."<br/>";
    echo "Oggetto: ".$email_2->getOggetto()."<br/>";
    echo "Contenuto: ".$email_2->getContenuto()."<br/>";
    //echo "Notifica Consegna: ".$email_2->getNotificaConsegna()."<br/>";
    if($email_2->getNotificaConsegna()){
        echo "L'email è stata consegnata correttamente al destinatario <br/>";
    }
    else{
        echo "L'email non è stata inviata. Riprova più tardi. <br/>";
    }
    echo "Stato invio: ".$email_2->invio()."<br/>";
    echo "Inoltro: ".$email_2->inoltro()."<br/>";
    echo "Stampa: ".$email_2->stampa()."<br/>";
    echo "Allegato: ".$email_2->allegato->getNome().".".$email_2->allegato->getTipo().", Dimensioni: ".$email_2->allegato->getDimensione()."Mb<br/>";
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