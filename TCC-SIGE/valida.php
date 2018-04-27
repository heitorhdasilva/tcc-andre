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
    $_SESSION['nome'] = "Admin";
    header('Location: index.php');
}else{
    header('Location: login.php?erro=1');
}

