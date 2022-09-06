
<?php
    include_once "/components/selectProveedorMejor.component.php";
    $component = new Component(); 
?>

<select class="form-select" aria-label="Default select example">
    <option selected>Seleccione un proveedor</option>
    <?php $component->viewOptionsComponent("proveedores","0","1")?>
</select>