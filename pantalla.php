<?php
require('config.php');

$conn = new mysqli(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM tbl_preguntas where leido=0 Order By id_pregunta ASC limit 1";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
if (is_array($row))
    echo json_encode($row);

mysqli_close($conn);