<!DOCTYPE html>
<html>
    <head>
    <title> Resultado </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estiloLogin.css"/>
    </head>

    <body>
<?php
include_once "cLog.php";
include_once "cLogDao.php";

$cpf =$_GET['cpf'];
$dao= new cLogDao();
$l= new cLog(null,null,$cpf,null,null,null );
echo "<p>";
if( $dao->excluir($l) ) {
  echo "excluído";
}
echo "</p>";
?>
<div class="login-form p-5 my-5 bg-info text-white">
            <h1> Sua conta foi excluída.</h1>
            <div class="alert alert-light">
            <a href="paginaAdm.php" > voltar </a></br>
        </div>
    </body>
</html>
