
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css"  >
    <title>SISDIPLOMAS</title>
</head>
<!--Cabeçalho da Pagina Inicial do  Sistema-->
<header>
<h1 class="text-center">Consulta Pública de Diplomas </h1>
<h2 class="text-center fs-4 text">FAMP-Faculdade Marinho Paulista</h2>

</header>


<div class="logo">

<img src="consultabanner1.jpeg"  alt="imagem">
</div>
<body>





<div class="container">
<h5 class="text-center text-uppercase fs-6 text  ">Entre com os dados para efetuar a consulta</h5>

<form method="GET" action="consultardiploma.php">
<div class="mb-3">
 
  <input class="form-control form-control-sm" type="search" class="form-control" id="dados"  name="q" placeholder="Digite Nome do Aluno ou CPF" required>
 
</div>
<button class="btn-outline"type="submit" name="consultar">CONSULTAR</button>

</form>

<footer>

</footer>

</body>

</html>

