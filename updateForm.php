<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title>Alteração</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
$cpf = $_POST["cpf"];
$dao = new cLogDao();
$l = $dao->buscarCpf($cpf);
?>

<div class="login-form p-5 my-5 bg-info text-white">
<form action='updateCod.php' method='post'>
<input type="hidden" name="codigo" value="<?php echo $l->getCodigo();?>" /><br/>
<strong style="margin-right: 145px;"> Nome </strong></br>
<input type="text" id="disabledInput" value="<?php echo $l->getNome();?>" disabled/><br/>
<strong style="margin-right: 160px;"> CPF </strong></br>
<input type="text" id="disabledInput" value="<?php echo $l->getCpf();?>" disabled/></br>
<strong style="margin-right: 145px;"> Email </strong></br>
<input type="text" name="email" value="<?php echo $l->getEmail();?>" placeholder="Email"/><br/>
<strong style="margin-right: 125px;"> Telefone </strong></br>
<input type="text" name="telefone" value="<?php echo $l->getTelefone();?>" placeholder="Telefone"/><br/>
<strong style="margin-right: 140px;"> Senha </strong></br>
<input type="text" name="senha" value="<?php echo $l->getSenha();?>" placeholder="Senha"/><br/>
<input type="submit" value="enviar" class="btn btn-light mt-3"/>
</div>
</form>
</body>
</html>
