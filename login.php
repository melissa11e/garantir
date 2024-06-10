<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <title> Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estiloLogin.css"/>
<style>


</style>
</head>
<body>
<?php require_once "loginFunc.php"; 

if (isset($_POST['acessar'])){
    login($connect);
}
?>


<div class="login-form p-5 my-5 bg-info text-white">
<h1> Usuário </h1>
    <form action='' method='post'>
    <input type="email" name="email" placeholder="Digite seu email">
    <input type="password" name="senha" placeholder="Digite sua senha">
</br>
    <input type="submit" name="acessar" value="Acessar" class="btn btn-light mt-3">
</form>
</div>
<div class="conteinerlink">
<a href="cadastro.php" > Não possui cadastro? Crie um aqui </a></br>
<a href="updateSenhaSearch.php" > Esqueceu sua senha? Redefina aqui </a></br>
<a href="loginAdm.php" > Acesse como admin </a>
</div>
</body>

