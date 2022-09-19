<?php
include_once "../components/options.component.php";
$component = new Component();
?>

<body>
    <form method="POST" action="movimientos.controlador.php">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-secondary text-white">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Movimientos</h5>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div class="mb-3 col-2">
                                <label for="id" class="form-label">ID</label>
                                <input type="text" class="form-control" id="id" name="id" readonly
                                    onmousedown="return false;">
                            </div>
                                <div class="mb-3 col-2">
                                    <label for="producto" class="form-label">Producto</label>
                                    <select class="form-select" aria-label="Default select example"
                                        name="nombreProducto">
                                        <option selected>Producto</option>
                                        <?php $component->viewOptionsComponent("productos", "0", "1") ?>
                                    </select>
                                </div>
                                <div class="mb-3 col-2">
                                    <label for="proveedor" class="form-label">Proveedor</label>
                                    <select class="form-select" aria-label="Default select example"
                                        name="nombreProveedor">
                                        <option selected>Proveedores</option>
                                        <?php $component->viewOptionsComponent("proveedores", "0", "1") ?>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-2">
                                        <label for="tipomovimiento" class="form-label">Tipo Movimiento</label>
                                        <input type="text" class="form-control" id="tipomovimiento"
                                            name="tipomovimiento" placeholder="tipomovimiento" required>
                                    </div>
                                    <div class="mb-3 col-2">
                                        <label for="cantidad" class="form-label">Cantidad</label>
                                        <input type="number" class="form-control" id="cantidad" name="cantidad"
                                            placeholder="Cantidad" required>
                                    </div>
                                    <div class="">
                                        <div class="mb-3 col-2">
                                            <label for="total" class="form-label">Total</label>
                                            <input type="number" class="form-control" id="total" name="total"
                                                placeholder="Total" required>
                                        </div>
                                        <div class="mb-3 col-2">
                                            <label for="fecha" class="form-label">Fecha</label>
                                            <input type="date" class="form-control" id="fecha" name="fecha"
                                                placeholder=" Fecha" required>

                                        </div>

                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cerrar</button>
                                    <input class="btn btn-secondary" name="actualizar_proveedor" type="submit"
                                        value="Guardar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </form>


    <!-- Modal -->
    <form method="POST" action="movimientos.controlador.php">
        <div class="modal fade" id="guardar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-secondary text-white">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo Movimiento</h5>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div class=row">
                                <div class="mb-3 col-6">
                                    <label for="nombreProducto" class="form-label">Producto</label>
                                    <input type="text" class="form-control" id="nombreProducto" name="nombreProducto"
                                        placeholder="Nombre Producto" required>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="nombreProveedor" class="form-label">Proveedor</label>
                                    <input type="text" class="form-control" id="nombreProveedor" name="nombreProveedor"
                                        placeholder="Nombre Proveedor" required>
                                </div>

                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="tipomovimiento" class="form-label">Tipo de movimiento</label>
                                    <input type="text" class="form-control" id="tipomovimiento" name="tipomovimiento"
                                        placeholder="Tipo de movimiento" required>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="cantidad" class="form-label">Cantidad</label>
                                    <input type="cantidad" class="form-control" id="cantidad" name="cantidad"
                                        placeholder="Cantidad" required>
                                </div>

                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="total" class="form-label">Total</label>
                                    <input type="text" class="form-control" id="total" name="total" placeholder="Total"
                                        required>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="fecha" class="form-label">Fecha</label>
                                    <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha"
                                        required>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <input class="btn btn-secondary" name="guardar_movimiento" type="submit" value="Guardar">
                    </div>
                </div>
            </div>
        </div>
    </form>

    <?php include '../util/header.php';  ?>

    <div class="col-12 mt-3">
        <h5 class="text-center">MOVIMIENTOS</h5>
        <div class="mb-1">
            <input class="btn btn-secondary" name="guardar_movimiento" type="submit" value="Nuevo Movimiento"
                data-bs-toggle="modal" data-bs-target="#guardar">
        </div>
    </div>
    <table class="table table table-striped shadow-sm p-3 mb-5 bg-white rounded">
        <thead>
            <tr class="bg-secondary text-white">
                <th scope="col">#</th>
                <th scope="col">Producto</th>
                <th scope="col">Proveedor</th>
                <th scope="col">Tipo de movimiento</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Total</th>
                <th scope="col">Fecha</th>
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
                <?php if($datos->estado_proveedor == 1){?>
                <td><?php echo "Activo";?></td>
                <?php }else{?>
                <td><?php echo "Inactivo";?></td>
                <?php }?>

                <td>
                    <a href="" class="btn btn-small btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        onclick="agregarForm('<?php echo $datosProveedor ?>');"><i class="fa-solid fa-pen"></i></a>
                    <a href="proveedor.controlador.php?id=<?= $datos->id_proveedor ?>&estado=<?= $datos->estado_proveedor ?>"
                        class="btn btn-small btn-danger"><i class="fa-light fa-toggle-on"></i></a>
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