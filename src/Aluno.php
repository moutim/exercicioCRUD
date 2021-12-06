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

    // Setters
    public function setNome(string $nome) {
        $this->nome = filter_var($nome, FILTER_SANITIZE_STRING);
    }
    public function setPrimeira(float $primeira) {
        $this->primeira = filter_var($primeira, FILTER_SANITIZE_NUMBER_FLOAT);
    }
    public function setSegunda(string $segunda) {
        $this->segunda = filter_var($segunda, FILTER_SANITIZE_NUMBER_FLOAT);
    }
    public function setMedia(string $media) {
        $this->media = filter_var($media, FILTER_SANITIZE_NUMBER_FLOAT);
    }
    public function setSituacao(string $situacao) {
        $this->situacao = filter_var($situacao, FILTER_SANITIZE_STRING);
    }
}