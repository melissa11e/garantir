<?php
class cLog{
    private $codigo;
    private $nome;
    private $cpf;
    private $email;
    private $telefone;
    private $senha;
  

    function __construct($codigo = null, $nome = null, $cpf = null, $email = null, $telefone = null, $senha = null){

        $this->codigo=$codigo;
        $this->nome=$nome;
        $this->cpf=$cpf;
        $this->email=$email;
        $this->telefone=$telefone;
        $this->senha=$senha;
  
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($codigo){
        $this->codigo=$codigo;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome=$nome;
    }

    public function getCpf(){
        return $this->cpf;
    }
    public function setCpf($cpf){
        $this->cpf=$cpf;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone=$telefone;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($senha){
        $this->senha=$senha;
    }
}
?>