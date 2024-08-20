<?php
session_start();
include("../funciones.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRINCIPAL | NIKE</title>
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
                            <a class="nav-link active" aria-current="page" href="#">Nuevo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../eliminar/index.php">Eliminar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../surtido/index.php">Entrada</a>
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
            <div class="row text-center">
                <h1 class="py-3">Agregar un Nuevo Producto</h1>
                <div class="col-12 col-md-4 px-4 p-md-4">
                    <p class="justificar">El siguiente formulario se deberá rellenar con los datos deseados, así se
                        podrán guardar estos <b>nuevos productos</b> en la base de datos y así llevar un mejor control visual de
                        los productos en inventario.</p>
                        <table class="table table-striped-columns">
                        <tr>
                            <th colspan="2">Inventario</th>
                        </tr>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                        </tr>
                        <?php
                        include("bodega4.php");
                        ?>
                    </table>
                </div>
                <div class="col-12 col-md-8 px-4 pb-2 p-md-4">
                    <form method="post" class="bg-oscuro p-3 borde-r">
                        <div class="mb-3">
                            <label for="codigo" class="form-label txt-blanco">Código de producto:</label>
                            <input type="text" class="form-control" id="codigo"
                                placeholder="Ej. A01" name="codigo" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="producto" class="form-label txt-blanco">Nombre de producto:</label>
                            <input type="text" class="form-control" id="producto"
                                placeholder="Producto..." name="producto" required>
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label txt-blanco">Precio unitario:</label>
                            <input type="number" class="form-control" id="precio"
                                placeholder="Precio por unidad..." name="precio" required>
                        </div>
                        <div class="mb-3">
                            <label for="bodega" class="form-label txt-blanco">Entrada inicial:</label>
                            <input type="number" class="form-control" id="bodega"
                                placeholder="Cantidad adquirida" name="bodega" required>
                        </div>
                        <div class="mb-3">
                            <?php
                            include("nuevo_producto.php");
                            ?>
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-outline-light form-control mt-3" value="Agregar producto"
                                name="agregar">
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