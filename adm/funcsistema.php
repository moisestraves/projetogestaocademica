<?php
require 'conexao.php';//Config configuração da conexão do banco usuário e informações do banco

//Funcion para cadastrar 
function cadUsuario($conexao,$cpf,$nome,$email,$departamento,$stausUsuario,$perfil,$senha){


    $SqlCadastro = "INSERT INTO usuario (cpf,nome,email,departamento,perfil,ativo,senha) VALUES('$cpf','$nome','$email','$departamento','$stausUsuario','$perfil','$senha')";

    $exeCadastro = mysqli_query($conexao,$SqlCadastro);

    if($exeCadastro > 0 ){

       header('location:usuarios.php');

    }else{

        echo"Cadastro não Efetuado";

        header('location:cadastro.php');

    }

}



//Function Processa Login do Usuário no Sistema
function logarUsuario ($conexao,$login,$senha){

    // SELECT DO LOGIN E SENHA DO USUÁRIO
   $queryLogin = "SELECT * FROM usuario WHERE email ='$login' && senha = '$senha' LIMIT 1";

    $resultadoLogin = mysqli_query($conexao,$queryLogin);

    $resultadoDadosUsuario = mysqli_fetch_assoc($resultadoLogin);

    //Array criado  para guardar os dados do usuário encontrado
    $dados = array();

    $dados [] = $resultadoDadosUsuario;

    if($resultadoDadosUsuario !=null){
       //Criando a session com os dados do login
       $_SESSION ['id'] = $dados[0]['email'];
       $_SESSION ['nomeuser'] = $dados[0]['nome'];

       $perfilUsuario = $dados[0]['perfil'];

       $login = $dados[0]['email'];

       $updateLogin = atualizaLogin($conexao,$login);

      // return $updateLogin;

      if($perfilUsuario == 1){
        header('location:paineladm.php');
      }else{

       header('location:painelusuario.php');
      }
  
        
    }else{

        $_SESSION['loginErro'] = "Usuário ou Senha Invalido <br> Verifique os dados do usuário";

        header('location:login.php');

       
    
    
    }

   
}

//function que faz o registro do último login do usuário
function atualizaLogin($conexao,$id){

   $atualuzarLogin = "UPDATE usuario SET login = CURRENT_TIMESTAMP() WHERE usuario.email = '$id'";
   $resultado = mysqli_query($conexao, $atualuzarLogin); // SELECIONANDO INFORMARÇÂO CONFORME O ID
    
   //echo($resultado);

}

//Funcion que lista todos os usuários do sistemas
function lerUsuarios($conexao){

    $sqlUsuario = 'SELECT nome,email,departamento FROM  usuario  ORDER BY nome ';
    
    $resulUsuario = mysqli_query($conexao,$sqlUsuario);

    //Aqui foi criado um array  que vou usar para guardas os dados da query
    $usuarios = array();
 

    while ($usuario = mysqli_fetch_assoc($resulUsuario)) {
       
        $usuarios[] = $usuario;
    }

    return $usuarios;
}

function cad_Diploma($conexao,$docaluno,$nome,$curso,$emecCurso,$nomeFexp,$emecFexp,$nomeFregistro,$emecFregistro,$datainicialCurso,$datafinalCurso,$dataregistroDiploma, $dataColacao, $dataRegistroDou, $processoNumero, $registroDiplomaNumero, $numeroLivro,$numeroFolha){

    $insertDiploma = " INSERT INTO diploma (cpf,nome ,curso ,emecCurso ,nomeFexp ,
    emecFexp ,nomeFregistro ,emecFregistro ,datainicialCurso ,datafinalCurso ,dataregistroDiploma ,
    dataColacao ,dataRegistroDou ,processoNumero ,	registroDiplomaNumero, numeroLivro ,numeroFolha ) VALUES ('$docaluno','$nome','$curso','$emecCurso','$nomeFexp','$emecFexp','$nomeFregistro','$emecFregistro','$datainicialCurso','$datafinalCurso','$dataregistroDiploma', '$dataColacao', '$dataRegistroDou','$processoNumero',' $registroDiplomaNumero', '$numeroLivro','$numeroFolha')";
    $exeInsertDiploma = mysqli_query($conexao,$insertDiploma);

    return $exeInsertDiploma;
}

function consulta($conexao){

//date_format(dataregistroDiploma,'%d/%m/%Y') dataregistroDiploma Formtação da data no mysql

$sqlDiploma = "SELECT cpf,nome,curso, date_format(dataregistroDiploma,'%d/%m/%Y') dataregistroDiploma FROM  diploma  ORDER BY dataregistroDiploma ";
    
$resulUsuario = mysqli_query($conexao,$sqlDiploma );

//Aqui foi criado um array  que vou usar para guardas os dados da query
$usuarios = array();


while ($usuario = mysqli_fetch_assoc($resulUsuario)) {
   
    $usuarios[] = $usuario;
}

return $usuarios;

}

function updateRegistro($conexao,$id){

    //date_format(dataregistroDiploma,'%d/%m/%Y') dataregistroDiploma Formtação da data no mysql
    
    $sqlDiploma = "SELECT * FROM  diploma where cpf='$id' LIMIT 1";
        
    $resulUsuario = mysqli_query($conexao,$sqlDiploma );
    
    //Aqui foi criado um array  que vou usar para guardas os dados da query
    $usuarios = array();
    
    
    while ($usuario = mysqli_fetch_assoc($resulUsuario)) {
       
        $usuarios[] = $usuario;
    }
    
    return $usuarios;
    
    }



?>