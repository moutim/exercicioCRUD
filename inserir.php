<?php
	require "src/Aluno.php";
	$aluno = new Aluno;

	if (isset($_POST['cadastrar-aluno'])) {
		$aluno->setPrimeira($_POST['primeira']);
		$aluno->setSegunda($_POST['segunda']);
		$aluno->setNome($_POST['nome']);
		$notaMedia = ($aluno->getPrimeira() + $aluno->getSegunda()) / 2;
		if ($notaMedia >= 7) {
			$situacao = 'Aprovado';
		} else {
			$situacao = 'Reprovado';
		}
		$aluno->setSituacao($situacao);
		$aluno->setMedia($notaMedia);
		$aluno->inserirAluno();
		header('location:visualizar.php');
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastrar um novo aluno - Exercício CRUD com PHP e MySQL</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" defer></script>
<link href="css/style.css" rel="stylesheet">
<script src="js/script.js" defer></script>
</head>
<body>
<div class="container">
	<h1>Cadastrar um novo aluno </h1>
    <hr>
    		
    <p>Utilize o formulário abaixo para cadastrar um novo aluno.</p>

	<form action="#" method="post" class="w-50">
	    <p class="form-group" ><label class="form-label" for="nome">Nome:</label>
	    <input class="form-control" type="text" name="nome" id="nome" required></p>
        
      	<p class="form-group" ><label class="form-label" for="primeira">Primeira nota:</label>
	    <input class="form-control" type="number" name="primeira" id="primeira" step="0.1" min="0.0" max="10" required></p>
	    
	    <p class="form-group" ><label class="form-label" for="segunda">Segunda nota:</label>
	    <input class="form-control" type="number" name="segunda" id="segunda" step="0.1" min="0.0" max="10" required></p>

      <button class="btn btn-success" name="cadastrar-aluno">Cadastrar aluno</button>
	</form>

    <hr>
    <p><a href="index.php">Voltar ao início</a></p>
</div>

</body>
</html>