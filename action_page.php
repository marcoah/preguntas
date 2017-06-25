<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <link href="css/navbar-fixed-top.css" rel="stylesheet">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
</head>

<body>
<?php
/**
 * Created by PhpStorm.
 * User: Marco Antonio
 * Date: 23/6/2017
 * Time: 3:22 PM
 */

$pregunta = $nombre = $correo = $telefono = $empresa = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pregunta = test_input($_POST["mensaje"]);
    $nombre = test_input($_POST["nombre"]);
    $correo = test_input($_POST["email"]);
    $telefono = test_input($_POST["telefono"]);
    $empresa = test_input($_POST["empresa"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

require('config.php');

$conn = new mysqli(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO tbl_preguntas (pregunta, fecha_hora, nombre_completo, correo_e, telefono, empresa) VALUES ('".$pregunta."', now(),'".$nombre."','".$correo."','".$telefono."','".$empresa."')";
if ($conn->query($sql) === TRUE) {

    ?>

    <div class="container">
        <div class="row">
            <h1>La pregunta ha sido guardada satisfactoriamente.</h1>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-6">
                <a class='btn btn-success' href='reg_preguntas.php' role='button'>Agregar Nueva Pregunta</a>
                <a class='btn btn-info' href='index.php' role='button'>Ir al Inicio</a>
            </div>
        </div>
    </div>

<?php

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
