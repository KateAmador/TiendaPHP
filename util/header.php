<?php

session_start();
require('../conexion.php');



if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../index.php");
}

$nombre = $_SESSION['nombre_usuario'];
$tipo_usuario = $_SESSION['tipo_usuario'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Tienda</title>
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-secondary topbar mb-4 static-top shadow p-3 mb-5">
        <div class="container-fluid  text-white">
            <a class="navbar-brand" href="../dashboard.php">TIENDA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../dashboard.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../crudProducto/producto.vista.php" role="button">
                            Productos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../crudCliente/cliente.vista.php" role="button">
                            Cliente
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../crudProveedor/proveedor.vista.php" role="button">
                            Proveedor
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../crudVenta/venta.vista.php" role="button">
                            Ventas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../crudCategoria/categoria.vista.php" role="button">
                            Categorias
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <!-- Counter - Alerts -->
                    <span class="badge badge-danger badge-counter">3+</span>
                </a>
                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">
                        Alerts Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle bg-primary">
                                <i class="fas fa-file-alt text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 12, 2019</div>
                            <span class="font-weight-bold">A new monthly report is ready to download!</span>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle bg-success">
                                <i class="fas fa-donate text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 7, 2019</div>
                            $290.29 has been deposited into your account!
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle bg-warning">
                                <i class="fas fa-exclamation-triangle text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 2, 2019</div>
                            Spending Alert: We've noticed unusually high spending for your account.
                        </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-white-600 small"><?php echo $nombre ?></span>
                    <img class="img-profile rounded-circle" src="../img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Perfil
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Configuracion
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../login/logout.php">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Sair
                    </a>
                </div>
            </li>
        </ul>
    </nav>