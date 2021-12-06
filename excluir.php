<?php
require_once "src/Aluno.php";
$aluno = new Aluno;
$aluno->setId($_GET['id']);
$aluno->excluirAluno();
header('location:visualizar.php');