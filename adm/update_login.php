<pre>
<?php

require 'funcsistema.php';



 {
  $docUsuario = $_POST['cpf'];
  $nomeUsuario = $_POST['nomeusuario'];
  $login = $_POST['email'];
  $depUsuario = $_POST['departamento'];
  $pfUsuario = $_POST['status'];
  $tipoPerfil = $_POST['perfil'];

  var_dump($docUsuario);
  var_dump($nomeUsuario);
  var_dump($login);
  var_dump($depUsuario);
  var_dump($pfUsuario);
  var_dump($tipoPerfil);
}

?>
</pre>