//Crie a classe funcionario (codigo, nome, salario)
// e o metodo MostrarAtributos()

//crie um vetor de 2 indices e insira um objeto diferente em cada posicao
//depois apresente um foreach
<?php

    class Funcionario{

        //Declaracao de Atributos
        public $codigo;
        public $nome;
        public $salario;

        public function MostrarAtributos(){
            echo "<p>Código: ".$this->codigo." Nome: ".$this->nome." Salário: R$ ".$this->salario;
        }
    }

    //Criação de 2 objetos Funcionario
    $f1 = new Funcionario();
    $f1->codigo = 1;
    $f1->nome = "Ana";
    $f1->salario = 2500.00;

    $f2 = new Funcionario();
    $f2->codigo = 2;
    $f2->nome = "Bruno";
    $f2->salario = 3200.50;

    //Vetor com 2 índices recebendo os objetos
    $funcionarios = array($f1, $f2);

    //FOREACH para apresentar os dados
    foreach($funcionarios as $funcionario){
        $funcionario->MostrarAtributos();
    }

?>
