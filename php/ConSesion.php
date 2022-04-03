<!--este script se encarga de enviarte a mian si ya estas logeado -->
<?php
session_start();
if(isset($_SESSION['usuario'])){
    header("location: main.php");
}
?>