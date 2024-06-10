<!DOCTYPE html>
<html>
<head>
  <meta charset='UTF-8'>
  <title>Cadastro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estiloLogin.css"/>
</head>
<body>
<?php
include_once "consultaDao.php";
include_once "consulta.php";
$especialidade = $_POST['especialidade'];
$formato = "d/m/Y";
$dtConsulta=DateTime::createFromFormat($formato,$_POST["dtConsulta"]);
$horario = $_POST['horario'];
$nome = $_POST["nome"];
$c = new consulta(null,$especialidade,$dtConsulta->format("Y-m-d"),$horario,$nome);
$dao = new consultaDao();
if( $dao->inserir($c) ) {?>

  <div class="login-form p-5 my-5 bg-info text-white"><?php
  echo "<p> Consulta de ".$c->getNome()." inserida</p>";
  ?>
  <div class="alert alert-light">
  <a href="paginaAdm.php" > voltar </a></br>
</div>
  <?php
 
}
?> 
 </body>
 </html>
 