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
    <!-- iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>
    <?php include '../util/header.php'; ?>
    <?php include_once ('../conexion.php')?>
    <?php 
    $mostrar = "SELECT * FROM clientes";
		$result = mysqli_query($conn, $mostrar) or die('Consulta fallida: ' . mysql_error());
?>

    <form class="card col-5 col-md-5 offset-md-3 mt-5" method="post" action="cliente.controlador.php">
        <div class="card-header ">
            <h5 class="card-header">Agregar cliente</h5>
        </div>

        <div class="card-body p-md-5">
            <div class="row justify-content-center ">
                <div>

                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="cli_codigo" class="form-label">cliente id:</label>
                            <input type="text" class="form-control" name="id_cliente" id="cliente_id"
                                placeholder="Cliente id"><br />
                        </div>

                        <div class="mb-3 col-6">
                            <p>Nombre: </p>
                            <input class="form-control" name="nombre_cliente" placeholder="Nombre"><br />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-6">
                            <p>Apellido: </p>
                            <input class="form-control" name="apellido_cliente" placeholder="Apellido"><br />
                        </div>
                        <div class="mb-3 col-6">
                            <p>Telefono: </p>
                            <input class="form-control" name="telefono_cliente" placeholder="Telefono"><br />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-6">
                            <p>Email: </p>
                            <input class="form-control" name="email_cliente" placeholder="Email">
                        </div>

                        <div class="mb-3 col-6">
                            <p>Direccion: </p>
                            <input class="form-control" name="direccion_cliente" placeholder="Direccion">
                        </div>
                    </div>

                    <p>info-demas: </p>
                    <textarea class="form-control" name="info_cliente" placeholder="info demas"></textarea>

                    <p><br />
                        <button class="btn btn-primary" type="submit" style="width: 120px; height: 60px;"
                            name="cliente_guardar" value="guardar">Guardar</button>
                    </p>
                </div>
                <div class="contenedor " style="justify-content: center; height: 0vh; margin: 2%; display: flex;">
                </div>
            </div>
        </div>
    </form>
    </div>
    </div>
    <hr />
    <div class="card">

        <p>Datos Guardados</P>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-30">
                    <div class="card">
                        <div class="car-header">
                            <h5>Tabla Clientes</h5>
                        </div>
                        <div class="p-4">
                            <table class="table table-striped align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">nombre</th>
                                        <th scope="col">apellido</th>
                                        <th scope="col">Telefono</th>
                                        <th scope="col">email</th>
                                        <th scope="col">Direccion</th>
                                        <th scope="col">info demas</th>
                                        <th scope="col" colspan="2">opciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <thead>
                                        </tr>
                                    </thead>
                                    <?php while ($row = mysqli_fetch_array($result)){?>
                                    <tr>
                                        <td><?php echo $row['id_cliente'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?>
                                        </td>
                                        <td><?php echo $row['nombre_cliente'] ?></td>
                                        <td><?php echo $row['apellido_cliente'] ?></td>
                                        <td><?php echo $row['telefono_cliente'] ?></td>
                                        <td><?php echo $row['email_cliente'] ?></td>
                                        <td><?php echo $row['direccion_cliente'] ?></td>
                                        <td><?php echo $row['info_cliente'] ?></td>
                                        <td class="text-succes"><a href="cliente.controlador.php"><i
                                                    class="bi bi-pencil-square"></i></a></td>
                                        <td class="text-danger"><a href="#"><i class="bi bi-trash"></i></a></td>
                                    </tr>
                                    <?php
                                  }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



            </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>

</html>