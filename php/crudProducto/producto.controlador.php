<?php

include_once ('../conexion.php');

$nombreProveedor = trim($_POST['nombreProveedor']);
$nombreCategoria = trim($_POST['nombreCategoria']);
$nombreProducto = trim($_POST['nombreProducto']);
$costoProducto = trim($_POST['costoProducto']);
$precioProducto = trim($_POST['precioProducto']);
$observaciones = trim($_POST['observaciones']);
$estadoProducto = trim($_POST['estadoProducto']);
$cantidadProducto = trim($_POST['cantidadProducto']);


//echo $nombreProducto;
//echo $costoProducto;
//echo $precioProducto;
//echo $nombreProveedor;
//echo $nombreCategoria;
//echo $estadoProducto;
//echo $cantidadProducto;
//echo $observaciones;

$sql= "INSERT INTO productos(idProveedor_producto,idCategoria_producto,nombre_producto,observacion_producto,
estado_producto,cantidad_producto  VALUES ('$nombreProveedor','$nombreCategoria','$nombreProducto','$costoProducto','$precioProducto','$observaciones',
'$estadoProducto','$cantidadProducto');

?>