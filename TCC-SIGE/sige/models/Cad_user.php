<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 11/05/18
 * Time: 08:13
 */

class Cad_user
{
    private $cpf;
    private $curso;
    private $matricula;
    private $ocupacao;
    private $nome;
    private $dataNasc;
    private $sexo;

    public function __construct($cpf,$nome,$dataNasc,$curso,$matricula,$sexo,$ocupacao)
    {
        $this->cpf = $cpf;
        $this->curso = $curso;
        $this->matricula = $matricula;
        $this->ocupacao = $ocupacao;
        $this->nome = $nome;
        $this->dataNasc = $dataNasc;
        $this->sexo = $sexo;

    }
    public function getCpf(){$return = $this->cpf;return $return;}
    public function getCurso(){$return = $this->curso;return $return;}
    public function getMatricula(){$return = $this->matricula;return $return;}
    public function getOcupacao(){$return = $this->ocupacao;return $return;}
    public function getNome(){$return = $this->nome;return $return;}
    public function getData(){$return = $this->dataNasc;return $return;}
    public function getSexo(){$return = $this->sexo;return $return;}
}