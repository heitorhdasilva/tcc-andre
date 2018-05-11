<html>
<head>
<style>
    html{
        text-align: center;
        color: #8e0000;
    }
    h1{
        font-size: 80px;
    }
</style>
</head>
<body>
<h1>Login</h1>
    <div>
        <form action="entrou.php" method="post">
            <label>Usuário</label>
            <input type="text" name="login" id="Login">
            <br>
            <br>
            <label>Senha</label>
            <input type="password" name="senha" id="Senha">
            <br>
            <br>
            <button type="submit" name="enviar" value="login">Entrar</button>
        </form>
    </div>


</body>
</html>