<?php

if(isset($_POST['guardar_producto'])) {
    guardar();
}
 else if(isset($_POST['actualizar_producto'])) {
  actualizar();
} else{
    eliminar();
}

function guardar(){

    include_once ('../conexion.php');

    $nombreProveedor = trim($_POST['nombreProducto']);
    $nombreCategoria = trim($_POST['nombreCategoria']);
    $nombreProducto = trim($_POST['nombreProducto']);
    $costoProducto = trim($_POST['costoProducto']);
    $precioProducto = trim($_POST['precioProducto']);
    $observaciones = trim($_POST['observaciones']);
    $estadoProducto = trim($_POST['estadoProducto']);
    $cantidadProducto = trim($_POST['cantidadProducto']);


    $sql= "INSERT INTO productos(idProveedor_producto,idCategoria_producto,nombre_producto,observacion_producto,estado_producto,cantidad_producto) VALUES ('$nombreProveedor','$nombreCategoria','$nombreProducto','$costoProducto','$precioProducto','$observaciones',1,'$cantidadProducto')";

    if (mysqli_query($conn, $sql)) {
        Header("Location: producto.vista.php");
     } 
     else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

}


function actualizar(){ 
    include_once ('../conexion.php');


    $id= trim($_POST['id']);
    $nombreProveedor = trim($_POST['nombreProveedor']);
    $nombreCategoria = trim($_POST['nombreCategoria']);
    $nombreProducto = trim($_POST['nombreProducto']);
    $costoProducto = trim($_POST['costoProducto']);
    $precioProducto = trim($_POST['precioProducto']);
    $observaciones = trim($_POST['observaciones']);
    $estadoProducto = trim($_POST['estadoProducto']);
    $cantidadProducto = trim($_POST['cantidadProducto']);


    $sql= "UPDATE productos  SET nombre_producto='$nombreProducto',costo_producto='$costoProducto',precio_producto='$precioProducto',
    observacion_producto='$observciones',cantidad_producto='$cantidadProducto' WHERE id_producto='$id'";

    
if (mysqli_query($conn, $sql)) {
Header("Location: producto.vista.php");
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
    
}

function eliminar(){

    include_once('../conexion.php');

    $id = trim($_GET['id']);

    $sql= "UPDATE producto SET estado_producto=0 WHERE id_producto='$id'";
    if (mysqli_query($conn, $sql)) {
        Header("Location: producto.vista.php");
        echo $sql;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);


}






?>