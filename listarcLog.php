<!DOCTYPE html>
<hmtl>
<head>
    <meta charsert="ISO-8859-1">
    <title> Listar </title>
</head>
<body>
    <table border='1'>
    <tr>
        <th>Código</th>
        <th>nome</th>
        <th>CPF</th>
        <th>e-mail</th>
        <th>Telefone</th>
        <th>Senha</th>
    </tr>
    <?php
    include_once "cLog.php";
    include_once "cLogDao.php";
    $dao=new cLogDao();
    $lista=$dao->listar();
    foreach($lista as $l){
        echo "<tr><td>".$l->getCodigo()."</td>";
        echo "<td>".$l->getNome()."</td>";
        echo "<td>".$l->getCpf()."</td>";
        echo "<td>".$l->getEmail()."</td>";
        echo "<td>".$l->getTelefone()."</td>";
        echo "<td>".$l->getSenha()."</td></tr>";
    }
?>
</table>
</body>
</html>