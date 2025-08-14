<?php


$servidor="localhost";
$usuario="gen01";
$senha="RR5KzlpPLzizEZXr";
$banco="genesis";


//Conectando com o servidor
$conexao = mysqli_connect($servidor , $usuario , $senha , $banco);



if($conexao){

  
   // var_dump($conexao);

    mysqli_set_charset ($conexao, "utf8");
       
 } 
 


?>