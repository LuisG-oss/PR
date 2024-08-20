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
                <a class="navbar-brand" href="../principal/home.php"><img src="../material/Logo.png" alt="Logo"
                        width="100"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../principal/home.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../nuevo/index.php">Nuevo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../eliminar/index.php">Eliminar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../surtido/index.php">Entrada</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Ventas</a>
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
            <div class="row text-center">
                <h1 class="pb-3">Control de ventas</h1>
                <p class="justificar px-4">Aquí puede cambiar los valores de las ventas escribiendo el código del
                    producto,
                    luego la cantidad que desea vender. Esto hará que se reste de "En_Bodega" y se le sume a "Vendidos"
                    la cantidad escrita luego del codigo.</p>
                <div class="col-12 col-md-2"></div>
                <div class="col-12 col-md-8 px-3 p-md-4">
                    <table class="table table-striped-columns">
                        <tr>
                            <th colspan="5">Inventario</th>
                        </tr>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Precio Unitario</th>
                            <th>Vendidos</th>
                            <th>En Bodega</th>
                        </tr>
                        <?php
                        include("bodega6.php");
                        ?>
                    </table>
                </div>
                <div class="col-12 col-md-2"></div>
            </div>
            <div class="row align-ites-center justify-content-center text-center">
                <div class="col-12 col-md-8 px-3 p-md-4">
                    <form method="POST" class="bg-oscuro borde-r p-3">
                        <h5>VENTA</h5>
                        <div class="row">
                            <div class="col-6 px-3 p-md-4">
                                <div class="mb-3">
                                    <label for="codigo" class="form-label">Codigo del producto:</label>
                                    <input type="text" name="codigo" class="form-control" placeholder="Ej. A01" required
                                        autofocus>
                                </div>
                            </div>
                            <div class="col-6 px-3 p-md-4">
                                <div class="mb-3">
                                    <label for="cantidad" class="form-label">Cantidad vendida:</label>
                                    <input type="number" name="cantidad" class="form-control" placeholder="Ej. 10"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <?php
                            include("venta.php");
                            ?>
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="venta" class="btn btn-outline-light" value="Realizar venta">
                        </div>
                    </form>
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