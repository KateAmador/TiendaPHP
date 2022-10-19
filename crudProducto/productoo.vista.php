<?php
include_once "../components/options.component.php";
$component = new Component();
?>
<body>
    <form method="POST" action="producto.controlador.php">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-secondary text-white">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
                    </div>
                    <div class="modal-body">
                        <div>
                        <div class="mb-3">
                        <label for="nombreProducto" class="form-label">Nombre</label>
                        <input type="text" name = "nombreProducto" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nombre Producto">
                    </div>               
                    <div class="row">                 
                        <div class="mb-3  col-6">
                            <label for="costoProducto" class="form-label">Costo</label>
                            <input type="number" name ="costoProducto" class="form-control" id="exampleFormControlInput1" placeholder="Valor de Compra">
                        </div>
                        <div class="mb-3  col-6">
                            <label for="precioProducto" class="form-label">Precio Venta</label>
                            <input type="number" name="precioProducto" class="form-control" id="exampleFormControlInput1" placeholder="Valor de Venta">
                        </div>
                    </div>
                <div class="mb-3 col-12">
                    <label for="proveedor" class="form-label">Proveedor</label>
                    <select class="form-select" aria-label="Default select example" name="nombreProveedor">
                        <option selected>Proveedores</option>
                        <?php $component->viewOptionsComponent("proveedores", "0", "1") ?>
                    </select>
                </div>
                <div class="mb-3 col-12">
                    <label for="proveedor" class="form-label">Categoria</label>
                    <select class="form-select" aria-label="Default select example" name="nombreCategoria">
                        <option selected>Categoria</option>
                        <?php $component->viewOptionsComponent("categorias", "0", "1") ?>
                    </select>
                </div>

                    <div class="row"> 

                        <div class="mb-3  col-6">
                            <label for="estadoProducto" class="form-label">Estado del Producto</label>
                            <select class="form-select" aria-label="Default select example" name="estadoProducto">
                                <option selected>Selecciona el estado</option>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                        <div class="mb-3  col-6">
                            <label for="cantidadProducto" class="form-label">Cantidad del Producto</label>
                            <input type="number" name="cantidadProducto" class="form-control" id="exampleFormControlInput1" placeholder="Valor de Compra">
                        </div>     
                    </div>
                    <div class="mb-3">
                        <label for="Observacion" class="form-label">Observcion del Producto</label>
                        <input type="text" name="observaciones" class="form-control" id="exampleFormControlInput1"
                            placeholder="Observacion">
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