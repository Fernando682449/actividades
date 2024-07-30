<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="build/css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div>
        <?php 
        include("encabezado.php");
        ?>
    </div>
    
    <?php 
    require("includes/funciones.php");
    $usuarios = listar2();
    ?>
    
    <div class="container mt-5">
        <div class="row">
            <?php foreach ($usuarios as $usuario) : ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="1.png" class="card-img-top" alt="Imagen de usuario">
                        <div class="card-body">
                            
                            <p class="card-text">
                                Nombre: <?php echo $usuario['nombre']; ?><br>
                            </p>
                            <p class="card-text">
                                Apellido: <?php echo $usuario['apellido']; ?><br>
                            </p>
                            <p class="card-text">
                                Teléfono: <?php echo $usuario['telefono']; ?><br>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div>
        <?php 
        include("pie.php");
        ?>
    </div>
</body>
</html>