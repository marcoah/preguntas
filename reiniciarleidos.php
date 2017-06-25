<?php
/**
 * Created by PhpStorm.
 * User: Marco Antonio
 * Date: 24/6/2017
 * Time: 2:16 PM
 */

require('config.php');

$conn = new mysqli(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM tbl_preguntas where leido=1 Order By id_pregunta";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)) {

    $idpregunta= $row['id_pregunta'];

    $sql_update="UPDATE tbl_preguntas SET leido=0 WHERE id_pregunta=".$idpregunta ;

    if (mysqli_query($conn, $sql_update)===True) {
        printf("Se reinicio con exito ".$idpregunta.".\n");
    };
}

$t_id=mysqli_thread_id($conn);
mysqli_kill($conn,$t_id);
mysqli_close($conn);