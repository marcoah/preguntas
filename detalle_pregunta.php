<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>Pantalla Preguntas</title>
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
            <img src="img/logo_ciea.png" class="img-responsive" alt="logo ciea" width="119" height="48" />
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="reg_preguntas.php">Registro</a></li>
                <li class="active"><a href="tabla_preguntas.php">Ver Preguntas</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="contacto.html">Contacto</a></li>
                <img src="img/logo_comision.png" class="img-responsive" alt="logo comision" width="52" height="48" />
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<?php
include "config.php";

$conn = new mysqli(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = intval($_GET['id']);

$sql="SELECT * FROM tbl_preguntas where id_pregunta=" . $id . " Order By id_pregunta";


if ($result = $conn->query($sql)) {

while($row = mysqli_fetch_array($result)) {
    $pregunta = $row['pregunta'];
    $nombre = $row['nombre_completo'];
    $fechahora= $row['fecha_hora'];
}
?>

<div class="container">

    <div class="jumbotron">
        <div class="row">
            <div class="col-md-3">
                <img src="img/logo_comision.png" class="img-responsive" width="324" height="300" alt="logo comision" />
            </div>
            <div class="col-md-9">
                <h4>Pregunta <?php echo $nombre; ?></h4>
                <div id="mensaje">
                    <h1><?php echo $pregunta; ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div id="boton">
        <a class="btn btn-info" href="marcar_leido.php?q=<?php echo $id; ?>" role="button">Marcar como leido (<?php echo $id; ?>) <span class="glyphicon glyphicon-ok" aria-hidden="true"></a>

        <a class="btn btn-default" href="tabla_preguntas.php" role="button">Volver a las preguntas<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></a>
    </div>
</div>

<?php
$result->close();
}

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>