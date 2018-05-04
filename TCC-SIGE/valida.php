<?php
session_start();

function verificaLogin($login, $senha){
    if ($login=='admin' and $senha=='admin'){
        return true;
    }else{
        return false;
    }
}

if (verificaLogin($_POST['login'],$_POST['senha'])){
    $_SESSION['nome'] = "admin";
    header('Location: index.php');
}else{
    header('Location: loginDicente.php?erro=1');
}

