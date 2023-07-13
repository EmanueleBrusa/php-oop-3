<?php
    class NotificaPush extends SistemiComunicazione{
        private $visibile;
        private $icona;

        public function __construct($mittente, $destinatario, $oggetto, $contenuto, $visibile, $icona){
            parent::__construct($mittente, $destinatario, $oggetto, $contenuto);
            $this->visibile = $visibile;
            $this->icona = $icona;
        }

        public function getVisibile(){
            return $this->visibile;
        }

        public function getIcona(){
            return $this->icona;
        }

        //poli
        public function invio(){
            return 'Notifica push inviata';
        }

        public function onClick(){
            return "Apro l'applicazione collegata alla notifica";
        }
    }
?>