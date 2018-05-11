<?php
require_once "sige/models/CrudUser.php";
$verifica[] = $_POST['login'];
$verifica[] = $_POST['senha'];


$crud = new CrudUser();
$resutado = $crud->acharUser($verifica);
if ($resutado == true){

?>

<br>
<br>
    <pre>
        <?php print_r($crud->getUsers());?>
    </pre>

<button class="btn btn-primary"><a href="logout.php" style="text-decoration:none">Logout</button>

<?php

}else{
    header('Location: index.php');
}

?>

