<?php
    class SistemiComunicazione{
        //definisco la proprietà della classe
        private $mittente;
        private $destinatario;
        private $oggetto;
        private $contenuto;

        public function __construct($mittente, $destinatario, $oggetto, $contenuto){
            $this->mittente = $mittente;
            $this->destinatario = $destinatario;
            $this->oggetto = $oggetto;
            $this->contenuto = $contenuto;
        }
    }
?>