<?php
session_start();
?>

<?php include "../cabecalho.php"?>


<!--<div id="campos">-->
<!---->
<!--    --><?php
//
//    if(isset($_GET['erro']) and $_GET['erro']==1){
//        echo ('Usuário ou senha incorretos.');
//    }
//    ?>
<!---->
<!--    --><?php
//
//    if (!isset($_SESSION['nome'])){
//    ?>
<!---->
<!--    <form method="post" action="valida.php">-->
<!--        <input type="text" name="login" placeholder="Usuário"><br><br>-->
<!--        <input type="password" name="senha" placeholder="Senha"><br><br>-->
<!--        <input type="submit" value="Entrar">-->
<!--    </form>-->
<!--    <br>-->
<!--    <br>-->
<!--    <br>-->
<!--</div>-->
<?php
//}else {
//    ?>
<!---->
<!---->
<!--    <h4>Bem vindo  --><?//= $_SESSION['nome'] ?><!--</h4>-->
<!--    <button><a href="logout.php" style="text-decoration:none">Logout</button>-->
<!---->
<!--    --><?php
//}
//?>

<h3 style="margin-left: 800px; color: #8e0000"> LOGIN DO DOCENTE </h3>

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
        <form method="post" action="../valida.php" style="margin-left: 250px; margin-right: 250px; margin-top: 50px">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Não sou um robô.</label>
            </div>
            <button type="submit" class="btn btn-outline-danger">Enviar</button>

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