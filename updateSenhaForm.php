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
<script>
    function validarSenha() {
        var senha = document.getElementsByName("senha")[0].value;
        var confirmar = document.getElementsByName("confirmar")[0].value;

        if (senha.trim() === "" || confirmar.trim() === "") {
            alert("Por favor, digite as senhas nos campos.");
            return false;
        }
        return true;
    }
</script>
   
</head>
<body>
<?php
include_once "cLog.php";
include_once "cLogDao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = $_POST["cpf"];
    $dao = new cLogDao();
    $c = $dao->buscarCpf($cpf);
}
?>

<div class="login-form p-5 my-5 bg-info text-white">
    <h1> Nova senha </h1><br>
    <form action="updateSenhaCod.php" method="post" onsubmit="return validarSenha()">
        <input type="text" name="cpf" value="<?php echo isset($c) ? $c->getCpf() : ''; ?>" /> <br/>
        <input type="text" name="senha" placeholder="Digite a nova senha" /> <br/>
        <input type="text" name="confirmar" placeholder="Repita a senha" /> <br/>
        <input type="submit" value="Enviar" class="btn btn-light mt-3"/>
    </form>
</div>
</body>
</html>
