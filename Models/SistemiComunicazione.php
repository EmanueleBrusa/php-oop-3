<?php
    class SistemiComunicazione{
        //definisco la proprietà della classe
        private $mittente;
        private $destinatario;
        private $oggetto;
        private $contenuto;
        public static $suoneria = 'DRIIN';
        //settiamo il costruttore
        public function __construct($mittente, $destinatario, $oggetto, $contenuto){
            $this->mittente = $mittente;
            $this->destinatario = $destinatario;
            $this->oggetto = $oggetto;
            $this->contenuto = $contenuto;
        }

        //creazione metodi per poter usare le proprietà private (getter e setter)
        public function setMittente($mittente){
            $this->mittente = $mittente;
        }

        public function getMittente(){
            return $this->mittente;
        }

        public function setDestinatario($destinatario){
            $this->destinatario = $destinatario;
        }

        public function getDestinatario(){
            return $this->destinatario;
        }

        public function setOggetto($oggetto){
            $this->oggetto = $oggetto;
        }

        public function getOggetto(){
            return $this->oggetto;
        }

        public function setContenuto($contenuto){
            $this->contenuto = $contenuto;
        }

        public function getContenuto(){
            return $this->contenuto;
        }
        //fine getter e setter

        public function invio(){
            return 'Comunicazione inviata';
        }
    }
?>