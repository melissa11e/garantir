<?php
$host='localhost';
$db_user='root';
$db_pass='123456';
$db_name='clinicahoje';
$connect =mysqli_connect($host,$db_user,$db_pass,$db_name);
function login($connect){
    if(isset($_POST['acessar']) AND !empty($_POST['emailAdmin'])AND !empty($_POST['senhaAdmin'])){
        $emailAdmin=filter_input(INPUT_POST,'emailAdmin',FILTER_VALIDATE_EMAIL);
        $senhaAdmin=$_POST['senhaAdmin'];
        $query="SELECT * FROM admin WHERE emailAdmin='$emailAdmin' AND senhaAdmin='$senhaAdmin'";
        $executar=mysqli_query($connect,$query);
        $return=mysqli_fetch_Assoc($executar);
        if(!empty($return['emailAdmin'])){
        session_start();
        $_SESSION['nomeAdmin'] = $return['nomeAdmin'];
        $_SESSION['emailAdmin'] = $return['emailAdmin'];
        $_SESSION['ativa'] = TRUE;
        header("location:paginaAdm.php");
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