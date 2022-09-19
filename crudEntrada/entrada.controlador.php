<?php
 
 if(isset($_POST['guardar_entrada'])) {
    guardar();
}
 else if(isset($_POST['actualizar_entrada'])) {
    actualizar();
} else{
    eliminar();
}

 function guardar(){

    include_once('../conexion.php');
    $Producto = trim($_POST['producto']);
    $Proveedor = trim($_POST['proveedor_entrada']);
    $Cantidad = trim($_POST['cantidad_entrada']);
    $Costo = trim($_POST['costo_entrada']);
    $Total= trim($_POST['total_entrada']);


<<<<<<< HEAD
    $sql= "INSERT INTO entradas, producto (idProducto_entrada, idProveedor_entrada, cantidad_entrada, costo_entrada, 
    total_entrada, fecha_entrada)
             VALUES ('$Producto' ,'$Proveedor','$Cantidad','$Costo','$Total','$Fecha')";
             
=======
    $sql= "INSERT INTO entradas(idProducto_entrada, idProveedor_entrada, cantidad_entrada, costo_entrada, 
    total_entrada)
             VALUES ('$Producto' ,'$Proveedor','$Cantidad','$Costo','$Total')";
>>>>>>> a140877a5804ad705208dfea16fdfb1710ddf56f
    if (mysqli_query($conn, $sql)) {
        Header("Location: entrada.vista.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
 }

 function actualizar(){ 

    include_once('../conexion.php');
    $ID= trim($_POST['id_entrada']);
    $Producto = trim($_POST['idProducto_entrada']);
    $Proveedor = trim($_POST['idProveedor_entrada']);
    $Cantidad = trim($_POST['cantidad_entrada']);
    $Costo = trim($_POST['costo_entrada']);
    $Total= trim($_POST['total_entrada']);
    $Fecha= trim($_POST['fecha_entrada']);


    $sql= "UPDATE entradas SET idProducto_entrada='$Producto, idProveedor_entrada='$Proveedor', 
    cantidad_entrada='$Cantidad', 
            costo_entrada='$Costo', total_entrad='$Total', fecha_entrada='$Fecha' 
            WHERE id_entrada='$id'";
    if (mysqli_query($conn, $sql)) {
        Header("Location: entrada.vista.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

// function eliminar(){

//     include_once('../conexion.php');
//     $id = trim($_GET['id']);

//     $sql= "UPDATE entradas SET estado_entrada=0 WHERE id_entrada='$id'";
//     if (mysqli_query($conn, $sql)) {
//         Header("Location: entrada.vista.php");
//         echo $sql;
//     } else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//     }
    
//     mysqli_close($conn);
// }

?>