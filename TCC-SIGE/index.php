<?php include "cabecalho.php"?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<div class="btn" aria-label="..." style="margin-left:800px; margin-top:20px; ">

    <a href="login.php"><button type="button" class="btn btn-primary btn-lg">Login</button></a>
    <button type="button" class="btn btn-primary btn-lg ">Cadastro</button>
    <br><br>

</div>


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="imagens/quem%20somos.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="imagens/como%20funciona.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="imagens/contato.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



<?php include "rodape.php"?>