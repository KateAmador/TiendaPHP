<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <title>Tienda</title>
</head>

<body>  

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">TIENDA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/TiendaPHP/index.php">Inicio</a>
          </li>
          <!-- <li class="nav-item">
                <a class="nav-link" href="#">Productos</a>
              </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Productos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="agregarProducto.html">Agregar</a></li>
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
              <li><a class="dropdown-item" href="#">Agregar</a></li>
              <!-- <li><a class="dropdown-item" href="modificarProducto.html">Modificar</a></li> -->
              <!-- <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li> -->
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="AgregarEmpleados.html" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Cliente
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="cliente.vista.php">Agregar</a></li>
               <li><a class="dropdown-item"  href =" editar.php">Modificar</a></li>  
              <!-- <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li> -->
            </ul>
          </li>
         

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="AgregarCliente.html" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Proveedor
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="agregarProducto.html">Agregar </a></li>
              <!-- <li><a class="dropdown-item" href="modificarProducto.html">Modificar</a></li> -->
              <!-- <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li> -->
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="agregarProveedor.html" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Ventas
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="agregarProducto.html">Agregar</a></li>
              <!-- <li><a class="dropdown-item" href="modificarProducto.html">Modificar</a></li> -->
              <!-- <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li> -->
            </ul>
          </li>

        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <form method = "post" action = "editar.php">
     <div class="container-fluid">
      <div class="row">
       <div class="card offset-md-4 col-md-4">
          <p>Cliente id: </p>
            <input class="form-control" name = "cli_codigo" placeholder="Cliente id"><br />
  
            <p>Nombre: </p>
               <input class="form-control" name = "nombre" placeholder="Nombre"><br />

                 <p>Apellido: </p>
                  <input class="form-control" name = "apellido" placeholder="Apellido"><br />
  
                    <p>Documento: </p>
                      <input class="form-control" name = "documento" placeholder="Documento"><br />
      
                     <p>Telefono: </p>
                       <input class="form-control" name = "telefono" placeholder="Telefono"><br />
      
                      <p>Correo Electronico: </p>
                       <input class="form-control" name = "correo" placeholder="Correo - Electronico"><br />
      
                      <p>Direccion: </p>
                        <input class="form-control" name = "direccion" placeholder="name@example.com"><br />
      
          <p>info-demas: </p>
          <input class="form-control" name = "info_demas" placeholder="name@example.com"><br />
          
          <p>
            <button class="btn btn-primary" type="submit" style="width: 120px; height: 60px;">editar</button>
          </p>
        
          
        </div>
        <div class="contenedor " style="justify-content: center; height: 50vh; margin: 2%; display: flex;">
         
        </div>
        
            </div>
            </div>
           
  </form> 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>