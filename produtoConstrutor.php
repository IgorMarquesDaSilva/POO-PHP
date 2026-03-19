<?php

class ProdutoConstrutor
{
    private int $codigo;
    private string $nome;
    private float $preco;

    public function __construct(int $codigo, string $nome, float $preco)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->preco = $preco;
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

    public function getPreco(): float
    {
        return $this->preco;
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

    public function setPreco(float $preco): void
    {
        $this->preco = $preco;
    }

    public function MostrarAtributos(): void
    {
        echo "<br>Código: " . $this->getCodigo()
            . "<br>Nome: " . $this->getNome()
            . "<br>Preço: R$ " . number_format($this->getPreco(), 2, ',', '.')
            . "<br><hr>";
    }
}

// Instanciando 2 objetos (como pedido no enunciado)
$p1 = new ProdutoConstrutor(1, "Arroz", 2.50);
$p2 = new ProdutoConstrutor(2, "Feijão", 6.20);

$p1->MostrarAtributos();
$p2->MostrarAtributos();

?>

