<?php

session_start();
if(empty($_SESSION['id'])){

    header('location:login.php');                                                                                                                                                  

}
echo"<h1> Painel do Usuário</h1>";

?>
