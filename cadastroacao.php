<!DOCTYPE html>
<html>
  <meta charset='UTF-8'>
  <title>Cadastro</title>
</head>
<body>
<?php
include_once "cLog.php";
include_once 'cLogDao.php';
 $nome = $_POST['nome'];
 $cpf = $_POST['cpf'];
 $email = $_POST['email'];
 $telefone = $_POST['telefone'];
 $senha = $_POST['senha'];
$log = new cLog(null,$nome,$cpf,$email,$telefone,$senha);
$dao = new cLogDao();
if( $dao->inserir($log) ) {
  echo "<p>".$log->getNome()." inserido</p>";
}
?> 
</body>
</html>