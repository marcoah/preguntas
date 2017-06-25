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

    <title>Registro de Preguntas</title>

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
                <li class="active"><a href="reg_preguntas.php">Registro</a></li>
                <li><a href="tabla_preguntas.php">Ver Preguntas</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="contacto.html">Contacto</a></li>
                <li><a href="reporte.html">Reporte</a></li>
                <img src="img/logo_comision.png" class="img-responsive" alt="logo comision" width="52" height="48" />
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    <h2>Registrar una Pregunta</h2>
    <form class="form-horizontal" action="action_page.php" method="post">
        <div class="form-group">
            <label for="mensaje" class="control-label col-lg-2 col-sm-2 col-xs-2">Pregunta:</label>
            <div class="col-lg-10 col-sm-10 col-xs-10">
                <textarea name="mensaje" class="form-control" placeholder="Su pregunta aqui" rows="4"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="nombre" class="control-label col-lg-2 col-sm-2 col-xs-2">Nombre:</label>
            <div class="col-lg-10 col-sm-10 col-xs-10">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-lg-2 col-sm-2 col-xs-2" for="email">Email:</label>
            <div class="col-lg-10 col-sm-10 col-xs-10">
                <input type="email" name="email" class="form-control" placeholder="Correo" >
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-lg-2 col-sm-2 col-xs-2" for="Telefono">Telefono:</label>
            <div class="col-lg-10 col-sm-10 col-xs-10">
                <input type="text" name="telefono" class="form-control" placeholder="Telefono">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-lg-2 col-sm-2 col-xs-2" for="pwd">Empresa:</label>
            <div class="col-lg-10 col-sm-10 col-xs-10">
                <input type="text" name="empresa" class="form-control" placeholder="Empresa">
            </div>
        </div>

        <div class="form-group" align="center">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-6">
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-info">Limpiar</button>
                </div>
            </div>
        </div>

    </form>
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