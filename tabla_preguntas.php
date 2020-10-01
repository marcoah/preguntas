<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Reporte de Preguntas</title>

    <link href="css/navbar-fixed-top.css" rel="stylesheet">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="reg_preguntas.php">Registro</a></li>
                <li class="active"><a href="tabla_preguntas.php">Ver Preguntas</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="contacto.html">Contacto</a></li>
                <li><a href="reporte.html">Reporte</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

<?php
    require('config.php');

    $conn = new mysqli(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql="SELECT * FROM tbl_preguntas where leido=0 Order By id_pregunta";
    $result = mysqli_query($conn, $sql);

    ?>

    <div id="tabla">
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Pregunta</th>
                <th>Nombre</th>
                <th>Leido (0=No, 1=Si)</th>
            </tr>
            <tr>
                <?php

while($row = mysqli_fetch_array($result)) {
    echo '
    <tr>
        <td>'.$row['id_pregunta'].'</td>
        <td><a href="detalle_pregunta.php?id='.$row['id_pregunta'].'">'.$row['pregunta'].'</a></td>
        <td>'.$row['nombre_completo'].'</td>
        <td>'.$row['leido'].'</td>
    </tr>
    ';
}
mysqli_close($conn);
echo '</table>';
?>
    </div>

    <div id="boton">
        <button type="button" id="recargar" class="btn btn-success" onclick="document.location.reload();" aria-label="Left Align">
            Recargar
        </button>
    </div>
</div>

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