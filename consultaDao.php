<?php
include_once("consulta.php");
include_once("Conexao.php");

class consultaDao {

	public function inserir(consulta $c) {
		global $conn;
		$sql=$conn->prepare("INSERT INTO consulta(especialidade,dtConsulta,horario,nome) VALUES(?,?,?,?)");
		$p1 = $c->getEspecialidade();
		$p2 = $c->getDtConsulta();
		$p3 = $c->getHorario();
		$p4 = $c->getNome();
		$sql->bind_param("ssss",$p1,$p2,$p3,$p4);
		$sql->execute();
		if($sql->affected_rows>0) {
			return true;
		}
	}

	public function excluir(consulta $c) {
		global $conn;
		$sql=$conn->prepare("DELETE FROM consulta WHERE nome=?");
		$p1 = $c->getNome();
		$sql->bind_param("s",$p1);
		$sql->execute();
		if($sql->affected_rows>0) {
			return true;
		}
	}
	
	public function alterar(consulta $c) {
	global $conn;
	$sql=$conn->prepare(
	"UPDATE consulta SET especialidade=?,dtConsulta=?,horario=? WHERE nome=?");
    $p1 = $c->getEspecialidade();
    $p2 = $c->getDtContulsa();
    $p3 = $c->getHorario();
    $p4 = $c->getNome();
	$sql->bind_param("sdss",$p1,$p2,$p3,$p4);
	$sql->execute();
	if($sql->affected_rows>0) {
		return true;
	}
  }
  
  public function listar() {
	  global $conn;
	  $sql = "SELECT cdConsulta,especialidade,dtConsulta,horario,nome FROM consulta";
	  $result=mysqli_query($conn,$sql);
	  $lista=array();
	  while( $row = $result->fetch_assoc()) {
		array_push($lista, new consulta($row["cdConsulta"],$row["especialidade"], $row["dtConsulta"],
		  $row["horario"],$row["nome"]));
	  }
	  return $lista;
  }
  
      public function buscarNome($nome) {
        global $conn;
        $especialidade="";
        $dtConsulta="";
        $horario="";
        $nome="";
        $sql = "SELECT * FROM consulta WHERE nome=?";
        $query = $conn->prepare($sql);
        $result=$query->bind_param("s",$nome);
        $query->execute();
        $query->bind_result($especialidade,$dtConsulta,$horario,$nome);
        if( $query->fetch()) {
            return new consulta($especialidade,$dtConsulta,$horario,$nome);
        }
    }

  
  
  
  
}

?>