<?php
session_start();
require 'topoadm.php';

if(empty($_SESSION['id'])){

    header('location:login.php');                                                                                                                                                  

}


?>

<div class="nav justify-content-end">
<a class="nav justify-content-end " href="sair.php"  > 
	
<img src="icones/logout-icon-18.png" width="8%" >
</a> 
</div>

<div class="container">


<h2 class="text-center">Painel Administrativo</h2>



<h5 class="text-success text-capitalize">Olá, <?php echo $_SESSION['nomeuser']; ?> </h5> 





</div>

<div class="menu">
<ul>
<ol class="topomenu"> MENU</ol>
<li><a href="#">Aluno</li>
<li><a href="cadastrar-diploma.php "target="_self">Cadastrar Diploma</li>
<li><a href="cadastrar-usuario.php"target="_self">Cadastrar Usuário</li>
<li><a href="usuarios.php" target="_top">Consultar Usuários</li>
</ul>


</div>