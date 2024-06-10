<!DOCTYPE html>
<head> 
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$host='localhost';
$db_user='root';
$db_pass='123456';
$db_name='clinicahoje';
$connect =mysqli_connect($host,$db_user,$db_pass,$db_name);
function login($connect){
    if(isset($_POST['acessar']) AND !empty($_POST['email'])AND !empty($_POST['senha'])){
        $email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
        $senha=$_POST['senha'];
        $query="SELECT * FROM clog WHERE email='$email' AND senha='$senha'";
        $executar=mysqli_query($connect,$query);
        $return=mysqli_fetch_Assoc($executar);
        if(!empty($return['email'])){
        session_start();

        $_SESSION['nome'] = $return['nome'];
        $_SESSION['email'] = $return['email'];
        $_SESSION['ativa'] = TRUE;
        header("location:pagUsuario.php");
        exit();
        }
    }
    else{
     ?> 
 <div class="alert alert-danger alert-dismissible">
<button type="button" class="close" data-dismiss="alert">
    &times;</button>
    <strong> Insira as informações nos campos abaixo para acessar </strong>
</div>
     <?php
        }

}
?>
</body>