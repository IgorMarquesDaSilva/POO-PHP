<?php
class Aluno
{
    // Base do RA no padrão da Fatec
    private static $ra_base = 1571432612000;
    private $ra;
    private $nome;
    private static $contador = 0;

    public function __construct($nome)
    {
        self::$contador++;
        $this->nome = $nome;
        // RA segue o padrão Fatec: base + 1, base + 2, base + 3...
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
    $a1 = new Aluno("Primeiro aluno");  // 1571432612001
    $a2 = new Aluno("Segundo aluno");   // 1571432612002
    $a3 = new Aluno("Terceiro aluno");  // 1571432612003
    $a4 = new Aluno("Quarto aluno");  // 1571432612004
    $a1->MostrarAtributos();
    $a2->MostrarAtributos();
    $a3->MostrarAtributos();
    $a4->MostrarAtributos();

    echo "<p>Total de instâncias: " . Aluno::getContador() . "</p>";
}
Main();
?>