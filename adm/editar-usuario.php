<?php
session_start();
require 'funcsistema.php';
require '../topoadm.php';

$logiEditar = $_GET['id'];


$dadosUsuario = selectUsuario($conexao,$logiEditar);

//print_r($dadosUsuario);

?>

<div class="container">

<div class="form">
  <form class="row g-3" action="usuario.php" method="POST">
    <h5 class="text-center">Editar Informações do Usuário </h5>
    <div class="col-md-3">
      <label for="formGroupExampleInput" class="form-label text-uppercase ">Cpf</label>
      <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="cpf" value="<?php echo $dadosUsuario[0]['cpf']; ?>">
    </div>
    <div class="col-md-4">
      <label for="formGroupExampleInput" class="form-label text-uppercase ">Nome</label>
      <input class="form-control form-control-sm" type="text" class="form-control" id="formGroupExampleInput" name="nomeusuario" value="<?php echo $dadosUsuario[0]['nome']; ?>">
    </div>
    <div class="col-md-4">
      <label for="formGroupExampleInput2" class="form-label text-uppercase">E-mail</label>
      <input class="form-control form-control-sm" type="email" class="form-control" id="formGroupExampleInput2" name="email" value="<?php echo $dadosUsuario[0]['email']; ?>">
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
        <option selected>S=Ativo | N=Inativo</option>
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
    
    <div class="col-md-12">
      <input class="btn btn-danger" type="submit" value="Atualizar">
    </div>
  </form>
</div>
</div>




