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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Proveedores</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <?php include '../php/util/header.php';  ?>

    <div class="container-fluid row ">
        <div class="card col-4 mt-4 shadow-sm p-3 mb-5 bg-white rounded">
            <form method="POST" action="proveedor.controlador.php">
                <div class="card-header bg-secondary text-white">
                    <h5 class="card-title text-center">Agregar Proveedor</h5>
                </div>
                <div class="card-body">
                    <div>
                        <div class="">
                            <div class="mb-2 col-11">
                                <label for="nombreEmpresa" class="form-label">Empresa</label>
                                <input type="text" class="form-control" id="nombreEmpresa" name="nombreEmpresa"
                                    placeholder="Nombre Empresa" required>
                            </div>
                            <div class="mb-2 col-11">
                                <label for="direccion" class="form-label">Direccion</label>
                                <input type="text" class="form-control" id="direccion" name="direccion"
                                    placeholder="Direccion" required>
                            </div>
                        </div>
                        <div class="">
                            <div class="mb-2 col-11">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input type="number" class="form-control" id="telefono" name="telefono"
                                    placeholder="Telefono" required>
                            </div>
                            <div class="mb-2 col-11">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                    required>
                            </div>

                        </div>
                        <div class="">
                            <div class="mb-2 col-11">
                                <label for="asesor" class="form-label">Asesor</label>
                                <input type="text" class="form-control" id="asesor" name="asesor"
                                    placeholder="Nombre Asesor" required>
                            </div>
                            <div class="mb-2 col-11">
                                <label for="telAsesor" class="form-label">Telefono Asesor</label>
                                <input type="number" class="form-control" id="telAsesor" name="telAsesor"
                                    placeholder="Telefono Asesor" required>
                            </div>

                        </div>
                        <div class="mb-2 col-11">
                            <label for="in" class="form-label">Informacion Adicional</label>
                            <textarea class="form-control" id="in" name="infoAdicional" rows="2" required></textarea>
                        </div>
                        <div class="mb-2">
                            <input class="btn btn-primary" name="guardar_proveedor" type="submit" value="Guardar">
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-8 mt-3">
            <h5 class="text-center">PROVEEDORES</h5>
            <table class="table table table-striped shadow-sm p-3 mb-5 bg-white rounded">
                <thead>
                    <tr class="bg-secondary text-white">
                        <th scope="col">#</th>
                        <th scope="col">Empresa</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Email</th>
                        <th scope="col">Asesor</th>
                        <th scope="col">Tel Asesor</th>
                        <th scope="col">Info</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once('../conexion.php');
                    $sql = $conn->query("SELECT * FROM proveedores");
                    while ($datos = $sql->fetch_object()) {
                        
                        $datosProveedor=$datos->id_proveedor."||".
                        $datos->empresa_proveedor."||".
                        $datos->direccion_proveedor."||".
                        $datos->telefono_proveedor."||".
                        $datos->email_proveedor."||".
                        $datos->asesor_proveedor."||".
                        $datos->telAsesor_proveedor."||".
                        $datos->infoAdicional_proveedor;

                    ?>
                    <tr>
                        <th scope="row"><?= $datos->id_proveedor; ?></th>
                        <td><?= $datos->empresa_proveedor; ?></td>
                        <td><?= $datos->direccion_proveedor; ?></td>
                        <td><?= $datos->telefono_proveedor; ?></td>
                        <td><?= $datos->email_proveedor; ?></td>
                        <td><?= $datos->asesor_proveedor; ?></td>
                        <td><?= $datos->telAsesor_proveedor; ?></td>
                        <td><?= $datos->infoAdicional_proveedor; ?></td>
                        <td>
                            <a href="" class="btn btn-small btn-warning" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" onclick="agregarForm('<?php echo $datosProveedor ?>');"><i class="fa-solid fa-pen"></i></a>
                            <a href="proveedor.vista.php?id=<?= $datos->id_proveedor ?>"
                                class="btn btn-small btn-danger" name="eliminar" type="submit"><i
                                    class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script>
        function agregarForm(datos) {
            d = datos.split("||");

            $("#nombreEmpresa").val(d[1]);
            $("#codigoEliminar").val(d[0]);
            $("#nombreE").val(d[1]);
            $("#documentoE").val(d[2]);
            $("#edadE").val(d[3]);
            $("#telefonoE").val(d[4]);
            $("#direccionE").val(d[6]);
            $("#emailE").val(d[5]);
        }
        </script>

        <?php include '../php/util/footer.php';  ?>