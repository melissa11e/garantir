<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estiloLogin.css"/>
</head>
<body>
<?php
include_once 'cLog.php';
include_once 'conexao.php';

class cLogDao{
    public function inserir(cLog $l){
        global $conn;
        $sql=$conn->prepare("INSERT INTO cLog(nome,cpf,email,telefone,senha) VALUES(?,?,?,?,?)");
        $p1=$l->getNome();
        $p2=$l->getCpf();
        $p3=$l->getEmail();
        $p4=$l->getTelefone();
        $p5=$l->getSenha();
        $sql->bind_param("sssss", $p1,$p2,$p3,$p4,$p5);
        $sql->execute();
        if ($sql->affected_rows > 0) {
           ?>
            <div class="login-form p-5 my-5 bg-info text-white">
            <h1> Cadastro realizado com sucesso!</h1>
            <div class="alert alert-light">
            <a href="login.php" > Login </a></br>
        </div>

            <?php
    }
    }

    public function excluir(cLog $l){
        global $conn;
        $sql = $conn->prepare("DELETE FROM cLog WHERE cpf = ?");
        $p1= $l->getCpf();
        $sql->bind_param('s',$p1);
        $sql->execute();
        if ($sql->affected_rows > 0) {
            ?>
            <div class="login-form p-5 my-5 bg-info text-white">
            <h1> Sua conta foi excluída.</h1>
            <div class="alert alert-light">
            <a href="paginaAdm.php" > voltar </a></br>
        </div>
            <?php
    }
    }
    
    public function update(cLog $l) {
        global $conn;
        $sql = $conn->prepare("UPDATE cLog SET nome=?, email=?, telefone=?, senha=? WHERE cpf=?");
        $p1 = $l->getNome();
        $p2 = $l->getEmail();
        $p3 = $l->getTelefone();
        $p4 = $l->getSenha();
        $p5 = $l->getCodigo();
        $sql->bind_param("sssss", $p1, $p2, $p3, $p4, $p5);
        $sql->execute();
        
        return $sql->affected_rows > 0;
    }

    public function updateSenha(cLog $c){
        global $conn;
        $sql = $conn->prepare("UPDATE cLog SET senha=? WHERE cpf=?");
        $p1 = $c->getSenha();
        $p2 = $c->getCpf();
        $sql->bind_param("ss", $p1, $p2);
        $sql->execute();
    }
    
    public function listar(){
        global $conn;
        $sql="SELECT codigo,nome,cpf,email,telefone,senha FROM cLog";
        $result=mysqli_query($conn,$sql);
        $lista=array();
        while( $row=$result->fetch_assoc()){
            array_push($lista,new cLog($row['codigo'],$row['nome'],$row['cpf'],$row['email'],$row['telefone'],$row['senha']));
        }
        return $lista;
    }
    public function buscarCodigo($codigo){
        global $conn;
        $nome="";
        $cpf="";
        $email="";
        $telefone="";
        $senha="";
    
        $sql = "SELECT * FROM cLog WHERE codigo=?";
        $query = $conn->prepare($sql);
        $result=$query->bind_param("i",$codigo);
        $query->execute();
        $query->bind_result($codigo,$nome,$cpf,$email,$telefone,$senha);
        if( $query->fetch()) {
            return new cLog($codigo,$nome,$cpf,$email,$telefone,$senha);
    }
}

    public function buscarCpf($cpf){
        global $conn;
        $senha="";
    
        $sql = "SELECT * FROM cLog WHERE cpf=?";
        $query = $conn->prepare($sql);
        $result=$query->bind_param("s",$cpf);
        $query->execute();
        $query->bind_result($codigo, $nome, $cpf, $email, $telefone, $senha);
        if( $query->fetch()) {
            return new cLog($codigo, $nome, $cpf, $email, $telefone, $senha);
    }
}
}
?>
</body>
</html>