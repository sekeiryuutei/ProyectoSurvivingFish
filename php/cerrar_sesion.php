<!--este script se encarga de cerrar sesion -->
<?php
session_start();
session_destroy();
header("location: ../login.php");

?>