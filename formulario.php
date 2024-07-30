<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <script>
        function validarFormulario() {
            const nombre = document.getElementById('nombre').value.trim();
            const apellido = document.getElementById('apellido').value.trim();
            const telefono = document.getElementById('telefono').value.trim();

            let errores = [];

            if (nombre === '') {
                errores.push('El campo nombre es obligatorio.');
            }
            if (apellido === '') {
                errores.push('El campo apellido es obligatorio.');
            }
            if (telefono === '') {
                errores.push('El campo teléfono es obligatorio.');
            }

            if (nombre.length > 20) {
                errores.push('El nombre no debe tener más de 20 caracteres.');
            }
            if (apellido.length > 20) {
                errores.push('El apellido no debe tener más de 20 caracteres.');
            }
            if (telefono.length > 8) {
                errores.push('El teléfono no debe tener más de 8 caracteres.');
            }

            if (errores.length > 0) {
                alert(errores.join('\n'));
                return false; 
            }

            return true; 
        }
    </script>
</head>
<body>
    <form action="procesar.php" method="post" onsubmit="return validarFormulario()">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido"><br><br>
        
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono"><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
