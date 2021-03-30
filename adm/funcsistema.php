<?php
require 'conexao.php'; //Config configuração da conexão do banco usuário e informações do banco

//Funcion para cadastrar 
function cadUsuario($conexao, $cpf, $nome, $email, $departamento, $stausUsuario, $perfil, $senha)
{
    $SqlCadastro = "INSERT INTO usuario (cpf,nome,email,departamento,perfil,ativo,senha) VALUES('$cpf','$nome','$email','$departamento','$stausUsuario','$perfil','$senha')";

    $exeCadastro = mysqli_query($conexao, $SqlCadastro);

    if ($exeCadastro > 0) {

        header('location:usuarios.php');
    } else {

        echo "Cadastro não Efetuado";

        header('location:cadastro.php');
    }
}
//Function Processa Login do Usuário no Sistema
function logarUsuario($conexao, $login, $senha)
{
    // SELECT DO LOGIN E SENHA DO USUÁRIO
    $queryLogin = "SELECT * FROM usuario WHERE email ='$login' && senha = '$senha' LIMIT 1";

    $resultadoLogin = mysqli_query($conexao, $queryLogin);

    $resultadoDadosUsuario = mysqli_fetch_assoc($resultadoLogin);

    //Array criado  para guardar os dados do usuário encontrado
    $dados = array();

    $dados[] = $resultadoDadosUsuario;

    if ($resultadoDadosUsuario != null) {
        //Criando a session com os dados do login
        $_SESSION['id'] = $dados[0]['email'];
        $_SESSION['nomeuser'] = $dados[0]['nome'];

        $perfilUsuario = $dados[0]['perfil'];

        $login = $dados[0]['email'];

        $updateLogin = atualizaLogin($conexao, $login);

        // return $updateLogin;

        if ($perfilUsuario == 1) {
            header('location:paineladm.php');
        } else {

            header('location:painelusuario.php');
        }
    } else {


        header('location:index.php');
    }
}

//function que faz o registro do último login do usuário
function atualizaLogin($conexao, $id)
{

    $atualuzarLogin = "UPDATE usuario SET login = CURRENT_TIMESTAMP() WHERE usuario.email = '$id'";
    $resultado = mysqli_query($conexao, $atualuzarLogin); // SELECIONANDO INFORMARÇÂO CONFORME O ID

    //echo($resultado);

}

//Funcion que lista todos os usuários do sistemas
function lerUsuarios($conexao)
{

    $sqlUsuario = 'SELECT nome,email,departamento ,cpf FROM  usuario  ORDER BY nome ';

    $resulUsuario = mysqli_query($conexao, $sqlUsuario);

    //Aqui foi criado um array  que vou usar para guardas os dados da query
    $usuarios = array();


    while ($usuario = mysqli_fetch_assoc($resulUsuario)) {

        $usuarios[] = $usuario;
    }

    return $usuarios;
}
//Function Insert Register
function cad_Diploma($conexao, $docaluno, $nome, $curso, $emecCurso, $nomeFexp, $emecFexp, $nomeFregistro, $emecFregistro, $datainicialCurso, $datafinalCurso, $dataregistroDiploma, $dataColacao, $dataRegistroDou, $processoNumero, $registroDiplomaNumero, $numeroLivro, $numeroFolha)
{

    $insertDiploma = " INSERT INTO diploma (cpf,nome ,curso ,emecCurso ,nomeFexp ,
    emecFexp ,nomeFregistro ,emecFregistro ,datainicialCurso ,datafinalCurso ,dataregistroDiploma ,
    dataColacao ,dataRegistroDou ,processoNumero ,	registroDiplomaNumero, numeroLivro ,numeroFolha ) VALUES ('$docaluno','$nome','$curso','$emecCurso','$nomeFexp','$emecFexp','$nomeFregistro','$emecFregistro','$datainicialCurso','$datafinalCurso','$dataregistroDiploma', '$dataColacao', '$dataRegistroDou','$processoNumero',' $registroDiplomaNumero', '$numeroLivro','$numeroFolha')";
    $exeInsertDiploma = mysqli_query($conexao, $insertDiploma);

    return $exeInsertDiploma;
}

/*Function que faz atualização dos registro caso seja solicitada pelo usuário Administrativo
function updateRegistro($conexao, $docaluno, $nome, $curso, $emecCurso, $nomeFexp, $emecFexp, $nomeFregistro, $emecFregistro, $datainicialCurso, $datafinalCurso, $dataregistroDiploma, $dataColacao, $dataRegistroDou, $processoNumero, $registroDiplomaNumero, $numeroLivro, $numeroFolha)
{

    $updateDiploma = " UPDATE  diploma SET (cpf,nome ,curso ,emecCurso ,nomeFexp ,
    emecFexp ,nomeFregistro ,emecFregistro ,datainicialCurso ,datafinalCurso ,dataregistroDiploma ,
    dataColacao ,dataRegistroDou ,processoNumero ,	registroDiplomaNumero, numeroLivro ,numeroFolha ) VALUES ('$docaluno','$nome','$curso','$emecCurso','$nomeFexp','$emecFexp','$nomeFregistro','$emecFregistro','$datainicialCurso','$datafinalCurso','$dataregistroDiploma', '$dataColacao', '$dataRegistroDou','$processoNumero',' $registroDiplomaNumero', '$numeroLivro','$numeroFolha')";
    $exeUpdateDiploma = mysqli_query($conexao, $updateDiploma);


    if($exeUpdateDiploma >=1){

        echo"Registro Atualizado com Sucesso ";

    }else{

        var_dump($exeUpdateDiploma);
    }
    
    


}*/
function consulta($conexao)
{

    //date_format(dataregistroDiploma,'%d/%m/%Y') dataregistroDiploma Formatação da data no mysql

    $sqlDiploma = "SELECT cpf,nome,curso, date_format(dataregistroDiploma,'%d/%m/%Y') dataregistroDiploma FROM  diploma  ORDER BY dataregistroDiploma ";

    $resulUsuario = mysqli_query($conexao, $sqlDiploma);

    //Aqui foi criado um array  que vou usar para guardas os dados da query
    $usuarios = array();


    while ($usuario = mysqli_fetch_assoc($resulUsuario)) {

        $usuarios[] = $usuario;
    }

    return $usuarios;
}

function consultaRegistro($conexao, $id)
{

    //date_format(dataregistroDiploma,'%d/%m/%Y') dataregistroDiploma Formatação da data no mysql

    $sqlDiploma = "SELECT * FROM  diploma where cpf='$id' LIMIT 1";

    $resulUsuario = mysqli_query($conexao, $sqlDiploma);

    //Aqui foi criado um array  que vou usar para guardas os dados da query
    $usuarios = array();


    while ($usuario = mysqli_fetch_assoc($resulUsuario)) {

        $usuarios[] = $usuario;
    }

    return $usuarios;
}
//Funcion delete registro diploma conforme o id
function deletDiploma($conexao, $doc)
{

    $deletDiploma = "DELETE FROM diploma where cpf ='$doc' LIMIT 1";

    $sql = mysqli_query($conexao, $deletDiploma);

    if ($sql > 0) {

        header('location:../listar-diplomas.php');
    } else {

        echo "Não Foi Localizado Dados Para Remoção ! ";
    }
}

//Funcion que lista todos os diplomas registrados
function ler($conexao)
{

    $sql = 'SELECT nome,cpf,curso FROM  diploma  ORDER BY nome ';

    $resulUsuario = mysqli_query($conexao, $sql);

    //Array que armazena o resultado
    $usuarios = array();
    while ($usuario = mysqli_fetch_assoc($resulUsuario)) {

        $usuarios[] = $usuario;
    }

    return ($usuarios);
}
