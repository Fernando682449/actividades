<?php
require("conexion.php");
$conn = conectar(); 
function insertar($nombre, $apellido, $telefono) {
    $conn = conectar();
    $sql = "INSERT INTO usuario (nombre, apellido, telefono) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $nombre, $apellido, $telefono);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        echo "Datos guardados exitosamente.<br>";
    } else {
        echo "Error en la inserción de datos: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}


function listar(){
    global $conn;
    $sql = "SELECT * FROM usuario";
    $r = mysqli_query($conn, $sql);
    $datos = mysqli_fetch_assoc($r);
    return $datos;
}

function listar2() {
    global $conn;
    $sql = "SELECT * FROM usuario";
    $r = mysqli_query($conn, $sql);
    $datos = [];
    while ($fila = mysqli_fetch_assoc($r)) {
        $datos[] = $fila;
    }
    return $datos;
}
?>
