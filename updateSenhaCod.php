<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Alteração</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estiloLogin.css"/>
    </head>
<?php
include_once "cLogDao.php";
include_once "cLog.php";

$cpf = $_POST["cpf"];
$senha = $_POST["senha"];
$c = new cLog(null, null, $cpf, null, null, $senha);
$dao = new cLogDao();
?>

<body>
<div class="login-form p-5 my-5 bg-info text-white">
    <h1> Alterado </h1>
    <div class="alert alert-light">
    <a href="login.php" > Login </a></br>
</div>
</div>
</body>
</html>
