<?php
/**
 * Created by PhpStorm.
 * User: Marco Antonio
 * Date: 23/6/2017
 * Time: 6:41 PM
 */

include "config.php";

$conn = new mysqli(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = intval($_GET['q']);
$sel="update tbl_preguntas set leido=1 where id_pregunta=".$id ;  //your query

if (mysqli_query($conn, $sel)===True) {
    //printf($sel);
    //printf("Se marco con éxito como leído.\n");
    printf("Presione SIGUIENTE PREGUNTA.\n");
};

// Get thread id
$t_id=mysqli_thread_id($conn);

// Kill connection
mysqli_kill($conn,$t_id);
mysqli_close($conn);