<?php
require_once "src/Aluno.php";
$aluno = new Aluno;
$listaAlunos = $aluno->lerAlunos();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Lista de alunos</h1>
    <hr>
    <p><a href="inserir.php">Inserir novo aluno</a></p>

    <?php foreach ($listaAlunos as $arrAluno) { ?>
        <ul>
            <li>Nome: <?=$arrAluno['nome']?></li>
            <li>Primeira nota: <?=$arrAluno['primeira']?></li>
            <li>Segunda nota: <?=$arrAluno['segunda']?></li>
            <li>Nota media: <?=$arrAluno['media']?></li>
            <li>Situação: <?=$arrAluno['situacao']?></li>
            <a href="atualizar.php?id=<?=$arrAluno['id']?>">Atualizar</a>
            <a href="excluir.php?id=<?=$arrAluno['id']?>">Excluir</a>
        </ul>
    <?php } ?>

    <p><a href="index.php">Voltar ao início</a></p>
</div>

</body>
</html>