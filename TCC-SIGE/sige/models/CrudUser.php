<?php

require 'DBConnection.php';
require 'Cad_user.php';

class CrudUser
{
    private $conexao;

    public function getUsers()
    {
        $this->conexao = DBConnection::getConexao();

        $sql = 'select * from cad_user';

        $resultado = $this->conexao->query($sql);
        $cad_user = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $listaUsers = [];

        foreach ($cad_user as $user) {
            $listaUsers[] = new Cad_user($user['cpf'], $user['nome'],$user['data_nasc'],$user['curso'],$user['matricula'],$user['sexo'],$user['ocupacao']);
        }


        return $listaUsers;

    }

    public function getUser($cpf)
    {
        $this->conexao = DBConnection::getConexao();
        $sql = "select * from cad_user WHERE cpf = $cpf";

        $resultado = $this->conexao->query($sql);
        $user = $resultado->fetch(PDO::FETCH_ASSOC);

        $listaUsers[] = new Cad_user($user['cpf'], $user['nome'],$user['data_nasc'],$user['curso'],$user['matricula'],$user['sexo'],$user['ocupacao']);

        return $listaUsers;
    }
    public function insertUser(Cad_user $user){
        $this->conexao = DBConnection::getConexao();
        $dados[] = $user->getCpf();
        $dados[] = $user->getNome();
        $dados[] = $user->getData();
        $dados[] = $user->getCurso();
        $dados[] = $user->getMatricula();
        $dados[] = $user->getSexo();
        $dados[] = $user->getOcupacao();
        $this->conexao->exec("insert into cad_user(cpf,nome,data_nasc,curso,matricula,sexo,ocupacao) VALUES('$dados[0]','$dados[1]','$dados[2]','$dados[3]','$dados[4]','$dados[5]','$dados[6]')");

    }
    public function atualizaUser(Cad_user  $user, $cpf){
        $this->conexao = DBConnection::getConexao();
        $dados[] = $user->getCpf();
        $dados[] = $user->getNome();
        $dados[] = $user->getData();
        $dados[] = $user->getCurso();
        $dados[] = $user->getMatricula();
        $dados[] = $user->getSexo();
        $dados[] = $user->getOcupacao();
        $sql = "UPDATE cad_user SET nome = '$dados[1]', data_nasc = '$dados[2]', curso = '$dados[3]', matricula = '$dados[4]', sexo = '$dados[5]', ocupacao = '$dados[6]'WHERE cpf = $cpf";
        $this->conexao->exec($sql);
    }
    public function excluirAdmin($cpf){
        $this->conexao = DBConnection::getConexao();
        $sql ="delete from cad_user WHERE cpf = $cpf";
        $this->conexao->exec($sql);

    }
    public function acharUser(array $admin){
        $this->conexao = DBConnection::getConexao();
        $login = $admin[0];
        $senha = $admin[1];
        $sql =  "select nome from cad_user where nome = '$login' and cpf = '$senha'";
        $resutado = $this->conexao->query($sql);
        $admin = $resutado->fetch(PDO::FETCH_ASSOC);
        if ($admin != 0){
            return true;
        }else{
            return false;
        }

    }

}

$user = new Cad_user('10848256365','laura','20010902','agro','2016176','femi','estudante');
$crud = new CrudUser();


