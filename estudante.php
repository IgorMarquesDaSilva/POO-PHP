<?php

class Estudante {
    private $nome;
    private $media;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return strtoupper($this->nome);
    }

    public function setMedia($media) {
        if ($media >= 0 && $media <= 10) {
            $this->media = $media;
        } else {
            echo "Erro: A média deve estar entre 0 e 10.<br>";
        }
    }

    public function getMedia() {
        return $this->media;
    }

    public function MostrarAtributos() {
        echo "Nome: " . $this->getNome() . "<br>";
        echo "Média: " . $this->getMedia() . "<br>";
    }

    public function EstaAprovado() {
        return $this->media >= 6;
    }

    public function ExibirInformacoes() {
        $this->MostrarAtributos();
        echo "Status: ";

        if ($this->EstaAprovado()) {
            echo "Aprovado<br><br>";
        } else {
            echo "Reprovado<br><br>";
        }
    }
}
$aluno1 = new Estudante();
$aluno1->setNome("João");
$aluno1->setMedia(7.5);

$aluno2 = new Estudante();
$aluno2->setNome("Maria");
$aluno2->setMedia(5.2);

$aluno1->ExibirInformacoes();
$aluno2->ExibirInformacoes();
?>