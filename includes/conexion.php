<?php
function conectar() {
    $conn = mysqli_connect("localhost", "root", "", "tecnologia2");
    if (!$conn) {
        die("Error en la conexion: " . mysqli_connect_error());
    }
    return $conn;
}
?>
