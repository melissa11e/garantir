<?php
class consulta{
    private $cdConsulta;
    private $especialidade;
    private $dtConsulta;
    private $horario;
    private $nome;


    function __construct($cdConsulta=null,$especialidade=null,$dtConsulta=null,$horario=null,$nome=null){
       $this->cdConsulta=$cdConsulta;
       $this->especialidade=$especialidade;
       $this->dtConsulta=$dtConsulta;
       $this->horario=$horario;
       $this->nome=$nome;
    }
    public function getCdConsulta(){
        return $this->cdConsulta;
    }public function setCdConsulta($cdConsulta){
        $this->cdConsulta=$cdConsulta;
    }

    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function setEspecialidade($especialidade){
        $this->especialidade=$especialidade;
    }

    public function getDtConsulta(){
        return $this->dtConsulta;
    }public function setDtConsulta($dtConsulta){
        $this->dtConsulta=$dtConsulta;
    }

    public function getHorario(){
        return $this->horario;
    }
    public function setHorario($horario){
        $this->horario=$horario;
    }

    public function getNome(){
        return $this->nome;
    }public function setNome($nome){
        $this->nome=$nome;
    }
}
?>