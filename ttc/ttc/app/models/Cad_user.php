<?php


class Cad_user
{
    private $cpf;
    private $nome;
    private $dataNasc;
    private $ocupacao;
    private $sexo;
    private $usuario;
    private $senha;

    public function __construct($cpf=null,$nome=null,$dataNasc=null,$ocupacao=null,$sexo=null,$usuario=null,$senha=null)
    {
        $this->cpf =      $cpf;
        $this->nome =     $nome;
        $this->dataNasc = $dataNasc;
        $this->ocupacao = $ocupacao;
        $this->sexo =     $sexo;
        $this->sexo =     $usuario;
        $this->sexo =     $senha;

    }
    public function getCpf(){return  $this->cpf;}
    public function getNome(){return  $this->nome;}
    public function getData(){return $this->dataNasc;}
    public function getOcupacao(){return $this->ocupacao;}
    public function getSexo(){return $this->sexo;}
    public function getUsuario(){return $this->usuario;}
    public function getSenha(){return $this->senha;}

    public function setCpf($cpf): void{$this->cpf = $cpf;}
    public function setNome($nome): void{$this->nome = $nome;}
    public function setDataNasc($dataNasc): void{$this->dataNasc = $dataNasc;}
    public function setOcupacao($ocupacao): void{$this->ocupacao = $ocupacao;}
    public function setSexo($sexo): void{$this->sexo = $sexo;}
    public function setUsuario($usuario): void{$this->usuario = $usuario;}
    public function setSenha($senha): void{$this->senha = $senha;}


}
