<?php
    require("includes/funciones.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = trim($_POST["nombre"]);
        $apellido = trim($_POST["apellido"]);
        $telefono = trim($_POST["telefono"]);

        $errores = [];

      
        if (empty($nombre)) {
            $errores[] = "El campo nombre es obligatorio.";
        }
        if (empty($apellido)) {
            $errores[] = "El campo apellido es obligatorio.";
        }
        if (empty($telefono)) {
            $errores[] = "El campo teléfono es obligatorio.";
        }

      
        if (strlen($nombre) > 20) {
            $errores[] = "El nombre no debe tener más de 20 caracteres.";
        }
        if (strlen($apellido) > 20) {
            $errores[] = "El apellido no debe tener más de 20 caracteres.";
        }

        
        if (strlen($telefono) > 8) {
            $errores[] = "El teléfono no debe tener más de 8 caracteres.";
        }

        
        if (!empty($errores)) {
            echo "<ul>";
            foreach ($errores as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        } else {
            
            insertar($nombre, $apellido, $telefono);
        }
    } else {
        echo "Acceso no autorizado.";
    }
?>
