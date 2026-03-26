<?php
class Aluno
{
    private static $ra_base = 1571432612000;
    private $ra;
    private $nome;
    private static $contador = 0;

    public function __construct($nome)
    {
        self::$contador++;
        $this->nome = $nome;
        $this->ra = self::$ra_base + self::$contador;
    }
    public function getRa()
    {
        return $this->ra;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public static function getContador()
    {
        return self::$contador;
    }
    public function MostrarAtributos()
    {
        echo "<p>RA: " . $this->getRa() . " - Nome: " . htmlspecialchars($this->getNome()) . "</p>";
    }
}
function Main()
{
    $a1 = new Aluno("Primeiro aluno");
    $a2 = new Aluno("Segundo aluno");
    $a3 = new Aluno("Terceiro aluno");
    $a4 = new Aluno("Quarto aluno");
    $a1->MostrarAtributos();
    $a2->MostrarAtributos();
    $a3->MostrarAtributos();
    $a4->MostrarAtributos();

    echo "<p>Total de instâncias: " . Aluno::getContador() . "</p>";
}
Main();
?>