<?php
class Livro {
    // Atributos
    private $titulo;
    private $autor;
    private $anoPublicacao;

    // Construtor
    public function __construct($titulo, $autor, $anoPublicacao) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
    }

    // Método para exibir os detalhes do livro
    public function exibirDetalhes() {
        return "Título: " . $this->titulo . "<br>" .
               "Autor: " . $this->autor . "<br>" .
               "Ano de Publicação: " . $this->anoPublicacao . "<br>";
    }

    // Método para alterar o ano de publicação
    public function alterarAnoPublicacao($novoAno) {
        $this->anoPublicacao = $novoAno;
        echo '<hr>';
    }
}

// Exemplo de uso
$livro = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", 1954);

// Exibir detalhes do livro
echo $livro->exibirDetalhes();

// Alterar o ano de publicação e exibir novamente
$livro->alterarAnoPublicacao(1965);
echo $livro->exibirDetalhes();
?>