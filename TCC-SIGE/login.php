<?php
session_start();
?>

<?php include "cabecalho.php"?>



<div id="campos" class="container" >

    <?php

    if(isset($_GET['erro']) and $_GET['erro']==1){
        echo ('Usuário ou senha incorretos.');
    }
    ?>

    <?php

    if (!isset($_SESSION['nome'])){
    ?>
<br>
<form method="post" action="valida.php">
    <div class="form-group">
        <label for="exampleInputEmail1">Usuário</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User">
        <small id="emailHelp" class="form-text text-muted">Exemplo: andrefernandes</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Senha</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="*******">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Não sou um robô.</label>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>

</form>

        <?php
    }else {
        ?>


        <h1>Bem vindo  <?= $_SESSION['nome'] ?></h1>
        <button class="btn btn-primary"><a href="logout.php" style="text-decoration:none">Logout</button>

        <?php
    }
    ?>

</div>

</body>
</html>