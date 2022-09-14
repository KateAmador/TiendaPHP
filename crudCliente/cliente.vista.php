<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Cliente</title>
    <!-- iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>
    <?php include '../util/header.php';  ?>


    <h3 class="text-center">Agregar un nuevo cliente</h3>
    <!-- Button trigger modal de guardar -->


    <!-- Modal guardar -->
    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#guardar">
        Agregar cliente
    </button>

    <form method="POST" action="cliente.controlador.php">
        <div class="modal fade" id="guardar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-secondary text-white">
                        <h5 class="modal-title" id="exampleModalLabel">Guardar Datos</h5>
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

                            </div>
                        </div>
                        <p><br />
                            <button class="btn btn-secondary" type="submit" style="width: 120px; height: 60px;" name="cliente_guardar" value="guardar">Guardar</button>


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
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-secondary text-white">
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
                                    <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" placeholder="telefono_cliente" required>
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

    </div>
    </div>
    </div>
    </form>

    <div class="card">
        <div class="p-4">
            <table class="table table-striped align-middle">
                <thead>

                    <tr class="bg-secondary text-white">
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Email</th>
                        <th scope="col">Direccion</th>
                        <th scope="col"> Estado_cliente</th>
                        <th scope="col" colspan="2">Opciones</th>

                    </tr>
                </thead>
                <tbody>
                    <thead>
                        </tr>
                    </thead>
                    <?php
                    include_once('../conexion.php');

                    $sql = $conn->query("SELECT * FROM clientes WHERE 1");
                    while ($datos = $sql->fetch_object()) {

                        $datosclientes = $datos->id_cliente . "||" .
                            $datos->nombre_cliente . "||" .
                            $datos->apellido_cliente . "||" .
                            $datos->telefono_cliente . "||" .
                            $datos->email_cliente . "||" .
                            $datos->direccion_cliente . "||" .
                            $datos->estado_cliente;
                    ?>

                        <tr>
                            <th scope="row"><?= $datos->id_cliente; ?></th>
                            <td><?= $datos->nombre_cliente; ?></td>
                            <td><?= $datos->apellido_cliente; ?></td>
                            <td><?= $datos->telefono_cliente; ?></td>
                            <td><?= $datos->email_cliente; ?></td>
                            <td><?= $datos->direccion_cliente; ?></td>

                            <?php if ($datos->estado_cliente == 1) { ?>
                                <td><?php echo "Activo"; ?></td>
                            <?php } else { ?>
                                <td><?php echo "Inactivo"; ?></td>


                            <?php } ?>

                            <!-- boton editar -->
                            <td><a href="" class="btn btn-succes btn-warning " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="fa-solid fa-pen" onclick="agregarForm('<?php echo $datosclientes ?>');"></i></a>


                                <!-- boton eliminar -->
                                <?php if ($datos->estado_cliente == 1) { ?>

                            <td> <a href="cliente.controlador.php?id_cliente=<?= $datos->id_cliente ?>&estado=<?= $datos->estado_cliente; ?>" class="btn btn-small btn-primary" data-bs-target="#eliminar"><i class="bi bi-toggle2-on"></i></a>

                            <?php } else { ?>

                            <td> <a href="cliente.controlador.php?id_cliente=<?= $datos->id_cliente ?>&estado=<?= $datos->estado_cliente; ?>" class="btn btn-small btn-secondary" data-bs-target="#eliminar"><i class="bi bi-toggle2-off"></i></a>
                            <?php } ?>
                            </td>
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
                    //$("#info_cliente").val(d[6]);
                    //$("#emailE").val(d[5]);

                }
            </script>


        </div>





    </div>

    <?php include '../util/footer.php';  ?>