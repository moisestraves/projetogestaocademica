<?php
require 'top.php';

require 'adm/funcsistema.php';


//Recebendo o registro para pesquisar Cpf do Aluno

$doc_Aluno = $_GET['id'];

?>

<?php

$ListarRegistros = consultaRegistro($conexao, $doc_Aluno);

//var_dump($ListarRegistros);

if ($ListarRegistros == null) {

    echo "<div class='alert alert-warning' role='alert'>
    Registro Não Localizado!
  </div>";

    die;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text" href="./css/main.css">
    <title>SIS-GENESIS SISTEMA DE GESTÃO</title>
</head>

<body>
    <div class="container">

        <div class="form">
            <form class="row g-3" action="adm/processa-cadastro-diploma.php" method="POST">
                <section class="test">
                    <p class="text-center">Diploma Registrado</p>
                </section>

                <div class="col-md-12">

                    <label for="formGroupExampleInput" class="form-label text-uppercase ">Nome</label>
                    <input class="form-control form-control-sm" type="text" class="form-control" name="nomedoaluno" value="<?php echo $ListarRegistros[0]['nome']; ?> " readonly>
                </div>
                <div class="col-md-3">
                    <!--Campo Hidden-->
                    <input type="hidden" name="id" value="<?php echo $ListarRegistros['cpf']; ?>">
                    <label for="formGroupExampleInput" class="form-label text-uppercase ">RG</label>
                    <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="doc" value="<?php echo $ListarRegistros[0]['cpf']; ?>"readonly>
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput" class="form-label text-uppercase ">curso</label>
                    <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="curso" value="<?php echo $ListarRegistros[0]['curso']; ?>" readonly>
                </div>

                <div class="col-md-3">
                    <label for="formGroupExampleInput" class="form-label text-uppercase ">EMEC</label>
                    <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="emeccurso" value="<?php echo $ListarRegistros[0]['emecCurso']; ?>" readonly>
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput" class="form-label text-uppercase ">Faculdade Expedição</label>
                    <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="facexp" value="<?php echo $ListarRegistros[0]['nomeFexp']; ?>" readonly>
                </div>

                <div class="col-md-6">
                    <label for="formGroupExampleInput" class="form-label text-uppercase ">EMEC EXPEDIÇÃO</label>
                    <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="emecFexp" value="<?php echo $ListarRegistros[0]['emecFexp']; ?>" readonly>
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput" class="form-label text-uppercase ">Faculdade Registro</label>
                    <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="facregistro" value="<?php echo $ListarRegistros[0]['nomeFregistro']; ?>" readonly>
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput" class="form-label text-uppercase ">EMEC FAC REGISTRO</label>
                    <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="emecregistro" value="<?php echo $ListarRegistros[0]['emecFregistro']; ?>" readonly>
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput" class="form-label text-uppercase ">Data Inicial do curso</label>
                    <input class="form-control form-control-sm" type="date" class="form-control" id="formGroupExampleInput" name="datainicialCurso" value="<?php echo $ListarRegistros[0]['datainicialCurso']; ?>" readonly>
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput" class="form-label text-uppercase ">Data Final do curso</label>
                    <input class="form-control form-control-sm" type="date" class="form-control" id="formGroupExampleInput" name="datafinalCurso" value="<?php echo $ListarRegistros[0]['datafinalCurso']; ?>" readonly>
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput" class="form-label text-uppercase ">Registro do diploma</label>
                    <input class="form-control form-control-sm" type="date" class="form-control" id="formGroupExampleInput" name="dataregistroDiploma" value="<?php echo $ListarRegistros[0]['dataregistroDiploma']; ?>" readonly>
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput" class="form-label text-uppercase ">Data da Colação</label>
                    <input class="form-control form-control-sm" type="date" class="form-control" id="formGroupExampleInput" name="dataColacao" value="<?php echo $ListarRegistros[0]['dataColacao']; ?>" readonly>
                </div>
                <div class="col-md-4">
                    <label for="formGroupExampleInput" class="form-label text-uppercase ">data do Registro no Dou</label>
                    <input class="form-control form-control-sm" type="date" class="form-control" id="formGroupExampleInput" name="dataRegistroDou" value="<?php echo $ListarRegistros[0]['dataRegistroDou']; ?>" readonly>
                </div>
                <div class="col-md-4">
                    <label for="formGroupExampleInput" class="form-label text-uppercase ">número do processo</label>
                    <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="numeroProcesso" value="<?php echo $ListarRegistros[0]['processoNumero']; ?>" readonly>
                </div>
                <div class="col-md-4">
                    <label for="formGroupExampleInput" class="form-label text-uppercase ">número do registro do diploma</label>
                    <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="registroDiplomaNumero" value="<?php echo $ListarRegistros[0]['registroDiplomaNumero']; ?>" readonly>
                </div>
                <div class="col-md-6">
                    <label for="formGroupExampleInput" class="form-label text-uppercase ">número do livro</label>
                    <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="numLivro" value="<?php echo $ListarRegistros[0]['numeroLivro']; ?>" readonly>
                </div>
                <div class="col-md-3">
                    <label for="formGroupExampleInput" class="form-label text-uppercase ">Número da folha</label>
                    <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="numFolha" value="<?php echo $ListarRegistros[0]['numeroFolha']; ?>" readonly>
                </div>
                <div class="col-md-12">

                    <a href="adm/editar-diploma.php?id=<?= $ListarRegistros[0]['cpf']; ?>" class="btn btn-outline-primary" role="button" aria-pressed="true">Editar</a>
                    <a href="adm/excluir-diploma.php?id=<?= $ListarRegistros[0]['cpf']; ?>" class="btn btn-danger" role="button" aria-pressed="true">Excluir Registro</a>
                </div>
            </form>

        </div>
    </div>


</body>

</html>