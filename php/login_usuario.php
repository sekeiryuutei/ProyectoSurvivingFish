<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading</title>
    <link rel="stylesheet" href="../Loading/style.css">
</head>

<body>
    <section>
        <div class="loader">
            <span style="--i:1;"></span>
            <span style="--i:2;"></span>
            <span style="--i:3;"></span>
            <span style="--i:4;"></span>
            <span style="--i:5;"></span>
            <span style="--i:6;"></span>
            <span style="--i:7;"></span>
            <span style="--i:8;"></span>
            <span style="--i:9;"></span>
            <span style="--i:10;"></span>
            <span style="--i:11;"></span>
            <span style="--i:12;"></span>
            <span style="--i:13;"></span>
            <span style="--i:14;"></span>
            <span style="--i:15;"></span>
            <span style="--i:16;"></span>
            <span style="--i:17;"></span>
            <span style="--i:18;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
        </div>
    </section>
    <script>
        function saludos() {
            console.log("Hola Mundo");
        }
        setTimeout(saludos, 3000);
    </script>
</body>

</html>
<?php
//trae la llave para conectarse a la base de datos
include 'conexionDB.php';
//inicializa las sesiones
session_start();
//toma los datos de la base de datos para realizar logeo
$correo = $_POST['correo'];
$contrasena = hash('sha512', $_POST['contrasena']);

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena='$contrasena'");
if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['usuario'] = $correo;
    $_SESSION['name'] = $usuario;
    header("location: ../main.php");
    mysqli_close($conexion);
    exit;
} else {
    echo '
        <script>
        onload = ajusta;
        function ajusta() {
            alert("No se encontro usuario, verifique los datos introducidos,niii-san");
            window.location = "../login.php";
        }
        </script>
        ';
}
mysqli_close($conexion);
?>