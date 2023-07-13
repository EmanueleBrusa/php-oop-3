<?php
    //usiamo extends per collegare email a sistemi
    class Email extends SistemiComunicazione{
        public $allegato;
        private $notifica_consegna;
        
        //settiamo il costruttore
        public function __construct($mittente, $destinatario, $oggetto, $contenuto, $notifica_consegna){
            //andiamo a richiamare le proprietà del padre
            parent::__construct($mittente, $destinatario, $oggetto, $contenuto);

            $this-> notifica_consegna = $notifica_consegna;
        }

        //getter e setter
        public function setAllegato($allegato){
            $this->$allegato;
        }

        public function getAllegato(){
            return $this->allegato;
        }

        public function setNotificaConsegna($notifica_consegna){
            $this->notifica_consegna = $notifica_consegna;
        }

        public function getNotificaConsegna(){
            return $this->notifica_consegna;
        }
        //fine getter e setter

        public function inoltro(){
            return 'Email inoltrato';
        }

        public function stampa(){
            return 'Email stampata';
        }

        //polimorfismo
        public function invio(){
            return 'Email inviata';
        }
    }
?>