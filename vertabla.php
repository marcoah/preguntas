<?php
/**
 * Created by PhpStorm.
 * User: Marco Antonio
 * Date: 24/6/2017
 * Time: 3:53 PM
 */

require('config.php');

$conn = new mysqli(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM tbl_preguntas Order By id_pregunta";
$result = mysqli_query($conn, $sql);

echo '

    <table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Pregunta</th>
        <th>Nombre</th>
        <th>Leido (0=No, 1=Si)</th>
    </tr>

';

while($row = mysqli_fetch_array($result)) {

    echo '
    <tr>
        <td>'.$row['id_pregunta'].'</td>
        <td>'.$row['pregunta'].'</td>
        <td>'.$row['nombre_completo'].'</td>
        <td>'.$row['leido'].'</td>
    </tr>
    ';

}

$t_id=mysqli_thread_id($conn);
mysqli_kill($conn,$t_id);
mysqli_close($conn);

echo '</table>';
