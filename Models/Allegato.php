<?php
    class Allegato{
        private $nome;
        private $tipo;
        private $dimensione;

        public function __construct($nome, $tipo, $dimensione){
            $this->nome = $nome;
            $this->tipo = $tipo;
            $this->dimensione = $dimensione;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setTipo($tipo){
            $this->tipo = $tipo;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setDimensione($dimensione){
            $this->dimensione = $dimensione;
        }

        public function getDimensione(){
            return $this->dimensione;
        }
    }
?>