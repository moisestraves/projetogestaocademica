<?php
session_start();
require '../topoadm.php';
require 'funcsistema.php';

if (empty($_SESSION['id'])) {

  header('location:../login.php');
}
//Inserir os Dados do Hidden Para Pegar as Informações do Usuário Para Edição
$id_diploma = $_GET['id'];
/*Chama da Query Consulta de Registro */
$ListarRegistros = updateRegistro($conexao, $id_diploma);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" type="text" href="./css/main.css">
 
</head>

<body>


  <div class="container">

    <div class="form">
      <form class="row g-3" action="update-registrodiploma.php" method="POST">
        <section class="test">
          <p class="text-center">Formulário de Registro do Diploma</p>
        </section>

        <div class="col-md-12">

          <label for="formGroupExampleInput" class="form-label text-uppercase ">Nome</label>
          <input class="form-control form-control-sm" type="text" class="form-control" name="nomedoaluno" value="<?php echo $ListarRegistros[0]['nome']; ?>">
        </div>
        <div class="col-md-3">
          <label for="formGroupExampleInput" class="form-label text-uppercase ">RG</label>
          <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="doc" value="<?php echo $ListarRegistros[0]['cpf']; ?>">
        </div>
        <div class="col-md-6">
          <label for="formGroupExampleInput" class="form-label text-uppercase ">curso</label>
          <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="curso" value="<?php echo $ListarRegistros[0]['curso']; ?>">
        </div>

        <div class="col-md-3">
          <label for="formGroupExampleInput" class="form-label text-uppercase ">EMEC</label>
          <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="emeccurso" value="<?php echo $ListarRegistros[0]['emecCurso']; ?>">
        </div>
        <div class="col-md-6">
          <label for="formGroupExampleInput" class="form-label text-uppercase ">Faculdade Expedição</label>
          <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="facexp" value="<?php echo $ListarRegistros[0]['nomeFexp']; ?>">
        </div>

        <div class="col-md-6">
          <label for="formGroupExampleInput" class="form-label text-uppercase ">EMEC EXPEDIÇÃO</label>
          <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="emecFexp" value="<?php echo $ListarRegistros[0]['emecFexp']; ?>">
        </div>
        <div class="col-md-6">
          <label for="formGroupExampleInput" class="form-label text-uppercase ">Faculdade Registro</label>
          <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="facregistro" value="<?php echo $ListarRegistros[0]['nomeFregistro']; ?>">
        </div>
        <div class="col-md-6">
          <label for="formGroupExampleInput" class="form-label text-uppercase ">EMEC FAC REGISTRO</label>
          <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="emecregistro" value="<?php echo $ListarRegistros[0]['emecFregistro']; ?>">
        </div>
        <div class="col-md-6">
          <label for="formGroupExampleInput" class="form-label text-uppercase ">Data Inicial do curso</label>
          <input class="form-control form-control-sm" type="date" class="form-control" id="formGroupExampleInput" name="datainicialCurso" value="<?php echo $ListarRegistros[0]['datainicialCurso']; ?>">
        </div>
        <div class="col-md-6">
          <label for="formGroupExampleInput" class="form-label text-uppercase ">Data Final do curso</label>
          <input class="form-control form-control-sm" type="date" class="form-control" id="formGroupExampleInput" name="datafinalCurso" value="<?php echo $ListarRegistros[0]['datafinalCurso']; ?>">
        </div>
        <div class="col-md-6">
          <label for="formGroupExampleInput" class="form-label text-uppercase ">Registro do diploma</label>
          <input class="form-control form-control-sm" type="date" class="form-control" id="formGroupExampleInput" name="dataregistroDiploma" value="<?php echo $ListarRegistros[0]['dataregistroDiploma']; ?>">
        </div>
        <div class="col-md-6">
          <label for="formGroupExampleInput" class="form-label text-uppercase ">Data da Colação</label>
          <input class="form-control form-control-sm" type="date" class="form-control" id="formGroupExampleInput" name="dataColacao" value="<?php echo $ListarRegistros[0]['dataColacao']; ?>">
        </div>
        <div class="col-md-4">
          <label for="formGroupExampleInput" class="form-label text-uppercase ">data do Registro no Dou</label>
          <input class="form-control form-control-sm" type="date" class="form-control" id="formGroupExampleInput" name="dataRegistroDou" value="<?php echo $ListarRegistros[0]['dataRegistroDou']; ?>">
        </div>
        <div class="col-md-4">
          <label for="formGroupExampleInput" class="form-label text-uppercase ">número do processo</label>
          <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="numeroProcesso" value="<?php echo $ListarRegistros[0]['processoNumero']; ?>">
        </div>
        <div class="col-md-4">
          <label for="formGroupExampleInput" class="form-label text-uppercase ">número do registro do diploma</label>
          <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="registroDiplomaNumero" value="<?php echo $ListarRegistros[0]['registroDiplomaNumero']; ?>">
        </div>
        <div class="col-md-6">
          <label for="formGroupExampleInput" class="form-label text-uppercase ">número do livro</label>
          <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="numLivro" value="<?php echo $ListarRegistros[0]['numeroLivro']; ?>">
        </div>
        <div class="col-md-3">
          <label for="formGroupExampleInput" class="form-label text-uppercase ">Número da folha</label>
          <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="numFolha" value="<?php echo $ListarRegistros[0]['numeroFolha']; ?>">
        </div>
        <div class="col-md-12">
          <input class="btn-sm btn-primary" type="submit" value="Salvar">
        </div>
      </form>

    </div>
  </div>


</body>

</html>