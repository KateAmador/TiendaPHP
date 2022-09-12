<?php
include_once "../components/options.component.php";
$component = new Component();
?>

<?php include '../util/header.php'; ?>

    <form class="card col-12 col-md-6 offset-md-3 mt-5" method="post" action="producto.controlador.php">
        <div class="card-header">
            <h5 class="card-title">Agregar Producto</h5>
        </div>

        <div class="card-body p-md-5">
            <div class="row justify-content-center">

                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                    <div class="mb-3">
                        <label for="nombreProducto" class="form-label">Nombre</label>
                        <input type="text" name = "nombreproducto" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nombre y Apellido">
                    </div>               
                    <div class="row">                 
                        <div class="mb-3  col-6">
                            <label for="costoProducto" class="form-label">Costo</label>
                            <input type="number" name ="costo" class="form-control" id="exampleFormControlInput1" placeholder="Valor de Compra">
                        </div>
                        <div class="mb-3  col-6">
                            <label for="precioProducto" class="form-label">Precio Venta</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Valor de Venta">
                        </div>
                    </div>
                <div class="mb-3 col-12">
                    <label for="proveedor" class="form-label">Proveedor</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Proveedores</option>
                        <?php $component->viewOptionsComponent("proveedores", "0", "1") ?>
                    </select>
                </div>
                <div class="mb-3 col-12">
                    <label for="proveedor" class="form-label">Categoria</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Categoria</option>
                        <?php $component->viewOptionsComponent("categorias", "0", "1") ?>
                    </select>
                </div>

                    <div class="row"> 

                        <!-- <div class="mb-3  col-6">
                            <label for="estadoProducto" class="form-label">Estado del Producto</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Selecciona el estado</option>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div> -->
                        <div class="mb-3  col-6">
                            <label for="cantidadProducto" class="form-label">Cantidad del Producto</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Valor de Compra">
                        </div>     
                    </div>
                    <div class="mb-3">
                        <label for="Observacion" class="form-label">Observcion del Producto</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Observacion">
                    </div>

                    <div class="mb-3">
                    <input class="btn btn-primary" name="guardar_producto" type="submit" value="Guardar">
                    </div>
                </div>
            </div>
        </div>
    </form>



    <div class="col-8 mt-3">
        <h5 class="text-center">PRODUCTOS</h5>
    </div>
    <table class="table table table-striped shadow-sm p-3 mb-5 bg-white rounded">
        <thead>
            <tr class="bg-secondary text-white">
                <th scope="col">#</th>
                <th scope="col">Proveedor</th>
                <th scope="col">Categoria</th>
                <th scope="col">Nombre Producto</th>
                <th scope="col">Costo producto</th>
                <th scope="col">Precio producto</th>
                <th scope="col">observacion producto</th>
                <th scope="col">Estado producto</th>
                <th scope="col">Cantidad producto</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            
            include('../conexion.php');
            $sql = $conn->query("SELECT * FROM productos");
            while ($datos = $sql->fetch_object()) {

                $datosEntrada =
                    $datos->id_producto . "||" .
                    $datos->idProveedor_producto. "||" .
                    $datos->idCategoria_producto . "||" .
                    $datos->nombre_producto . "||" .
                    $datos->costo_producto . "||" .
                    $datos->precio_producto . "||" .
                    $datos->observacion_producto . "||" .
                    $datos->estado_producto . "||" .
                    $datos->cantidad_producto;
            ?>
            <tr>
                <th scope="row">
                <td><?= $datos->idProveedor_producto; ?></td>
                <td><?= $datos->idCategoria_producto; ?></td>
                <td><?= $datos->nombre_producto; ?></td>
                <td><?= $datos->costo_producto; ?></td>
                <td><?= $datos->precio_producto; ?></td>
                <td><?= $datos->observacion_producto; ?></td>
                <td><?= $datos->estado_producto; ?></td>
                <td><?= $datos->cantidad_producto; ?></td>
                <td>
                    <a href="" class="btn btn-small btn-warning"
                        onclick="agregarForm('<?php echo $datosProducto ?>');"><i class="fa-solid fa-pen"></i></a>
                    <a href="poducto.controlador.php?id=<?= $datos->id_producto ?>" class="btn btn-small btn-danger"><i
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

        $("#id").val(d[0]);
        $("#nombreProveedor").val(d[1]);
        $("#nombreCategoria").val(d[2]);
        $("#nombreProducto").val(d[3]);
        $("#costoProducto").val(d[4]);
        $("#precioProducto").val(d[5]);
        $("#observaciones").val(d[3]);
        $("#estadoProducto").val(d[4]);
        $("#cantidadProducto").val(d[5]);

    }
    </script>

    <?php include '../util/footer.php';  ?>
