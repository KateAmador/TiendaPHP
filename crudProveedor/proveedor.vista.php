<?php
include_once "../components/options.component.php";
$component = new Component();
?>


<!-- <div class="mb-3 col-6">
    <label for="direccion" class="form-label">Direccion</label>
    <select class="form-select" aria-label="Default select example">
        <option selected>Proveedores</option>
       <?php //$component->viewOptionsComponent("proveedores", "0", "1") ?>
    </select>
</div> -->

<body>
    <form method="POST" action="proveedor.controlador.php">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-secondary text-white">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Proveedores</h5>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div class="mb-3 col-2">
                                <label for="id" class="form-label">ID</label>
                                <input type="text" class="form-control" id="id" name="id" readonly onmousedown="return false;">
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="nombreEmpresa" class="form-label">Empresa</label>
                                    <input type="text" class="form-control" id="nombreEmpresa" name="nombreEmpresa" placeholder="Nombre Empresa" required>
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
                                <label for="in" class="form-label">Informacion Adicional</label>
                                <textarea class="form-control" id="in" name="infoAdicional" rows="2" required></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <input class="btn btn-secondary" name="actualizar_proveedor" type="submit" value="Guardar">
                    </div>
                </div>
            </div>
        </div>
    </form>


    <!-- Modal -->
    <form method="POST" action="proveedor.controlador.php">
        <div class="modal fade" id="guardar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-secondary text-white">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo Proveedor</h5>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div class=row">
                                <div class="mb-3 col-6">
                                    <label for="nombreEmpresa" class="form-label">Empresa</label>
                                    <input type="text" class="form-control" id="nombreEmpresa" name="nombreEmpresa" placeholder="Nombre Empresa" required>
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
                                <label for="in" class="form-label">Informacion Adicional</label>
                                <textarea class="form-control" id="in" name="infoAdicional3" rows="2" required></textarea>
                            </div>
                            <div class="mb-2">

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <input class="btn btn-secondary" name="guardar_proveedor" type="submit" value="Guardar">
                    </div>
                </div>
            </div>
        </div>
    </form>

    <?php include '../util/header.php';  ?>

    <div class="col-12 mt-3">
        <h5 class="text-center">PROVEEDORES</h5>
        <div class="mb-1">
            <input class="btn btn-secondary" name="guardar_proveedor" type="submit" value="Nuevo Proveedor" data-bs-toggle="modal" data-bs-target="#guardar">
        </div>
    </div>
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
                <th scope="col">Estado</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('../conexion.php');
            $sql = $conn->query("SELECT * FROM proveedores WHERE estado_proveedor = 1");
            while ($datos = $sql->fetch_object()) {

                $datosProveedor =
                    $datos->id_proveedor . "||" .
                    $datos->empresa_proveedor . "||" .
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
                    <td><?= $datos->direccion_proveedor; ?></td>
                    <td><?= $datos->telefono_proveedor; ?></td>
                    <td><?= $datos->email_proveedor; ?></td>
                    <td><?= $datos->asesor_proveedor; ?></td>
                    <td><?= $datos->telAsesor_proveedor; ?></td>
                    <td><?= $datos->infoAdicional_proveedor; ?></td>
                    <td><?= $datos->estado_proveedor; ?></td>
                    <td>
                        <a href="" class="btn btn-small btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="agregarForm('<?php echo $datosProveedor ?>');"><i class="fa-solid fa-pen"></i></a>
                        <a href="proveedor.controlador.php?id=<?= $datos->id_proveedor ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
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

            $("#id").val(d[0]);
            $("#nombreEmpresa").val(d[1]);
            $("#direccion").val(d[2]);
            $("#telefono").val(d[3]);
            $("#email").val(d[4]);
            $("#asesor").val(d[5]);
            $("#telAsesor").val(d[6]);
            $("#infoAdicional").val(d[7]);
        }
    </script>

    <?php include '../util/footer.php';  ?>