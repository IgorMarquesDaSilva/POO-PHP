<?php
    class Funcionario{

        //Declaracao de Atributos
        public $codigo;
        public $nome;
        public $salario;
        public $salarioAumentado;
        public $aumento;


        public function MostrarAtributos(){
            echo "<p>Número: ".$this->codigo." Titular: ".$this->nome." Saldo: ".$this->salario;
        }
        public function AplicarAumento($porcentagem)
        {
            $this->aumento = ($porcentagem / 100);
            $this->salarioAumentado = $this->salario + ($this->salario * $this->aumento);
            $this->salario = $this->salarioAumentado;
        }
    }
    $c1 = new Funcionario();

    $c1->codigo = 1;
    $c1->nome = "igor";
    $c1->salario = 1500;
    $c1->MostrarAtributos();

    $c1->AplicarAumento(10);
    $c1->MostrarAtributos();

    
?>