<!DOCTYPE html>
<html>
<head>
  <meta charset='UTF-8'>
  <title>Alteração</title>
</head>
<body>
<?php
include_once "cLogDao.php";
include_once "cLog.php";
$codigo = intval($_POST["codigo"]);
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$senha = $_POST["senha"];
$l = new cLog($codigo,$nome,$cpf,$email,$telefone,$senha);
$dao = new cLogDao();
if($dao->update($l) ) {
  echo "<p>".$l->getNome()." alterado</p>";
}
?> 
<div class="login-form p-5 my-5 bg-info text-white">
    <h1> Alterado </h1>
    <div class="alert alert-light">
    <a href="paginaAdm.php" > Voltar </a></br>
</div>
 </body>
 </html>
