<!DOCTYPE html>
<html lang="es">

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
<?php include '../util/header.php'; ?>

  <form class = "card col-2 col-md-7 offset-md-3 mt-5" method = "post" action = "cliente.controlador.php">
      <div class="card-header ">
       <h5 class= "card-header">Agregar cliente</h5>
        </div>
    
      <div class="card-body p-md-5">
       <div class="row justify-content-center">
        <div> 

      <div class="row">
        <div class="mb-1 col-6">
         <label for = "cli_codigo" class ="form-label">cliente id:</label>
          <input type = "text" class="form-control" name = "id_cliente" id = "cliente_id" placeholder="Cliente id"><br />
            </div>
            
             <div class="mb-2 col-6">
               <p>Nombre: </p>
                <input class="form-control" name = "nombre_cliente" placeholder="Nombre"><br />
             </div>
         </div>

            <div class="row">
              <div class="mb-2 col-6">
              <p>Apellido: </p>
              <input class="form-control" name = "apellido_cliente" placeholder="Apellido"><br />
            </div>
  
        
            <div class="row">
              <div class="mb-3 col-6">
                <p>Telefono: </p>
                  <input class="form-control" name = "telefono_cliente" placeholder="Telefono"><br />
               </div>

              <div class="mb-3 col-6">
                <p>Correo Electronico: </p>
             <input class="form-control" name = "email_cliente" placeholder="Correo - Electronico">
            </div>

          <p>Direccion: </p>
          <input class="form-control" name = "direccion_cliente" placeholder="name@example.com">
      
          <p>info-demas: </p>
          <textarea class="form-control" name = "info_cliente" placeholder="info demas"></textarea>
          
          <p><br/>
            <button class="btn btn-primary" type="submit" style="width: 120px; height: 60px;">Guardar</button>
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