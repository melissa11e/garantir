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
include_once 'admin.php';
include_once 'conexao.php';

class AdminDao {
    public function inserirAdmin(Admin $a) {
        global $conn;
        $sql = $conn->prepare("INSERT INTO admin (emailAdmin, senhaAdmin) VALUES (?, ?)");
        $p1 = $a->getEmailAdmin();
        $p2 = $a->getSenhaAdmin();
        $sql->bind_param("ss", $p1, $p2);
        $sql->execute();
        if ($sql->affected_rows > 0) {?>
            <div class="login-form p-5 my-5 bg-info text-white">
            <h1> Cadastro realizado com sucesso!</h1>
            <div class="alert alert-light">
            <a href="login.php" > Login </a></br></div>
            <?php
        } else {
            echo "Erro ao inserir.";
        }
    }

    public function excluirAdmin(Admin $a) {
        global $conn;
        $sql = $conn->prepare("DELETE FROM admin WHERE codigoAdmin = ?");
        $p1 = $a->getCodigoAdmin();
        $sql->bind_param('i', $p1);
        $sql->execute();
        if ($sql->affected_rows > 0) {
            echo "Exclusão realizada com sucesso.";
    }
}

    public function updateAdmin(Admin $a) {
        global $conn;
        $sql = $conn->prepare("UPDATE admin SET emailAdmin = ?, senhaAdmin = ? WHERE codigoAdmin = ?");
        $p1 = $a->getEmailAdmin();
        $p2 = $a->getSenhaAdmin();
        $p3 = $a->getCodigoAdmin();
        $sql->bind_param("ssi", $p1, $p2, $p3);
        $sql->execute();
        return $sql->affected_rows > 0;
    }

    public function listarAdmin() {
        global $conn;
        $sql = "SELECT codigoAdmin, emailAdmin, senhaAdmin FROM admin";
        $result = mysqli_query($conn, $sql);
        $lista = array();
        while ($row = $result->fetch_assoc()) {
            array_push($lista, new Admin($row['codigoAdmin'], $row['emailAdmin'], $row['senhaAdmin']));
        }
        return $lista;
    }
}
?>
</body>
</html>