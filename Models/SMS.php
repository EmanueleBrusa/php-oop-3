<?php
    class SMS extends SistemiComunicazione{
        private $notifica_lettura;
        private $accettazione_risposta;

        //copio-incollo da email e modifico:
        //settiamo il costruttore
        public function __construct($mittente, $destinatario, $oggetto, $contenuto, $notifica_lettura, $accettazione_risposta){
            //andiamo a richiamare le proprietà del padre
            parent::__construct($mittente, $destinatario, $oggetto, $contenuto);

            $this-> notifica_lettura = $notifica_lettura;
            $this-> accettazione_risposta = $accettazione_risposta;
        }

        public function getNotificaLettura(){
            return $this->notifica_lettura;
        }

        public function getAccettazioneRisposta(){
            return $this->accettazione_risposta;
        }

        //polimorfismo su invio
        public function invio(){
            return 'SMS inviato';
        }

        public function risposta(){
            return 'Greaziae per avermi scritto';
        }
    }
?>