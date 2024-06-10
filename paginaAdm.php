<!DOCTYPE html>
<html>
<head>
<title> Página de usuário </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="estiloInicial.css"/>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
<script>
  $( function() {
    $( "#dtConsulta" ).datepicker({dateFormat:'dd/mm/yy'});
  } );
  </script>
</head>
<body>
    <div class="containerp p-0 my-0 border">
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i></label>
        <ul>
        <button onclick="window.location.href='excluirCadastro.html'"class="btn btn-light mt-3" >Excluir cliente</button></br> </ul>
<ul> <button onclick="window.location.href='listarcLog.php'"class="btn btn-light mt-3" >Vizualizar clientes</button></br></ul>
<ul> <button onclick="window.location.href='updateSearch.php'"class="btn btn-light mt-3" >Atualizar clientes</button></br></br>
        </ul>
        <label class="logo">Seja bem-vindo!</label>

</nav>

<div class="container p-3 my-3 bg-light">

<div class="row">
    <div class="col-sm-6">
 <div class="login-form p-5 my-5 bg-info text-white">
 <h1> Marcar consulta </h1>
 <form action='insertConsulta.php' method='post'> 
    <strong style="margin-right: 90px;"> Especialidade </strong></br>
    <input type="text" name="especialidade" placeholder="Digite a especialidade"/><br/>

    <strong style="margin-right: 155px;"> Data </strong></br>
    <input type="text" name="dtConsulta" id="dtConsulta" placeholder="Escolha a data"/><br/>

    <strong style="margin-right: 130px;"> Horário </strong></br>
    <input type="text" name="horario" placeholder="Digite o horário"/><br/>
    
    <strong style="margin-right: 145px;"> Nome </strong></br>
    <input type="text" name="nome" placeholder="Digite seu nome"/><br/>
    <input type="submit" value="Enviar" class="btn btn-light mt-3"/>
    </form>
</div>

</div>

<div class="col-sm-6">
    <div class= "container p-3 my-3 bg-white text-black">
<table border='2'>
<tr>
<th>Código</th>
<th>Especialidade</th>
<th>Data</th>
<th>Horário</th>
<th>Nome</th>
</tr>
<?php
include_once "consulta.php";
include_once "consultaDao.php";
$dao=new consultaDao();
$lista=$dao->listar();
$formato = "Y-m-d";
foreach($lista as $l){
    $dtConsulta = DateTime::createFromFormat($formato,$l->getDtConsulta());
    echo "<tr><td>".$l->getCdConsulta()."</td>";
    echo "<td>".$l->getEspecialidade()."</td>";
    echo "<td>".$dtConsulta->format("d/m/Y")."</td>";
    echo "<td>".$l->getHorario()."</td>";
    echo "<td>".$l->getNome()."</td></tr>";
}
?>
</table>
</div>
</div>
</div>



</div>



</body>
</html>