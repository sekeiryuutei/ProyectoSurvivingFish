<!--este script se encarga de no permitir la navegacion por algunas paginas si no estas en una session_id-->
<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("location: index.html");
    session_destroy();
    die();
}

?>