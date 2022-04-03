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
//toma los datos del registro
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = hash('sha512',$_POST['contrasena']);

//almacena los datos tomados en la base de datos
$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
          VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";
//verificar que no se repita el correo en base de datos
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
if(mysqli_num_rows($verificar_correo)>0){
    echo '
    <script>
    alert("Este correo ya esta registrado!")
    window.location = "../login.php"
    </script>
    ';
    exit();
    mysqli_close($conexion);
}

//verificar que no se repita el usuario en base de datos
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
if(mysqli_num_rows($verificar_usuario)>0){
    echo '
    <script>
    alert("Este nombre de usuario ya esta registrado!")
    window.location = "../login.php"
    </script>
    ';
    exit();
    mysqli_close($conexion);
}
//usando la llave y el codigo mysql agregamos en la tabla usuario, un usuario nuevo.
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    $_SESSION['usuario'] = $correo;
    $_SESSION['name'] = $usuario;
    echo '
    <script> 
        alert("Usuario almacenado con exito");
        window.location = "../main.php"; 
    </script>
    ';
}else{
    echo '
    <script>
        alert("Intentalo de nuevo, no fue posible guardar el usario");
        window.location = "../main.php";
    </script>
    ';  
}
mysqli_close($conexion);
 ?>