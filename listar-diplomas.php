<?php
session_start();
require 'adm/conexao.php';

require 'adm/funcsistema.php';

require  'topoadm.php';



if (empty($_SESSION['id'])) {

    header('location:login.php');
}

?>

<div class="container">


    <form method="POST" action="#">
        <h5 class="text-center text-uppercase text-dark bg-white">Diplomas registrados</h5>

        <table class="table text-center table-hover table-sm table-light ">
            <thead class="thead-light  text-uppercase">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">RG</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Abrir</th>

                </tr>
            </thead>
            <?php
            $ListarDiploma = ler($conexao);

            //Laço de Controle da lista de usuários 
            foreach ($ListarDiploma as $diplomas) {
            ?>
                <tr>
                    <td><?= $diplomas['nome']; ?></td>
                    <td><?= $diplomas['cpf']; ?></td>
                    <td><?= $diplomas['curso']; ?></td>

                    <td><a href="consultar-dimplomadm.php?id=<?= $diplomas['cpf']; ?>"target="black" class="btn btn-success btn-sm active" role="button" aria-pressed="true">Consultar</a></td>

                </tr>


            <?php
            } ?>

        </table>


    </form>
<?php
    require 'rodape.php';