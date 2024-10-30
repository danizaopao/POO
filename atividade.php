<?php
class Aluno {
    // Atributos
    private $nome;
    private $idade;
    private $curso;

    // Construtor para inicializar os atributos
    public function __construct($nome, $idade, $curso) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->curso = $curso;
    }

    // Método para exibir os dados do aluno
    public function exibirDadosAluno() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . " anos<br>";
        echo "Curso: " . $this->curso . "<br>";
    }

    // Método para alterar o curso
    public function alterarCurso($novoCurso) {
        $this->curso = $novoCurso;
        echo "<hr>";
    }
}

// Exemplo de uso
$aluno = new Aluno("Daniel", 17, "Multi Midia");
$aluno->exibirDadosAluno();
$aluno->alterarCurso("Desenvolvimento de sistema");
$aluno->exibirDadosAluno();
?>