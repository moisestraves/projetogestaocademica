<?php
session_start();
require 'adm/conexao.php';

require 'adm/funcsistema.php';


require 'topoadm.php';


if (empty($_SESSION['id'])) {

    header('location:login.php');
}

?>
<div class="container">


    <form method="POST" action="">
        <h5 class="text-center text-uppercase text-dark bg-white">Diplomas Registrados</h5>

        <table class="table text-center table-hover table-sm table-light ">
            <thead class="thead-light  text-uppercase">
                <tr>
                    <th scope="col">RG</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Data do Registro</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Deletar</th>
                </tr>
            </thead>
            <?php
            $ListarRegistros = consulta($conexao);
            //Laço de Controle da listar de Registros de diploma 
            foreach ($ListarRegistros as $usuario) {

            ?>
                <tr>
                    <td><?= $usuario['cpf']; ?></td>
                    <td><?= $usuario['nome']; ?></td>
                    <td><?= $usuario['curso']; ?></td>
                    <td><?= $usuario['dataregistroDiploma']; ?></td>

                    <td><a href="adm/editar-diploma.php?id=<?= $usuario['cpf']; ?>" class="btn btn-success btn-sm active" role="button" aria-pressed="true">Editar</a></td>
                    <td><a href="adm/excluir-diploma.php?id=<?= $usuario['cpf']; ?>" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Excluir</a></td>
                </tr>


            <?php
            } ?>

        </table>


    </form>