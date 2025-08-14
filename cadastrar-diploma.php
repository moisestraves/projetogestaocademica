<?php
session_start();
require 'topoadm.php';

if (empty($_SESSION['id'])) {

  header('location:index.php');
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
          <p class="text-center">Formulário de Registro do Diploma</p>
        </section>

        <div class="col-md-6">
          <label for="formGroupExampleInput" class="form-label text-capitalize text-end fw-bold ">Nome Completo</label>
          <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="nomedoaluno" placeholder="João da Feliz" required>
        </div>
        <div class="col-md-3">
          <label for="formGroupExampleInput" class="form-label text-capitalize text-end fw-bold ">RG</label>
          <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="doc" placeholder="220.400.720-45" required>
        </div>
        <div class="col-md-3">
          <label for="formGroupExampleInput" class="form-label text-capitalize text-end fw-bold ">CPF</label>
          <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="doc" placeholder="25.400.620-45" required>
        </div>
        <div class="col-md-6">
          <label for="formGroupExampleInput" class="form-label text-capitalize text-end fw-bold ">Nome do Curso</label>
          <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="curso" placeholder="Gestão de RH" required>
        </div>

        <div class="col-md-6">
          <label for="formGroupExampleInput" class="form-label text-capitalize text-end fw-bold ">Código E-mec do Curso</label>
          <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="emeccurso" placeholder="Código E-mec do Curso" required>
        </div>

        <div class="col-md-6">
          <label for="formGroupExampleInput" class="form-label text-capitalize text-end fw-bold ">Instituição de Ensino Expedidora</label>
          <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="facexp" placeholder="Instituição de Ensino Expedidora" required>
        </div>

        <div class="col-md-6">
          <label for="formGroupExampleInput" class="form-label text-capitalize text-end fw-bold ">Instituição de Registradora</label>
          <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="emecFexp" placeholder="Instituição de Registradora" required>
        </div>
        
        <div class="col-md-3">
          <label for="formGroupExampleInput" class="form-label text-capitalize text-end fw-bold ">Ingresso no Curso</label>
          <input class="form-control form-control-sm" type="date" class="form-control" id="formGroupExampleInput" name="emecregistro" placeholder="Ingresso no Curso" required>
        </div>
        <div class="col-md-3">
          <label for="formGroupExampleInput" class="form-label text-capitalize text-end fw-bold ">Conclusão do Curso</label>
          <input class="form-control form-control-sm" type="date" class="form-control" id="formGroupExampleInput" name="datainicialCurso" required>
        </div>
        <div class="col-md-3">
          <label for="formGroupExampleInput" class="form-label text-capitalize text-end fw-bold ">Data de Expedição</label>
          <input class="form-control form-control-sm" type="date" class="form-control" id="formGroupExampleInput" name="datafinalCurso" required>
        </div>
        <div class="col-md-3">
          <label for="formGroupExampleInput" class="form-label text-capitalize text-end fw-bold ">Data  de Registro</label>
          <input class="form-control form-control-sm" type="date" class="form-control" id="formGroupExampleInput" name="dataregistroDiploma" required>
        </div>
        <div class="col-md-3">
          <label for="formGroupExampleInput" class="form-label text-capitalize text-end fw-bold ">Data de Expedição</label>
          <input class="form-control form-control-sm" type="date" class="form-control" id="formGroupExampleInput" name="dataColacao" required>
        </div>
        <div class="col-md-4">
          <label for="formGroupExampleInput" class="form-label text-capitalize text-end fw-bold ">Nº de Expedição</label>
          <input class="form-control form-control-sm" type="number" class="form-control" id="formGroupExampleInput" name="dataRegistroDou" placeholder="Nº de Expedição"required>
        </div>
        <div class="col-md-20">
          <input class="btn-sm btn-primary" type="submit" value="Cadastrar">
         </div>




      </form>
      </form>

    </div>
  </div>
</body>

</html>