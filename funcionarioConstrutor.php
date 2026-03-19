<?php

class FuncionarioConstrutor
{
    private int $codigo;
    private string $nome;
    private float $salario;

    public function __construct(int $codigo, string $nome, float $salario)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->salario = $salario;
    }

    // Getters
    public function getCodigo(): int
    {
        return $this->codigo;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    // Setters
    public function setCodigo(int $codigo): void
    {
        $this->codigo = $codigo;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setSalario(float $salario): void
    {
        $this->salario = $salario;
    }

    public function MostrarAtributos(): void
    {
        echo "<br>Código: " . $this->getCodigo()
            . "<br>Nome: " . $this->getNome()
            . "<br>Salário: R$ " . number_format($this->getSalario(), 2, ',', '.')
            . "<br><hr>";
    }
}

// Instanciando 2 objetos (como pedido no enunciado)
$f1 = new FuncionarioConstrutor(1, "Ana", 2500.00);
$f2 = new FuncionarioConstrutor(2, "Bruno", 3200.50);

$f1->MostrarAtributos();
$f2->MostrarAtributos();

?>

