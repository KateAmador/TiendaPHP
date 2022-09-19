<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Ventas</title>
</head>

<body>
    <?php include '../util/header.php';  ?>

    <h5 class="text-center">VENTAS</h5>


    <div class="container-fluid">
        <div class="mb-3 col-2">
            <label for="id" class="form-label"></label>
            <input type="text" class="form-control" id="id" name="id" readonly onmousedown="return false;">
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="nombreEmpresa" class="form-label">Cliente</label>
                <input type="text" class="form-control" id="nombreEmpresa" name="nombreEmpresa" placeholder="Nombre Empresa" required>
            </div>
            <div class="mb-3 col-6">
                <label for="nombreEmpresa" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="nombreEmpresa" name="nombreEmpresa" placeholder="Nombre Empresa" required>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="numID" class="form-label">Email</label>
                <input type="text" class="form-control" id="numID" name="numID" placeholder="Numero Identificacion" required>
            </div>
            <div class="mb-3 col-6">
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required>
            </div>
            <div class="mb-3 col-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="asesor" class="form-label">Asesor</label>
                <input type="text" class="form-control" id="asesor" name="asesor" placeholder="Nombre Asesor" required>
            </div>
            <div class="mb-3 col-6">
                <label for="telAsesor" class="form-label">Telefono Asesor</label>
                <input type="number" class="form-control" id="telAsesor" name="telAsesor" placeholder="Telefono Asesor" required>
            </div>
        </div>
        <div class="mb-3 col-12">
            <label for="infoAdicional" class="form-label">Informacion Adicional</label>
            <textarea class="form-control" id="infoAdicional" name="infoAdicional" rows="2" required></textarea>
        </div>
    </div>


    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <input class="btn btn-secondary" name="actualizar_proveedor" type="submit" value="Guardar">
    </div>
    </form>
    </div>
    <!-- End Form -->

    <!-- Table -->
    <table class="table table table-striped shadow-sm p-3 mb-5 bg-white rounded">
        <thead>
            <tr class="bg-secondary text-white">
                <th scope="col">#</th>
                <th scope="col">Empresa</th>
                <th scope="col">Tipo ID</th>
                <th scope="col">ID</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Asesor</th>
                <th scope="col">Tel Asesor</th>
                <th scope="col">Info</th>
                <th scope="col">Estado</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>

            <?php
            include('../conexion.php');
            $sql = $conn->query("SELECT * FROM proveedores WHERE 1");
            while ($datos = $sql->fetch_object()) {

                $datosProveedor =
                    $datos->id_proveedor . "||" .
                    $datos->empresa_proveedor . "||" .
                    $datos->tipoId_proveedor . "||" .
                    $datos->numId_proveedor . "||" .
                    $datos->direccion_proveedor . "||" .
                    $datos->telefono_proveedor . "||" .
                    $datos->email_proveedor . "||" .
                    $datos->asesor_proveedor . "||" .
                    $datos->telAsesor_proveedor . "||" .
                    $datos->infoAdicional_proveedor . "||" .
                    $datos->estado_proveedor;
            ?>
                <tr>
                    <th scope="row"><?= $datos->id_proveedor; ?></th>
                    <td><?= $datos->empresa_proveedor; ?></td>
                    <td><?= $datos->tipoId_proveedor; ?></td>
                    <td><?= $datos->numId_proveedor; ?></td>
                    <td><?= $datos->direccion_proveedor; ?></td>
                    <td><?= $datos->telefono_proveedor; ?></td>
                    <td><?= $datos->email_proveedor; ?></td>
                    <td><?= $datos->asesor_proveedor; ?></td>
                    <td><?= $datos->telAsesor_proveedor; ?></td>
                    <td><?= $datos->infoAdicional_proveedor; ?></td>
                    <?php if ($datos->estado_proveedor == 1) { ?>
                        <td><?php echo "Activo"; ?></td>
                    <?php } else { ?>
                        <td><?php echo "Inactivo"; ?></td>
                    <?php } ?>

                    <!-- Buttons -->
                    <td>
                        <a href="" class="btn btn-sm btn-primary btn-circle" data-bs-toggle="modal" data-bs-target="#editar" onclick="agregarForm('<?php echo $datosProveedor ?>');"><i class="bi bi-pencil-fill"></i></a>

                        <?php if ($datos->estado_proveedor == 1) { ?>
                            <a href="proveedor.controlador.php?id=<?= $datos->id_proveedor ?>&estado=<?= $datos->estado_proveedor ?>" class="btn btn-sm btn-danger btn-circle"><i class="bi bi-trash-fill"></i></a>
                        <?php } else { ?>
                            <a href="proveedor.controlador.php?id=<?= $datos->id_proveedor ?>&estado=<?= $datos->estado_proveedor ?>" class="btn btn-sm btn-success btn-circle"><i class="fa-solid fa-check"></i></a>
                        <?php } ?>
                    </td>
                    <!-- End Buttons -->
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- End Table -->
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        function agregarForm(datos) {
            d = datos.split("||");

            $("#id").val(d[0]);
            $("#nombreEmpresa").val(d[1]);
            $("#tipoID").val(d[2]);
            $("#numID").val(d[3]);
            $("#direccion").val(d[4]);
            $("#telefono").val(d[5]);
            $("#email").val(d[6]);
            $("#asesor").val(d[7]);
            $("#telAsesor").val(d[8]);
            $("#infoAdicional").val(d[9]);
        }
    </script>

    <?php include '../util/footer.php';  ?>