
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

<div class="container">




<form class="row g-3" method="GET" action="consultardiploma.php">
 <div class="col-md-12">
 <input  type="search" class="form-control" id="dados"  name="termo" placeholder="Digite Nome do Aluno ou CPF" required>
 </div>
 <div>
 <button type="submit" class="btn btn-primary btn-sm">Pesquisar</button>

 </div>

</form>

</div>
<footer>

</footer>

</body>

</html>

