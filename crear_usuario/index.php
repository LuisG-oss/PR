<?php
session_start();
include("../funciones.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREAR USUARIO |  NIKE</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="../material/Icono.png" type="image/x-icon">
</head>

<body class="bg-azul">
    <div id="formulario">
        <div class="container">
            <div class="row align-items-center justify-content-center vh-100">
                <div class="col-11 col-md-5 p-4 bg-rojo borde-r">
                    <h1 class="txt-blanco text-center my-3">Crear Nuevo Usuario</h1>
                    <form method="post" class="bg-oscuro p-3 borde-r">
                        <div class="mb-3">
                            <label for="nombre" class="form-label txt-blanco">Nombre real:</label>
                            <input type="text" class="form-control" id="nombre"
                                placeholder="Escriba su primer nombre" name="nombre" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label txt-blanco">Nombre de usuario (sin espacios):</label>
                            <input type="text" class="form-control" id="usuario"
                                placeholder="Escriba su nombre de usuario" name="usuario" required>
                        </div>
                        <div class="mb-3">
                            <label for="contra" class="form-label txt-blanco">Contraseña:</label>
                            <input type="password" class="form-control" id="contra" placeholder="Escriba su contraseña"
                                name="contra" required>
                        </div>
                        <div class="mb-3">
                            <label for="contra2" class="form-label txt-blanco">Reescriba su contraseña:</label>
                            <input type="password" class="form-control" id="contra2"
                                placeholder="Escriba su contraseña de nuevo" name="contra2" required>
                        </div>
                        <div class="mb-3">
                            <?php
                            include("nuevo.php");
                            ?>
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-outline-light form-control mt-3"
                                value="Registrar usuario nuevo" name="btn" required>
                        </div>
                    </form>
                    <div class="row text-center mt-3">
                        <div class="col">
                            <a href="../index.php" class="txt-blanco">Iniciar sesión</a>
                        </div>
                        <div class="col">
                            <a href="../material/Ayuda.mp4" class="txt-blanco">Ayuda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>