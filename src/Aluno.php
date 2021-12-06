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

    
    // Getters
    public function getId():int {
        return $this->id;
    }
    public function getNome():int {
        return $this->nome;
    }
    public function getPrimeira():int {
        return $this->primeira;
    }
    public function getSegunda():int {
        return $this->segunda;
    }
    public function getMedia():int {
        return $this->media;
    }
    public function getSituacao():int {
        return $this->situacao;
    }
}