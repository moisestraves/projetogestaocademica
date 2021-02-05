<?php

$servidor="localhost";
$usuario="suportefamp";
$senha="famp@2021";
$banco="fampacademico";


//Conectando com o servidor
$conexao = mysqli_connect($servidor , $usuario , $senha , $banco);



if($conexao){

  
   // var_dump($conexao);

    mysqli_set_charset ($conexao, "utf8");
       
 } 
 


?>