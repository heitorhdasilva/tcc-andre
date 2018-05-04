<?php include "../cabecalho.php"?>

<h3 style="margin-left: 700px; color: #8e0000"> CADASTRO DO DISCENTE </h3>

<form style="margin-left: 450px; margin-right: 450px; margin-top: 100px">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Ocupação</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Ex.: Professor">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">CPF</label>
            <div class = "col-sm-10">
                <input placeholder="CPF" type="text" name="cpf" class="form-control" OnKeyPress="formatar('###.###.###-##', this)" >
            </div>
    </div>


    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                    <label class="form-check-label" for="gridRadios1">
                        Masculino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        Feminino
                    </label>
                </div>
            </div>
        </div>

    </fieldset>
    <div class="form-group row">
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                    Não sou um robô
                </label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-outline-danger">Cadastrar</button>
        </div>
    </div>
</form>
