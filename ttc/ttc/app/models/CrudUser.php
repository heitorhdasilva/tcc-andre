<?php

require 'DBConnection.php';
require 'Cad_user.php';

class CrudUser
{
    private $conexao;

    public function getUsers()
    {
        $this->conexao = DBConnection::getConexao();

        $sql = 'select * from user';

        $resultado = $this->conexao->query($sql);
        $cad_user = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $listaUsers = [];

        foreach ($cad_user as $user) {
            $listaUsers[] = new Cad_user($user['cpf'], $user['nome'],$user['data_nasc'],$user['ocupacao'],$user['sexo'],$user['usuario'], $user['senha']);
        }


        return $listaUsers;

    }

    public function getUser($cpf)
    {
        $this->conexao = DBConnection::getConexao();
        $sql = "select * from user WHERE cpf = $cpf";

        $resultado = $this->conexao->query($sql);
        $user = $resultado->fetch(PDO::FETCH_ASSOC);

        $listaUsers[] = new Cad_user($user['cpf'], $user['nome'],$user['data_nasc'],$user['ocupacao'],$user['sexo'],$user['usuario'],$user['senha']);

        return $listaUsers;
    }

    public function insertUser(Cad_User $user){
        //conexao
        $this->conexao = DBConnection::getConexao();

        //inserir dado
        $sql = "insert into user (cpf,nome,data_nasc,ocupacao,sexo,usuario,senha) values ('{$user->getCpf()}','{$user->getNome()}','{$user->getData()}','{$user->getOcupacao()}','{$user->getSexo()}','{$user->getUsuario()}','{$user->getSenha()}')";

        //erro
        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }

    }
    public function atualizaUser(Cad_user  $user, $cpf){
        $this->conexao = DBConnection::getConexao();
        $dados[] = $user->getCpf();
        $dados[] = $user->getNome();
        $dados[] = $user->getData();
        $dados[] = $user->getOcupacao();
        $dados[] = $user->getSexo();
        $dados[] = $user->getUsuario();
        $dados[] = $user->getSenha();
        $sql = "UPDATE user SET cpf = '$dados[0]', nome = '$dados[1]', data_nasc = '$dados[2]', ocupacao = '$dados[3]',sexo = '$dados[4],usuario = '$dados[5],senha = '$dados[6]'WHERE cpf = $cpf";
        $this->conexao->exec($sql);
    }
    public function excluirAdmin($cpf){
        $this->conexao = DBConnection::getConexao();
        $sql ="delete from user WHERE cpf = $cpf";
        $this->conexao->exec($sql);

    }
    public function acharUser(array $admin){
        $this->conexao = DBConnection::getConexao();
        $login = $admin[0];
        $senha = $admin[1];
        $sql =  "select nome from user where nome = '$login' and cpf = '$senha'";
        $resutado = $this->conexao->query($sql);
        $admin = $resutado->fetch(PDO::FETCH_ASSOC);
        if ($admin != 0){
            return true;
        }else{
            return false;
        }

    }

}

$user = new Cad_user('01361951990','André Fernandes','20001116','Aluno','Masc','Japa','53421');

//$user = new Cad_user('10848256365','laura','20010902','agro','2016176','femi','estudante');
//$crud = new CrudUser();