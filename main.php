<!--
este script se encarga de no permitir la navegacion por algunas paginas si no estas en una session_id
-->
<?php
include 'php/Sinsession.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graficos</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style_graficos.css">

</head>

<body>
    <!-- Tabla de graficos -->
    <div id="graficos">
        <h2>Graficos</h2>
        <iframe width="450" height="260" style="border: 1px solid #cccccc; margin-bottom:10px;" src="https://thingspeak.com/channels/1693298/charts/1?bgcolor=%231B1C1B&color=%2338AD1B&dynamic=true&results=60&title=Temperatura+vs+Tiempo&type=line&xaxis=Tiempo&yaxis=Temperatura&yaxismax=25&yaxismin=0"></iframe>
        <iframe width="450" height="260" style="border: 1px solid #cccccc; margin-bottom:10px;" src="https://thingspeak.com/channels/1693298/charts/2?bgcolor=%231B1C1B&color=%23F50D06&dynamic=true&results=60&title=Presi%C3%B3n+vs+Tiempo&type=line&xaxis=Tiempo&yaxis=Presi%C3%B3n"></iframe>
        <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1693298/charts/3?bgcolor=%231E1D1D&color=%230B03FC&dynamic=true&results=60&title=PH+vs+Tiempo&type=line&xaxis=Tiempo&yaxis=PH&yaxismax=14&yaxismin=0"></iframe>
    </div>

    <!-- Nombre y boton de cerrar sesion -->

    <div class="parent-wrapper" >
        <link rel="stylesheet" type="text/css" href="assets/css/estiloNombreUsuario.css">
        <span class="close-btn glyphicon glyphicon-remove"></span>
        <div class="subscribe-wrapper">
            <?php
            /* Trae el nombre del usuario */
            $usuario = $_SESSION['name'];
            $correo = $_SESSION['usuario'];

            echo "Bienvenido  $correo $usuario-sama <br />";
            ?>
            <div class="submit-btn"> <a href="php/cerrar_sesion.php"> Cerrar sesison </a></div>
            <div class="submit-btn1"> <a href="index.html"> Inicio </a></div>
        </div>
    </div>
    <!-- Js -->
    <div class="container" style="margin-top: 100px;">
        <link rel="stylesheet" href="assets/css/styleLogeado.css">
        <div class="box">
            <h2 class="name">Trucha!</h2>
            <a href="#" class="buy">Info!</a>
            <div class="circle"> </div>
            <img src="assets/images/Tilapia1.png" alt="zapatillas" class="product">

        </div>

        <div class="box">
            <h2 class="name">Trucha Arcoiris!</h2>
            <a href="#" class="buy">Info!</a>
            <div class="circle"> </div>
            <img src="assets/images/Trucha1.png" alt="zapatillas" class="product" id="morado">

        </div>
        <div class="box">
            <h2 class="name">Tilapia Roja!</h2>
            <a href="#" class="buy">Info!</a>
            <div class="circle"> </div>
            <img src="assets/images/carpa.png" alt="zapatillas" class="product" id="rojo">
        </div>

    </div>

    <script src="assets/js/vanilla-tilt.min.js"></script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".box"), {
            max: 25,
            speed: 400
        });
    </script>

</body>

</html>