<?php 
session_start();
include("../funciones.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRINCIPAL |  NIKE</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="../material/logo.png" type="image/x-icon">
</head>

<body class="bg-azul">
    <a name="inicio"></a>
    <!--Header-->
    <div id="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../principal/home.php"><img src="../material/Logo.png" alt="Logo" width="100"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="../principal/home.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../nuevo/index.php">Nuevo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../eliminar/index.php">Eliminar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Entrada</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../venta/index.php">Ventas</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Redes
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item"
                                        href="https://www.facebook.com/profile.php?id=100008011787303&mibextid=ZbWKwL">Facebook</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="https://instagram.com/daniel.m2103?utm_source=qr&igshid=NGExMmI2YTkyZg%3D%3D">Instagram</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://wa.me/qr/RJUPBN3MPCRGO1">Whatsapp</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="../index.php">Cerrar sesión</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--Fin Header-->
    <!--Contenido-->
    <div id="contenido">
        <div class="container bg-rojo txt-blanco py-3">
            <div class="row">
                <h1 class="py-3 text-center">Adquirir más producto</h1>
                <div class="col-12 col-md-4 px-4 p-md-4">
                    <p class="justificar">Aquí se sumará a bodega la cantidad con la que se quiere surtir cierto
                        producto, escribiendo su código en el espacio correspondiente.</p>
                        <table class="table table-striped-columns">
                        <tr>
                            <th colspan="5">Inventario</th>
                        </tr>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>En Bodega</th>
                        </tr>
                        <?php
                        include("bodega5.php");
                        ?>
                    </table>
                </div>
                <div class="col-12 col-md-8 px-4 pb-2 p-md-4">
                    <form method="post" class="bg-oscuro p-3 borde-r">
                        <div class="mb-3">
                            <label for="codigo" class="form-label txt-blanco">Código de producto:</label>
                            <input type="text" class="form-control" id="codigo" placeholder="Ej. A01" name="codigo"
                                required autofocus>
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-outline-light form-control mt-3" value="Buscar producto"
                                name="buscar">
                        </div>
                        <div class="mb-3">
                    </form>
                    <div class="row">
                        <div class="col">
                            <?php
                            include("detalles.php");
                            ?>
                        </div>
                        <div class="col">
                            <form method="post">
                                <div class="mb-3">
                                    <label for="Surtido" class="form-label txt-blanco">Agregar a bodega las siguientes
                                        unidades:</label>
                                    <input type="number" class="form-control" id="Surtido" placeholder="Ej. 10"
                                        name="Surtido" required>
                                </div>
                                <div class="mb-3">
                                    <input type="submit" class="btn btn-outline-light form-control mt-3"
                                        value="Agregar a bodega" name="Agregar">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mb-3">
                        <?php
                        include("entrada.php");
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--Fin Contenido-->
    <!--Footer-->
    <div id="footer" class="bg-negro">
        <div class="container">
            <div class="row text-center p-3">
                <div class="col">
                    <a href="../material/Ayuda.mp4" class="txt-blanco">Ayuda</a>
                </div>
                <div class="col">
                    <a href="#inicio" class="txt-blanco"><img src="../material/Icono.png" alt="Logo" width="100px"></a>
                </div>
                <div class="col">
                    <a href="../material/Ayuda.mp4" class="txt-blanco">Más Información</a>
                </div>
            </div>
        </div>
    </div>
    <!--Fin Footer-->
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>