<?php
include_once "../components/options.component.php";
$component = new Component();
?>


<!-- <div class="mb-3 col-6">
    <label for="direccion" class="form-label">Direccion</label>
    <select class="form-select" aria-label="Default select example">
        <option selected>Proveedores</option>
       <?php //$component->viewOptionsComponent("proveedores", "0", "1") 
        ?>
    </select>
</div> -->

<body>
    <form method="POST" action="categoria.controlador.php">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-secondary text-white">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Categoria</h5>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div class="mb-3 col-2">
                                <label for="id_categoria" class="form-label">ID</label>
                                <input type="id" class="form-control" id="id_categoria" name="id_categoria" readonly onmousedown="return false;">
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="nombre_categoria" class="form-label">categoria</label>
                                    <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria" placeholder="Nombre categoria" required>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="descripcion_categoria" class="form-label">Descripcion</label>
                                    <input type="text" class="form-control" id="descripcion_categoria" name="descripcion_categoria" placeholder="Descripcion" required>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <input class="btn btn-secondary" name="actualizar_categoria" type="submit" value="Guardar">
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Modal guardar-->
    <form method="POST" action="categoria.controlador.php">
        <div class="modal fade" id="guardar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-secondary text-white">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo Categoria</h5>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div class="mb-3 col-2">
                                <label for="id_categoria" class="form-label">ID</label>
                                <input type="text" class="form-control" id="id_categoria" name="id_categoria">
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="nombre_categoria" class="form-label">categoria</label>
                                    <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria" placeholder="Nombre categoria" required>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="direccion_categoria" class="form-label">Descripcion</label>
                            <input type="text" class="form-control" id="descripcion_categoria" name="descripcion_categoria" placeholder="Descripcion" required>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <input class="btn btn-secondary" name="guardar_categoria" type="submit" value="Guardar">
                    </div>
                </div>
            </div>
        </div>
    </form>

    <?php include '../util/header.php';  ?>

    <!-- <div class="col-12 mt-3"> -->
   
    <?php
    $where = "";

    if (isset($_GET['enviar'])) {
        $busqueda = $_GET['busqueda'];


        if (isset($_GET['busqueda'])) {
            $where = "WHERE nombre_cliente LIKE'%" . $busqueda . "%' OR apellido_cliente  LIKE'%" . $busqueda . "%'
    OR telefono_cliente  LIKE'%" . $busqueda . "%' OR email_cliente  LIKE'%" . $busqueda . "%' OR direccion_cliente  LIKE'%" . $busqueda . "%'";
        }
    }
    ?>
     <br>
     <h5 class="text-center">CATEGORIA</h5>
    <div class="mb-3 offset-md-10 col-2">
        <form class="d-flex">
            <i></i>
            <input type="search" class="form-control me-2 light-table-filter" data-table="table_id" type="text" placeholder="Buscar">

            <hr>
        </form>
    </div>
            <table class="table table-striped align-middle table_id">
                <thead>
        <thead>
            <tr class="bg-secondary text-white">

                <th scope="col">id</th>
                <th scope="col">categoria</th>
                <th scope="col">descripcion</th>
                <th scope="col">estado</th>
                <th scope="col" colspan="2">opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('../conexion.php');
            $sql = $conn->query("SELECT * FROM categorias WHERE 1");
            while ($datos = $sql->fetch_object()) {

                $datoscategoria =
                    $datos->id_categoria . "||" .
                    $datos->nombre_categoria . "||" .
                    $datos->descripcion_categoria . "||" .
                    $datos->estado_categoria;
            ?>
                <tr>
                    <th scope="row"><?= $datos->id_categoria; ?></th>
                    <td><?= $datos->nombre_categoria; ?></td>
                    <td><?= $datos->descripcion_categoria; ?></td>
                    <?php if ($datos->estado_categoria == 1) { ?>
                        <td><?php echo "Activo"; ?></td>
                    <?php } else { ?>
                        <td><?php echo "Inactivo"; ?></td>
                    <?php } ?>
                    <td>
                        <a href="" class="btn btn-sm btn-primary btn-circle" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="agregarForm('<?php echo $datoscategoria ?>');"><i class="fa-solid fa-pen"></i></a>

                        <?php if ($datos->estado_categoria == 1) { ?>
                            <a href="categoria.controlador.php?id_categoria=<?= $datos->id_categoria ?>&estado=<?= $datos->estado_categoria ?>"class="btn btn-sm btn-danger btn-circle" data-bs-target="#eliminar"><i class="bi bi-trash-fill"></i></a>
                        <?php } else { ?>
                            <a href="categoria.controlador.php?id_categoria=<?= $datos->id_categoria ?>&estado=<?= $datos->estado_categoria ?>"  class="btn btn-sm btn-success btn-circle"><i class="fa-solid fa-check"></i></a>
                        <?php } ?>

                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- </div> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        function agregarForm(datos) {
            d = datos.split("||");

            $("#id_categoria    ").val(d[0]);
            $("#nombre_categoria").val(d[1]);
            $("#descripcion_categoria").val(d[2]);

        }
    </script>
 <script src="../js/buscador.js"></script>
    <?php include '../util/footer.php';  ?>