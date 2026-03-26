<?php
    class Produto{
        private $nome;
        private $preço;
        private $fabricante;

        public function __construct($nome, $preco){
            $this->nome = $nome;
            $this->preco = $preco;
        }

        public function setFabricante(Fabricante $fabricante){
            $this->fabricante = $fabricante;
        }
        public function getFabricante(){
            return $this->fabricante;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getPreco(){
            return $this->preco;
        }
    }
?>