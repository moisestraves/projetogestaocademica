<?php
session_start();
require 'topoadm.php';

if(empty($_SESSION['id'])){

    header('location:index.php');                                                                                                                                                  

}


?>

<div class="nav justify-content-end">
<a class="nav justify-content-end " href="sair.php"  > 
	
<img src="icones/logout-icon-18.png" width="8%" >

</a> 
</div>

<div class="container">

<h1>Painel Administrativo</h1>

<h5 class="text-success text-capitalize">Olá, <?php echo $_SESSION['nomeuser']; ?> </h5> 
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    /* Estilo do menu lateral */
    .menuAdm {
        position: fixed;
        left: 0;
        top: 0;
        height: 100%;
        width: 220px;
        background-color: #2c3e50;
        padding-top: 20px;
        box-shadow: 2px 0 5px rgba(0,0,0,0.2);
    }

    .menuAdm  ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .menuAdm  ul li {
        margin-bottom: 10px;
    }

    .menuAdm  ul li a {
        display: block;
        color: white;
        text-decoration: none;
        padding: 12px 15px;
        transition: background 0.3s;
    }

    .menuAdm  ul li a:hover {
        background-color: #34495e;
    }

    /* Espaço para o conteúdo não ficar embaixo do menu */
    .conteudo {
        margin-left: 240px;
        padding: 20px;
    }
</style>
</head>
<body>

<div class="menuAdm ">
    <ul>
        <li><a href="cadastrar-diploma.php" target="_self">Cadastrar Diploma</a></li>
        <li><a href="listar-diplomas.php" target="_self">Consultar Diploma</a></li>
        <li><a href="cadastrar-usuario.php" target="_self">Cadastrar Usuário</a></li>
        <li><a href="usuarios.php" target="_self">Consultar Usuários</a></li>
    </ul>
</div>

<div class="conteudo">
    <h1>Bem-vindo ao Sistema de Gestão de Diplomas</h1>
    <p>Este sistema foi desenvolvido para facilitar o gerenciamento de diplomas e usuários de forma prática e organizada. Abaixo você encontra as principais funcionalidades disponíveis no menu lateral:</p>
    
    <h2>📜 Cadastrar Diploma</h2>
    <p>Nesta seção, é possível registrar novos diplomas no sistema, informando dados como nome do aluno, curso, data de conclusão e número de registro.</p>
    
    <h2>🔍 Consultar Diploma</h2>
    <p>Permite pesquisar e visualizar diplomas já cadastrados. É possível realizar buscas por nome do aluno, número do diploma ou curso.</p>
    
    <h2>👤 Cadastrar Usuário</h2>
    <p>Aqui você pode adicionar novos usuários que terão acesso ao sistema, definindo informações como nome, e-mail, perfil de acesso e senha inicial.</p>
    
    <h2>📋 Consultar Usuários</h2>
    <p>Exibe a lista de todos os usuários cadastrados, permitindo editar informações, redefinir senhas ou excluir contas, conforme necessário.</p>
    
    <p>Utilize o menu lateral para navegar rapidamente entre as funcionalidades e agilizar sua rotina.</p>
    
</div>

<!--</div>
<section>
<div class="menu">
<ul>
<li><a href="cadastrar-diploma.php "target="black">Cadastrar Diploma</li>
<li><a href="listar-diplomas.php"target="_self">Consultar Diploma</li>
<li><a href="cadastrar-usuario.php"target="_self">Cadastrar Usuário</li>
<li><a href="usuarios.php" target="_self">Consultar Usuários</a></li>
</ul>


</div>
</section>-->

<?php
require 'rodape.php';