<?php

$nombreProducto = $_REQUEST['nombreProducto'];
$costoProducto = $_REQUEST['costoProducto'];
$precioProducto = $_REQUEST['precioProducto'];
$nombreProveedor = $_REQUEST['nombreProveedor'];
$nombreCategoria = $_REQUEST['nombreCategoria'];
$estadoProducto = $_REQUEST['estadoProducto'];
$cantidadProducto = $_REQUEST['cantidadProducto'];
$observaciones = $_REQUEST['observaciones'];

echo $nombreProducto;
echo $costoProducto;
echo $precioProducto;
echo $nombreProveedor;
echo $nombreCategoria;
echo $estadoProducto;
echo $cantidadProducto;
echo $observaciones;

function GuardarProveedor(){

}

header("Location:proveedor.vista.php");


?>