<?php
    class Demanda{
        public $tamanho;
        public $quantidade;

        public function __construct($tamanho, $quantidade){
            $this->tamanho = $tamanho;
            $this->quantidade = $quantidade;
        }
    }
?>