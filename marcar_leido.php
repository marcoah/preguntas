<?php

include "config.php";

$conn = new mysqli(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$q = intval($_GET['q']);
$sel="update tbl_preguntas set leido=1 where id_pregunta=".$q ;  //your query

if (mysqli_query($conn, $sel)===True) {
    //printf($sel);
    printf("<H1>Volviendo a las preguntas...\n</H1>");
    //header('refresh:1; url=tabla_preguntas.php');
    header("Location: tabla_preguntas.php");
    printf("<a href='tabla_preguntas.php'>Volver a las preguntas</a>");
};
mysqli_close($conn);