<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Tienda</title>
    <!-- iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>
    <?php include '../php/util/header.php';  ?>

    <h3>Agregar un nuevo cliente</h3>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#guardar">
        Agregar +
    </button>

    <!-- Modal guardar -->
    <form method="POST" action="cliente.controlador.php">
        <div class="modal fade" id="guardar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="exampleModalLabel">Actalizar Datos</h5>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div class="mb-3 col-2">
                                <label for="id_cliente" class="form-label">ID</label>
                                <input type="text" class="form-control" name="id_cliente">
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="nombre_cliente" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre_cliente" placeholder="Nombre cliente" required>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="apellido_cliente" class="form-label">apellido</label>
                                    <input type="text" class="form-control" name="apellido_cliente" placeholder="apellido_cliente" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="cliente_telefono" class="form-label">telefono</label>
                                    <input type="number" class="form-control" name="telefono_cliente" placeholder="telefono_cliente" required>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="email_cliente" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email_cliente" placeholder="Email_cliente" required>
                                </div>

                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="direccion_cliente" class="form-label">direccion</label>
                                    <input type="text" class="form-control" name="direccion_cliente" placeholder="direccion_cliente" required>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="info_cliente" class="form-label">info demas</label>
                                    <input type="text" class="form-control" name="info_cliente" placeholder="Info demas" required>
                                </div>

                            </div>
                        </div>
                        <p><br />
                            <button class="btn btn-primary" type="submit" style="width: 120px; height: 60px;" name="cliente_guardar" value="guardar">Guardar</button>


                        </p>

                    </div>
                </div>
                <div class="contenedor " style="justify-content: center; height: 0vh; margin: 2%; display: flex;">
                </div>
            </div>
        </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!-- editar cliente  -->
    <form method="POST" action="cliente.controlador.php">
        <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="exampleModalLabel">Actalizar Datos</h5>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div class="mb-3 col-2">
                                <label for="id_cliente" class="form-label">ID</label>
                                <input type="text" class="form-control" id="id_cliente" name="id_cliente" readonly onmousedown="return false;">
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="nombre_cliente" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" placeholder="Nombre cliente" required>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="apellido_cliente" class="form-label">apellido</label>
                                    <input type="text" class="form-control" id="apellido_cliente" name="apellido_cliente" placeholder="apellido_cliente" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="cliente_telefono" class="form-label">telefono</label>
                                    <input type="number" class="form-control" id="telefono_cliente" name="telefono_cliente" placeholder="telefono_cliente" required>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="email_cliente" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email_cliente" name="email_cliente" placeholder="Email_cliente" required>
                                </div>

                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="direccion_cliente" class="form-label">direccion</label>
                                    <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" placeholder="direccion_cliente" required>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="info_cliente" class="form-label">info demas</label>
                                    <input type="text" class="form-control" id="info_cliente" name="info_cliente" placeholder="Info demas" required>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <input class="btn btn-primary" name="actualizar_cliente" type="submit" value="guardar">
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- eliminar -->
    <form method="POST" action="cliente.controlador.php">
        <div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">eliminar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5>Esta seguro que desea eliminar a cliente? </h5>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                        <input class="btn btn-primary" id="eliminar" name="eliminar_cliente" type="submit" value="eliminar">
                    </div>
                </div>
            </div>
        </div>
    </form>

    <hr />
    <div class="card">
        <div class="p-4">
            <table class="table table-striped align-middle">
                <thead>
                    <tr class="bg-primary text-white">
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
                    <?php
                    include_once('../conexion.php') ?>
                    <?php
                    $sql = $conn->query("SELECT * FROM clientes");
                    while ($datos = $sql->fetch_object()) {

                        $datosclientes = $datos->id_cliente . "||" .
                            $datos->nombre_cliente . "||" .
                            $datos->apellido_cliente . "||" .
                            $datos->telefono_cliente . "||" .
                            $datos->email_cliente . "||" .
                            $datos->direccion_cliente . "||" .
                            $datos->info_cliente;
                    ?>

                        <tr>
                            <th scope="row"><?= $datos->id_cliente; ?></th>
                            <td><?= $datos->nombre_cliente; ?></td>
                            <td><?= $datos->apellido_cliente; ?></td>
                            <td><?= $datos->telefono_cliente; ?></td>
                            <td><?= $datos->email_cliente; ?></td>
                            <td><?= $datos->direccion_cliente; ?></td>
                            <td><?= $datos->info_cliente; ?></td>

                                <!-- boton editar -->
                            <td><a class="btn btn-succes btn-primary " data-bs-toggle="modal" data-bs-target="#editar">
                            <i class="fa-solid fa-pen" onclick="agregarForm('<?php echo $datosclientes ?>');"></i></a></td>
                                

                            <!-- boton eliminar -->
                            <td> <a href="cliente.controlador.php?id=<?= $datos->id_cliente ?>" class="btn btn-small btn-danger" name="eliminar_cliente" type="submit" data-bs-target="#eliminar"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>


            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script>
                function agregarForm(datos) {
                    d = datos.split("||");

                    $("#id_cliente").val(d[0]);
                    $("#nombre_cliente").val(d[1]);
                    $("#apellido_cliente").val(d[2]);
                    $("#telefono_cliente").val(d[3]);
                    $("#email_cliente").val(d[4]);
                    $("#direccion_cliente").val(d[5]);
                    $("#info_cliente").val(d[6]);
                    //$("#emailE").val(d[5]);

                }
            </script>

            <script>
                function eliminarForm(dato) {
                    d = datos.split("||");

                    $("#id_cliente").val(d[0]);
                    $("#nombre_cliente").val(d[1]);
                    $("#apellido_cliente").val(d[2]);
                    $("#telefono_cliente").val(d[3]);
                    $("#email_cliente").val(d[4]);
                    $("#direccion_cliente").val(d[5]);
                    $("#info_cliente").val(d[6]);
                    //$("#eliminar").val(d[5]);

                }
            </script>
        </div>





    </div>

    <?php include '../php/util/footer.php';  ?>