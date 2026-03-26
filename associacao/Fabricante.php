<?php
    class Fabricante{
        private $nome;
        private $cnpj;

        public function __construct($nome, $cnpj){
            $this->nome = $nome;
            $this->cnpj = $cnpj;
        }

        public function getNome(){
            return $this->nome;
        }
        public function getCnpj(){
            return $this->cnpj;
        }
    }
?>