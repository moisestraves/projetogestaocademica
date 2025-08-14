<?php
require 'funcsistema.php';
    //Criar a função de Update do Registro do Diploma

$docaluno = $_POST['doc']; //<-Número do documento do aluno.
$nome = $_POST['nomedoaluno'];
$curso = $_POST['curso'];
$emecCurso = $_POST['emeccurso']; 
$nomeFexp = $_POST['facexp'];
$emecFexp = $_POST['emecFexp'];
$nomeFregistro = $_POST['facregistro'];
$emecFregistro = $_POST['emecregistro'];
$datainicialCurso = $_POST['datainicialCurso'];
$datafinalCurso = $_POST['datafinalCurso'];
$dataregistroDiploma = $_POST['dataregistroDiploma'];
$dataColacao = $_POST['dataColacao'];
$dataRegistroDou = $_POST['dataRegistroDou'];
$processoNumero = $_POST['numeroProcesso'];
$registroDiplomaNumero = $_POST['registroDiplomaNumero'];
$numeroLivro = $_POST['numLivro'];
$numeroFolha = $_POST['numFolha'];


$atualizar = "UPDATE diploma SET cpf='$docaluno', nome='$nome', curso='$curso', emecCurso ='$emecCurso',
nomeFexp='$nomeFexp',emecFexp='$emecFexp',nomeFregistro='$nomeFregistro',emecFregistro='$emecFregistro',datainicialCurso='$datainicialCurso',datafinalCurso='$datafinalCurso',dataregistroDiploma='$dataregistroDiploma',dataColacao='$dataColacao',dataRegistroDou='$dataRegistroDou',processoNumero='$processoNumero',
registroDiplomaNumero='$registroDiplomaNumero',numeroLivro='$numeroLivro',numeroFolha='$numeroFolha' WHERE cpf='$docaluno'";

$sqlUpdate = mysqli_query($conexao,$atualizar);

if($sqlUpdate > 0){

    header('location:../listar-diplomas.php');
}else {

    echo"Update Nao Realizado";
}


       
?>