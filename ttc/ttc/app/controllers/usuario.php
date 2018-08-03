<?php
require_once '../models/CrudUser.php';
require_once '../models/Cad_user.php';
$acao = $_GET['acao'];

switch ($acao){
    case 'cadastrar':
        if (isset($_POST['enviar'])){
            $user = new Cad_user($_POST['cpf'],$_POST['nome'],$_POST['data']);
            $crud = new CrudUser();
            $crud->insertUser($user);
        }else{
            include '../../index.php';
        }
}

