<?php
    require_once "src/Aluno.php";
    $aluno = new Aluno;
    $aluno->setId($_GET['id']);
    $lerAluno = $aluno->lerUmAluno();

    if (isset($_POST['atualizar-dados'])) {
        $notaMedia = ($_POST['primeira'] + $_POST['segunda']) / 2;
		if ($notaMedia >= 7) {
			$situacao = 'Aprovado';
		} else {
			$situacao = 'Reprovado';
		}

		$aluno->setNome($_POST['nome']);
		$aluno->setPrimeira($_POST['primeira']);
		$aluno->setSegunda($_POST['segunda']);
		$aluno->setMedia($notaMedia);
		$aluno->setSituacao($situacao);
		$aluno->atualizarAluno();
		header('location:visualizar.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Atualizar dados - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Atualizar dados do aluno </h1>
    <hr>
    		
    <p>Utilize o formulário abaixo para atualizar os dados do aluno.</p>

    <form action="#" method="post">
        
	    <p><label for="nome">Nome:</label>
	    <input type="text" name="nome" id="nome" value="<?=$lerAluno['nome']?>" required></p>
        
        <p><label for="primeira">Primeira nota:</label>
	    <input value="<?=$lerAluno['primeira']?>" name="primeira" type="number" id="primeira" step="0.1" min="0.0" max="10" required></p>
	    
	    <p><label for="segunda">Segunda nota:</label>
	    <input value="<?=$lerAluno['segunda']?>" name="segunda" type="number" id="segunda" step="0.1" min="0.0" max="10" required></p>

        <p>
        <!-- Campo somente leitura e desabilitado para edição.
        Usado apenas para exibição do valor da média -->
            <label for="media">Média:</label>
            <input value="<?=$lerAluno['media']?>" name="media" type="number" id="media" step="0.1" min="0.0" max="10" readonly disabled>
        </p>

        <p>
        <!-- Campo somente leitura e desabilitado para edição 
        Usado apenas para exibição do texto da situação -->
            <label for="situacao">Situação:</label>
	        <input value="<?=$lerAluno['situacao']?>" type="text" name="situacao" id="situacao" readonly disabled>
        </p>
	    
        <button name="atualizar-dados">Atualizar dados do aluno</button>
	</form>    
    
    <hr>
    <p><a href="visualizar.php">Voltar à lista de alunos</a></p>

</div>


</body>
</html>