<?php
    require_once "src/Aluno.php";
    $aluno = new Aluno;
    $aluno->setId($_GET['id']);
    $lerAluno = $aluno->lerUmAluno();

    if (isset($_POST['atualizar-dados'])) {
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" defer></script>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>Atualizar dados do aluno </h1>
            <hr>
            
            <p>Utilize o formulário abaixo para atualizar os dados do aluno.</p>
            <p><a class="btn btn-primary" href="visualizar.php">Voltar à lista de alunos</a></p>
            
            <form action="#" method="post" class="w-50">
                
                <p class="form-group"><label class="form-label" for="nome">Nome:</label>
                <input class="form-control" type="text" name="nome" id="nome" value="<?=$lerAluno['nome']?>" required></p>
                
                <p class="form-group"><label class="form-label" for="primeira">Primeira nota:</label>
                <input class="form-control" value="<?=$lerAluno['primeira']?>" name="primeira" type="number" id="primeira" step="0.1" min="0.0" max="10" required></p>
                
                <p class="form-group"><label class="form-label" for="segunda">Segunda nota:</label>
                <input class="form-control" value="<?=$lerAluno['segunda']?>" name="segunda" type="number" id="segunda" step="0.1" min="0.0" max="10" required></p>

                <p class="form-group">
                <!-- Campo somente leitura e desabilitado para edição.
                Usado apenas para exibição do valor da média -->
                    <label class="form-label" for="media">Média:</label>
                    <input class="form-control" value="<?=$lerAluno['media']?>" name="media" type="number" id="media" step="0.1" min="0.0" max="10" readonly disabled>
                </p>

                <p class="form-group">
                <!-- Campo somente leitura e desabilitado para edição 
                Usado apenas para exibição do texto da situação -->
                    <label class="form-label" for="situacao">Situação:</label>
                    <input class="form-control" value="<?=$lerAluno['situacao']?>" type="text" name="situacao" id="situacao" readonly disabled>
                </p>
                
                <button class="btn btn-success" name="atualizar-dados">Atualizar dados do aluno</button>
            </form>    
    
            <hr>
    </div>


</body>
</html>