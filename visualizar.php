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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" defer></script>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Lista de alunos</h1>
    <hr>
    <p><a class="btn btn-primary" href="inserir.php">Inserir novo aluno</a></p>
    <p><a class="btn btn-primary" href="index.php">Voltar ao início</a></p>

    <article>
    <div class="bloco-lista row">
        <?php foreach ($listaAlunos as $arrAluno) { ?>
            <ul class="list-group col-sm-6 col-md-4 mb-3">
                <li class="list-group-item"><strong>Nome: </strong> <?=$arrAluno['nome']?></li>
                <li class="list-group-item"><strong>Primeira nota: </strong><?=$arrAluno['primeira']?></li>
                <li class="list-group-item"><strong>Segunda nota: </strong><?=$arrAluno['segunda']?></li>
                <li class="list-group-item"><strong>Nota media: </strong><?=$arrAluno['media']?></li>
                <?php if ($arrAluno['situacao'] === 'Aprovado') { ?>
                    <li class="list-group-item list-group-item-success"><strong>Situação: </strong><?=$arrAluno['situacao']?></li>
                <?php } else { ?>
                    <li class="list-group-item list-group-item-danger"><strong>Situação: </strong><?=$arrAluno['situacao']?></li>
                <?php } ?>
                <a class="btn btn-warning mt-2" href="atualizar.php?id=<?=$arrAluno['id']?>">Atualizar</a>
                <a class="btn btn-danger" href="excluir.php?id=<?=$arrAluno['id']?>">Excluir</a>
            </ul>
        <?php } ?>
    </div>
    </article>
</div>

</body>
</html>