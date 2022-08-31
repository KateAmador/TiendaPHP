<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Tienda</title>
</head>

<body>
<<<<<<< HEAD
=======
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TIENDA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
                    </li>
                    <!-- <li class="nav-item">
                <a class="nav-link" href="#">Productos</a>
              </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="producto.vista.php">Agregar</a></li>
                            <li><a class="dropdown-item" href="modificarProducto.html">Modificar</a></li>
                            <!-- <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Empleados
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="AgregarEmpleados.html">Agregar</a></li>
                            <!-- <li><a class="dropdown-item" href="modificarProducto.html">Modificar</a></li> -->
                            <!-- <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cliente
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Agregar</a></li>
                            <!-- <li><a class="dropdown-item" href="modificarProducto.html">Modificar</a></li> -->
                            <!-- <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </li>
>>>>>>> feature/RRamirez/act-005

<?php include '../util/header.php'; ?>   


    <form class="card col-12 col-md-6 offset-md-3 mt-5" method="post" action="producto.controlador.php">
        <div class="card-header">
            <h5 class="card-title">Agregar Producto</h5>
        </div>

        <div class="card-body p-md-5">
            <div class="row justify-content-center">

                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                    <div class="mb-3">
                        <label for="nombreProducto" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre y Apellido">
                    </div>
                    
                    <div class="row">                 
                        <div class="mb-3  col-6">
                            <label for="costoProducto" class="form-label">Costo</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Valor de Compra">
                        </div>
                        <div class="mb-3  col-6">
                            <label for="precioProducto" class="form-label">Precio Venta</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Valor de Venta">
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="nombreProveedor" class="form-label">Proveedor</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Selecciona el Proveedor</option>
                            <option value="1">Exito</option>
                            <option value="2">Unica</option>
                            <option value="3">Tulua</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nombreCategoria" class="form-label">Categoria</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Selecciona la Categoria</option>
                            <option value="1">Papeleria</option>
                            <option value="2">Piñateria</option>
                            <option value="3">Aseo</option>
                        </select>
                    </div>

                    <div class="row"> 

                        <div class="mb-3  col-6">
                            <label for="estadoProducto" class="form-label">Estado del Producto</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Selecciona el estado</option>
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>
                        </div>
                        <div class="mb-3  col-6">
                            <label for="cantidadProducto" class="form-label">Cantidad del Producto</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Valor de Compra">
                        </div>     
                    </div>
                    <div class="mb-3">
                        <label for="observaciones" class="form-label">Observaciones</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" value="Guardar">
                    </div>
                </div>
            </div> 
        </div>  
    </form> 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>