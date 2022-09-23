<?php
session_start();

require('conexion.php');
include "components/querys.component.php";
$component = new querysComponent();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: index.php");
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
    <link href="vendor/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <title>Tienda</title>
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-secondary topbar static-top shadow">
        <div class="container-fluid  text-white">
            <a class="navbar-brand" href="dashboard.php">TIENDA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="crudProducto/producto.vista.php" role="button">
                            Productos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="crudEntrada/entrada.vista.php" role="button">
                            Entradas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="crudCliente/cliente.vista.php" role="button">
                            Cliente
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="crudProveedor/proveedor.vista.php" role="button">
                            Proveedor
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="crudVenta/venta.vista.php" role="button">
                            Ventas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="crudCategoria/categoria.vista.php" role="button">
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
                    <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
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
                    <a class="dropdown-item" href="login/logout.php">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Salir
                    </a>
                </div>
            </li>
        </ul>
    </nav>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mt-3 text-gray-800">Dashboard</h1>
                        </div>

                        <!-- Total ventas (Diario) -->
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Valor Total Ventas (Diario)</div>
                                                <?php

                                                $sql = "SELECT 
                                                SUM(total_factura)
                                                FROM facturas, salidas 
                                                WHERE YEAR(fecha_salida) = YEAR(CURDATE()) 
                                                AND DAY(fecha_salida) = DAY(CURDATE())";
                                                $result = mysqli_query($conn, $sql);
                                                $count = mysqli_fetch_assoc($result)['SUM(total_factura)']; ?>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count; ?></div>
                                                <!--<?php $component->count("clientes", "id_cliente") ?>-->
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <!-- Cantidad Productos vendidos (Diario) -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Cantidad productos vendidos (Diario)</div>
                                                <?php
                                                $sql = "SELECT SUM(cantidad_salida) 
                                                FROM salidas 
                                                WHERE YEAR(fecha_salida) = YEAR(CURDATE()) 
                                                AND DAY(fecha_salida) = DAY(CURDATE())";
                                                $result = mysqli_query($conn, $sql);
                                                $count = mysqli_fetch_assoc($result)['SUM(cantidad_salida)']; ?>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count; ?></div>
                                                <!--<?php $component->count("clientes", "id_cliente") ?>-->
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-cube fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Valor inventario -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Valor Total Inventario</div>
                                                <?php

                                                $sql = "SELECT SUM(precio_producto) FROM productos";
                                                $result = mysqli_query($conn, $sql);
                                                $count = mysqli_fetch_assoc($result)['SUM(precio_producto)']; ?>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count; ?></div>
                                                <!--<?php $component->count("clientes", "id_cliente") ?>-->
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-archive fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Earnings (Monthly) Card Example -->
                            <!-- <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress progress-sm mr-2">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->

                            <!-- Producto MAS vendido mes -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Producto mas vendido (Mes)</div>
                                                <?php
                                                //include('conexion.php');
                                                $sql = "SELECT nombre_producto, 
                                                SUM(cantidad_salida) 
                                                FROM salidas, productos 
                                                WHERE idProducto_salida = id_producto 
                                                AND YEAR(fecha_salida) = YEAR(CURDATE()) 
                                                AND MONTH(fecha_salida) = MONTH(CURDATE())
                                                GROUP BY nombre_producto 
                                                ORDER BY SUM(cantidad_salida) DESC
                                                LIMIT 1";
                                                $result = mysqli_query($conn, $sql);
                                                $count = mysqli_fetch_assoc($result)['nombre_producto']; ?>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count; ?></div>
                                                <!--<?php $component->count("clientes", "id_cliente") ?>-->
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-arrow-up fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content Row -->
                        <div class="row">

                            <!-- Usuarios -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Usuarios</div>
                                                <?php
                                                include('conexion.php');
                                                $sql = "SELECT COUNT(id_cliente) FROM clientes";
                                                $result = mysqli_query($conn, $sql);
                                                $count = mysqli_fetch_assoc($result)['COUNT(id_cliente)']; ?>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count; ?></div>
                                                <!--<?php $component->count("clientes", "id_cliente") ?>-->
                                            </div>
                                            <div class="col-auto">
                                                <i class="fa fa-user fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Proveedores -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Proveedores</div>
                                                <?php
                                                //include('conexion.php');
                                                $sql = "SELECT COUNT(id_proveedor) FROM proveedores";
                                                $result = mysqli_query($conn, $sql);
                                                $count = mysqli_fetch_assoc($result)['COUNT(id_proveedor)']; ?>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count; ?></div>
                                                <!--<?php $component->count("clientes", "id_cliente") ?>-->
                                            </div>
                                            <div class="col-auto">
                                                <i class="fa fa-users fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Productos -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Productos</div>
                                                <?php
                                                //include('conexion.php');
                                                $sql = "SELECT COUNT(id_producto) FROM productos";
                                                $result = mysqli_query($conn, $sql);
                                                $count = mysqli_fetch_assoc($result)['COUNT(id_producto)']; ?>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count; ?></div>
                                                <!--<?php $component->count("clientes", "id_cliente") ?>-->
                                            </div>
                                            <div class="col-auto">
                                                <i class="fa fa-shopping-cart fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Producto MENOS vendido mes -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-danger shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                    Producto menos vendido (Mes)</div>
                                                <?php
                                                $sql = "SELECT nombre_producto, 
                                                SUM(cantidad_salida) 
                                                FROM salidas, productos 
                                                WHERE idProducto_salida = id_producto 
                                                AND YEAR(fecha_salida) = YEAR(CURDATE()) 
                                                AND MONTH(fecha_salida) = MONTH(CURDATE())
                                                GROUP BY nombre_producto 
                                                ORDER BY SUM(cantidad_salida) ASC
                                                LIMIT 1";
                                                $result = mysqli_query($conn, $sql);
                                                $count = mysqli_fetch_assoc($result)['nombre_producto']; ?>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count; ?></div>
                                                <!--<?php $component->count("clientes", "id_cliente") ?>-->
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-arrow-down fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Content Row -->
                        <div class="row">

                            <!-- Area Chart -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                <div class="dropdown-header">Dropdown Header:</div>
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-area">
                                            <canvas id="myAreaChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pie Chart -->
                            <div class="col-xl-4 col-lg-5">
                                <div class="card shadow mb-4">

                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                <div class="dropdown-header">Dropdown Header:</div>
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-pie pt-4 pb-2">
                                            <canvas id="myPieChart"></canvas>
                                        </div>
                                        <div class="mt-4 text-center small">
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-primary"></i> Direct
                                            </span>
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-success"></i> Social
                                            </span>
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-info"></i> Referral
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

    </body>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</html>