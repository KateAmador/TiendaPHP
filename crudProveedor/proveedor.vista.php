    <?php include '../util/header.php';  ?>

    <!-- Modal -->
    <form method="POST" action="proveedor.controlador.php">
        <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="editar" aria-hidden="true">
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
                                    <label for="nombreEmpresa" class="form-label">Tipo Identificacion</label>
                                    <select class="form-select" aria-label="Default select example" name="tipoID">
                                        <option selected>Escoja una opcion</option>
                                        <option value="RUT">RUT</option>
                                        <option value="NIT">NIT</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="numID" class="form-label">Identificacion</label>
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

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <input class="btn btn-secondary" name="actualizar_proveedor" type="submit" value="Guardar">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End Modal -->

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
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="nombreEmpresa" class="form-label">Empresa</label>
                                    <input type="text" class="form-control" id="nombreEmpresa" name="nombreEmpresa" placeholder="Nombre Empresa" required>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="nombreEmpresa" class="form-label">Tipo Identificacion</label>
                                    <select class="form-select" aria-label="Default select example" name="tipoID">
                                        <option selected>Escoja una opcion</option>
                                        <option value="RUT">RUT</option>
                                        <option value="NIT">NIT</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="numID" class="form-label">Identificacion</label>
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
    <!-- End Modal -->

    <h5 class="text-center">PROVEEDORES</h5>

    <div class="input-group mb-1 col">
        <input class="btn btn-secondary" name="guardar_proveedor" type="submit" value="Nuevo Proveedor" data-bs-toggle="modal" data-bs-target="#guardar">
        <div class="mb-1 col-12">
            <form method="POST" action="proveedor.controlador.php">
                <span class="input-group-btn">
                    <input type="text" class="form-control float-end col-2" id="buscarProveedor" name="buscarProveedor" placeholder="Buscar Proveedor">
                </span>
            </form>
        </div>
    </div>
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
        <tbody id="content">

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

    <script src="../vendor/jquery/jquery.min.js"></script>
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

    <script>

        getData();

        document.getElementById("buscar_proveedor").addEventListener("keyup", getData)

        function getData(){
            let input = document.getElementById('buscar_proveedor'),value
            let content = document.getElementById('content')
            let url = "load.php"
            formaData.append('campo', input)

            fetch(url, {
                method: "POST",
                body: formaData
            }).then(response=>response.json())
            .then(data=>{
                content.innerHTML = data
            }).catch(err => console.log(err))
        }

        </script>

    <?php include '../util/footer.php';  ?>