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
            <a class="navbar-brand" href="#">Registro de Preguntas</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="reg_preguntas.php">Registro</a></li>
                <li class="active"><a href="verpreguntas.php">Ver Preguntas</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="contacto.html">Contacto</a></li>
                <li><a href="reporte.html">Reporte</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    <div class="jumbotron">
        <h3>Pregunta</h3>
        <div id="mensaje"></div>
        <div id="hint"><b>...</b></div>
        <div id="botonleido"></div>
    </div>
    <div id="boton">
        <button type="button" id="cargar" class="btn btn-success" aria-label="Left Align">
            Siguiente Pregunta  <span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span>
        </button>
    </div>
    <div>V.1.0</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#cargar').click(function(e){
            e.preventDefault();
            $.ajax({
                url: 'pantalla.php',
                data: "",
                dataType: 'json',
                success: function(data){
                    console.log("success, cargando datos");
                    var id = data['id_pregunta'];
                    var pregunta = data['pregunta'];
                    var persona = data['nombre_completo'];
                    var mensaje='<h1>'+ pregunta +'</h1><h3>' + persona + '</h3>';
                    var botonleido= '<button type="button" id="leido" class="btn btn-warning" onclick=cambiarleido('+ id +')>Marcar como leido   '+id+'</button>';

                    $('#mensaje').html(mensaje);
                    $('#hint').html('');
                    $('#botonleido').html(botonleido);
                },
                error: function(result) {
                    console.log("Error en la llamada ajax");
                }
            });
        });
    });
</script>

<script type="text/javascript">
    function cambiarleido(str) {
        if (str == "") {
            console.log("Parametro en blanco, cambiarleido");
            document.getElementById("hint").innerHTML = "";
            return;
        } else {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("hint").innerHTML = this.responseText;
                }
            };
            console.log("idpregunta: " + str);
            xmlhttp.open("GET","leido.php?q="+str,true);
            xmlhttp.send();
        }
    }
</script>
</body>
</html>