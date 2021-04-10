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
  <title>SISDIPLOMA CADASTRO DE USUÁRIO</title>
</head>

<body>


  <div class="container">

    <div class="form">
      <form class="row g-3" action="usuario.php" method="POST">
        <h5 class="text-center">Cadastrar Novo Usuário</h5>
        <div class="col-md-3">
          <label for="formGroupExampleInput" class="form-label text-uppercase ">Cpf</label>
          <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="cpf" placeholder="Digite o CPF do Usuário" required>
        </div>
        <div class="col-md-4">
          <label for="formGroupExampleInput" class="form-label text-uppercase ">Nome</label>
          <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="nomeusuario" placeholder="Nome do Usuário" required>
        </div>
        <div class="col-md-4">
          <label for="formGroupExampleInput2" class="form-label text-uppercase">E-mail</label>
          <input class="form-control form-control-sm" type="email" class="form-control" id="formGroupExampleInput2" name="email" placeholder="E-mail do Usuário" required>
        </div>
        <div class="col-md-4">
          <label for="formGroupExampleInput2" class="form-label text-uppercase">Departamento</label>
          <select name="departamento" class="form-select" aria-label="Default select example " required>
            <option selected>Departamento</option>
            <option value="Acadêmico"> Acadêmico </option>
            <option value="Administrativo"> Administrativo </option>
            <option value="Financeiro"> Financeiro </option>
            <option value="Secretaria">Secretaria</option>

          </select>


        </div>
        <div class="col-md-4">
          <label for="formGroupExampleInput2" class="form-label text-uppercase">Ativar Usuário ?</label>
          <select name="status" class="form-select" aria-label="Default select example" required>
            <option selected>Ativar Login</option>
            <option value="1">S</option>
            <option value="2">N</option>

          </select>
        </div>
        <div class="col-md-3">
          <label for="formGroupExampleInput2" class="form-label text-uppercase">Perfil ?</label>
          <select name="perfil" class="form-select" aria-label="Default select example " required>
            <option selected>Tipo de Perfil</option>
            <option value="1">Administrador</option>
            <option value="2">Usuário</option>

          </select>
        </div>
        <div class="col-md-3">
          <label for="formGroupExampleInput2" class="form-label text-uppercase">Senha</label>
          <input class="form-control form-control-sm" type="password" class="form-control" id="formGroupExampleInput2" name="senha" placeholder="Senha" required>

        </div>
        <div class="col-md-12">
          <input class="btn btn-primary" type="submit" value="Cadastrar">
        </div>
        <div class="nav justify-content-end">
          <a class="nav justify-content-end " href="paineladm.php">

            <img src="icones/voltar.png" width="8%" alt="Clique Para Voltar">
          </a>
      </form>
    </div>
  </div>


</body>

</html>