<?php
 
    include_once('../conexion.php');
    $idEntrada = trim($_POST['idEntrada']);
    $idProducto = trim($_POST['idProducto']);
    $nombreProveedor = trim($_POST['nombreProveedor']);
    $cantidad = trim($_POST['cantidad']);
    $costo = trim($_POST['costo']);
    $total = trim($_POST['total']);
    $fecha = trim ($_POST['fecha']);


    $sql= "INSERT INTO entradas(id_entrada, idProducto_entrada, , idProveedor_entrada, cantidad_entrada , costo_entrada, total_entrada, fecha_entradada)
             VALUES ('$idEntrada','$idProducto','$nombreProveedor','$cantidad','$costo','$total','$fecha')";
    if (mysqli_query($conn, $sql)) {
        echo "Proveedor creado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);

?>