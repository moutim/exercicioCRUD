<?php
require_once "Banco.php";

class Aluno {
    private PDO $conexao;
    private int $id;
    private string $nome;
    private float $primeira;
    private float $segunda;
    private float $media;
    private string $situacao;

    public function __construct() {
        $this->conexao = Banco::conecta();
    }
    
}