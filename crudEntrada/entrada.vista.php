<?php
include_once "../components/options.component.php";
$component = new Component();
?>
<?php include '../util/header.php'; ?>

<form class="card col-4 mt-5" method="POST" action="entrada.controlador.php">
    <div class="card-header">
        <h5 class="card-title">Agregar Entrada</h5>
    </div>
    <form method="post" action="entrada.controlador.php">
        <div>
            <div class="">
                <div class="mb-3 col-12">
                    <label for="producto" class="form-label">Producto</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Producto</option>
                        <?php $component->viewOptionsComponent("productos", "0", "1") ?>
                    </select>
                </div>
                <div class="mb-3 col-12">
                    <label for="proveedor" class="form-label">Proveedor</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Proveedores</option>
                        <?php $component->viewOptionsComponent("proveedores", "0", "1") ?>
                    </select>
                </div>
                <div class="">
                    <div class="mb-3 col-12">
                        <label for="cantidad" class="form-label">Cantidad</label>
                        <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad"
                            required>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="costo" class="form-label">Costo</label>
                        <input type="number" class="form-control" id="costo" name="costo" placeholder="Costo" required>
                    </div>
                </div>
                <div class="">
                    <div class="mb-3 col-12">
                        <label for="total" class="form-label">Total</label>
                        <input type="number" class="form-control" id="total" name="total" placeholder="Total" required>
                    </div>


                    <div class="mb-3 col-12">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="afecha placeholder=" Fecha" required>

                    </div>
                </div>

                <div class="mb-2 offset-md-5">
                    <input class="btn btn-primary" name="guardar_entrada" type="submit" value="Guardar">
                </div>
            </div>

            


            
        </div>
    </form>

    <div class="col-8 mt-3">
        <h5 class="text-center">ENTRADAS</h5>
    </div>
    <table class="table table table-striped shadow-sm p-3 mb-5 bg-white rounded">
        <thead>
            <tr class="bg-secondary text-white">
                <th scope="col">#</th>
                <th scope="col">Producto</th>
                <th scope="col">Proveedor</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Costo</th>
                <th scope="col">Total</th>
                <th scope="col">Fecha</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            
            include('../conexion.php');
            $sql = $conn->query("SELECT * FROM entradas");
            while ($datos = $sql->fetch_object()) {

                $datosEntrada =
                    $datos->id_entrada . "||" .
                    $datos->idProducto_entrada . "||" .
                    $datos->idProveedor_entrada . "||" .
                    $datos->cantidad_entrada . "||" .
                    $datos->costo_entrada . "||" .
                    $datos->total_entrada . "||" .
                    $datos->fecha_entrada;
            ?>
            <tr>
                <th scope="row">
                <td><?= $datos->idProducto_entrada; ?></td>
                <td><?= $datos->idProveedor_entrada; ?></td>
                <td><?= $datos->cantidad_entrada; ?></td>
                <td><?= $datos->costo_entrada; ?></td>
                <td><?= $datos->total_entrada; ?></td>
                <td><?= $datos->fecha_entrada; ?></td>
                <td>
                    <a href="" class="btn btn-small btn-warning"
                        onclick="agregarForm('<?php echo $datosEntrada ?>');"><i class="fa-solid fa-pen"></i></a>
                    <a href="entrada.controlador.php?id=<?= $datos->id_entrada ?>" class="btn btn-small btn-danger"><i
                            class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

   
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
    function agregarForm(datos) {
        d = datos.split("||");

        $("#producto").val(d[0]);
        $("#proveedor").val(d[1]);
        $("#cantidad").val(d[2]);
        $("#costo").val(d[3]);
        $("#total").val(d[4]);
        $("#fecha").val(d[5]);

    }
    </script>

    <?php include '../util/footer.php';  ?>