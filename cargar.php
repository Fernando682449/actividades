<?php
require("includes/conexion.php");

$conn = conectar();

$archivo = fopen("datos.csv", "r");

if ($archivo === false) {
    die("Error al abrir el archivo CSV.");
}

$bandera = true;
while (($data = fgetcsv($archivo)) !== false) {
    if ($bandera) {
        $bandera = false;
        continue;
    }
    $descripcion = mysqli_real_escape_string($conn, $data[0]);
    $nombre = mysqli_real_escape_string($conn, $data[1]);
    $pais = mysqli_real_escape_string($conn, $data[2]);
    $acierto = (int)$data[3];
    $estado = mysqli_real_escape_string($conn, $data[4]);
    $sql = "INSERT INTO preguntas (descripcion, nombre, pais, acierto, estado) 
            VALUES ('$descripcion', '$nombre', '$pais', $acierto, '$estado')";
    
    $r = mysqli_query($conn, $sql);
    
    echo ($r) ? "Inserto correctamente<br>" : "Error al insertar: " . mysqli_error($conn) . "<br>";
}
fclose($archivo);
mysqli_close($conn);
?>
