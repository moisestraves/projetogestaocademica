<?php
require 'topoadm.php';
session_start();
if (empty($_SESSION['id'])) {

    header('location:login.php');
}


?>

<div class="container">

    <h5 class="text-success text-capitalize">Olá, <?php echo $_SESSION['nomeuser']; ?> </h5>






    <div class="menu">
        <ul>
            <ol class="topomenu"> MENU</ol>
            <!-- <li><a href="#">Aluno</li>-->
            <li><a href="cadastrar-diploma.php " target="_self">Cadastrar Diploma</li>
            <li><a href="#" target="_top">Consultar Diplomas</li>
        </ul>


    </div>


</div>