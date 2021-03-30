<?php
session_start();
require 'topoadm.php';

if(empty($_SESSION['id'])){

    header('location:index.php');                                                                                                                                                  

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css"  >
    <link rel="stylesheet" type="text" href="./css/main.css"  >
    <title>SIS-GENESIS SISTEMA DE GESTÃO</title>
</head>
<body>


<div class="container">
      
    <div class="form">
    <form class="row g-3" action="adm/processa-cadastro-diploma.php" method="POST">
    <section class="test">  
      <p class="text-center">Formulário de Registro do Diploma</p>
      </section>

      <div class="col-md-12">
  <label for="formGroupExampleInput" class="form-label text-uppercase ">Nome</label>
  <input class="form-control form-control-sm"type="text" class="form-control" id="formGroupExampleInput" name="nomedoaluno" placeholder="NOME DO ALUNO" required>
</div>
<div class="col-md-3">
  <label for="formGroupExampleInput" class="form-label text-uppercase ">RG</label>
  <input class="form-control form-control-sm"type="text" class="form-control" id="formGroupExampleInput" name="doc" placeholder="RG DO ALUNO" required>
</div>
<div class="col-md-6">
  <label for="formGroupExampleInput" class="form-label text-uppercase ">curso</label>
  <input class="form-control form-control-sm"type="text" class="form-control" id="formGroupExampleInput" name="curso" placeholder="NOME DO CURSO" required>
</div>
   
  <div class="col-md-3">
  <label for="formGroupExampleInput" class="form-label text-uppercase ">EMEC</label>
  <input class="form-control form-control-sm"type="text" class="form-control" id="formGroupExampleInput" name="emeccurso" placeholder="NÙMERO DE REGISTRO EMEC" required>
</div>
<div class="col-md-6">
  <label for="formGroupExampleInput" class="form-label text-uppercase ">Faculdade Expedição</label>
  <input class="form-control form-control-sm"type="text" class="form-control" id="formGroupExampleInput" name="facexp" placeholder="FACULDADE EXP/DIPLOMA" required>
</div>

<div class="col-md-6">
  <label for="formGroupExampleInput" class="form-label text-uppercase ">EMEC EXPEDIÇÃO</label>
  <input class="form-control form-control-sm"type="text" class="form-control" id="formGroupExampleInput" name="emecFexp" placeholder="EMEC FACULDADE EXPEDIÇÃO" required>
</div>
<div class="col-md-6">
  <label for="formGroupExampleInput" class="form-label text-uppercase ">Faculdade Registro</label>
  <input class="form-control form-control-sm"type="text" class="form-control" id="formGroupExampleInput" name="facregistro" placeholder="FACULDADE REGISTRO DIPLOMA" required>
</div>
<div class="col-md-6">
  <label for="formGroupExampleInput" class="form-label text-uppercase ">EMEC FAC REGISTRO</label>
  <input class="form-control form-control-sm"type="text" class="form-control" id="formGroupExampleInput" name="emecregistro" placeholder="EMEC DA FACULDADE QUE REGISTROU O DIPLOMA" required>
</div>
<div class="col-md-6">
  <label for="formGroupExampleInput" class="form-label text-uppercase ">Data Inicial do curso</label>
  <input class="form-control form-control-sm"type="date" class="form-control" id="formGroupExampleInput" name="datainicialCurso"required>
</div>
<div class="col-md-6">
  <label for="formGroupExampleInput" class="form-label text-uppercase ">Data Final do curso</label>
  <input class="form-control form-control-sm"type="date" class="form-control" id="formGroupExampleInput" name="datafinalCurso"required>
</div>
<div class="col-md-6">
  <label for="formGroupExampleInput" class="form-label text-uppercase ">Registro do diploma</label>
  <input class="form-control form-control-sm"type="date" class="form-control" id="formGroupExampleInput" name="dataregistroDiploma" required>
</div>
<div class="col-md-6">
  <label for="formGroupExampleInput" class="form-label text-uppercase ">Data da Colação</label>
  <input class="form-control form-control-sm"type="date" class="form-control" id="formGroupExampleInput" name="dataColacao" required>
</div>
<div class="col-md-4">
  <label for="formGroupExampleInput" class="form-label text-uppercase ">data do Registro no Dou</label>
  <input class="form-control form-control-sm"type="date" class="form-control" id="formGroupExampleInput" name="dataRegistroDou" required>
</div>
<div class="col-md-4">
  <label for="formGroupExampleInput" class="form-label text-uppercase ">número do processo</label>
  <input class="form-control form-control-sm"type="text" class="form-control" id="formGroupExampleInput" name="numeroProcesso" required>
</div>
<div class="col-md-4">
  <label for="formGroupExampleInput" class="form-label text-uppercase ">número do registro do diploma</label>
  <input class="form-control form-control-sm"type="text" class="form-control" id="formGroupExampleInput" name="registroDiplomaNumero" required>
</div>
<div class="col-md-6">
  <label for="formGroupExampleInput" class="form-label text-uppercase ">número do livro</label>
  <input class="form-control form-control-sm"type="text" class="form-control" id="formGroupExampleInput" name="numLivro" required>
</div>
<div class="col-md-3">
  <label for="formGroupExampleInput" class="form-label text-uppercase ">Número da folha</label>
  <input class="form-control form-control-sm"type="text" class="form-control" id="formGroupExampleInput" name="numFolha"required>
</div>
<div class="col-md-12">
<input class="btn-sm btn-primary" type="submit" value="Cadastrar">
</div>
    </form>

    </div>
    </div>

  
</body>
</html>