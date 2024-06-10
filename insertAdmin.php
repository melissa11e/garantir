<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estiloLogin.css"/>
</head>
<body>
<?php
include_once "admin.php";
include_once 'adminDao.php';
include_once 'conexao.php';

$emailAdmin = $_POST['emailAdmin'];
$senhaAdmin = $_POST['senhaAdmin'];

$admin = new Admin(null, $emailAdmin, $senhaAdmin);
$dao = new AdminDao();

if ($dao->inserirAdmin($admin)) {
    echo "<p>Inserido com sucesso</p>";
} 

?>
  
</body>
</html>
