<?php
 
 include_once('../conexion.php');

 if(isset($_POST['guardar_movimiento'])) {
    guardar();
}
 else if(isset($_POST['actualizar_movimiento'])) {
    actualizar();
} else{
    eliminar();
}

 function guardar(){

   
    $nombreProducto = trim($_POST['nombreProducto']);
    $nombreProveedor = trim($_POST['nombreProveedor']);
    $tipomovimiento = trim($_POST['tipomovimiento']);
    $cantidad = trim($_POST['cantidad']);
    $total = trim($_POST['total']);
    $fecha = trim($_POST['fecha']);


    $sql= "INSERT INTO proveedores(empresa_proveedor, direccion_proveedor, telefono_proveedor, email_proveedor, asesor_proveedor, telAsesor_proveedor, infoAdicional_proveedor, estado_proveedor)
             VALUES ('$nombreProducto','$direccion','$telefono','$email','$asesor','$telAsesor','$infoAdicional', 1)";
    if (mysqli_query($conn, $sql)) {
        Header("Location: proveedor.vista.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
 }

 function actualizar(){ 
    $id = trim($_POST['id']);
    $nombreEmpresa = trim($_POST['nombreEmpresa']);
    $direccion = trim($_POST['direccion']);
    $telefono = trim($_POST['telefono']);
    $email = trim($_POST['email']);
    $asesor = trim($_POST['asesor']);
    $telAsesor = trim($_POST['telAsesor']);
    $infoAdicional = trim($_POST['infoAdicional']);


    $sql= "UPDATE proveedores SET empresa_proveedor='$nombreEmpresa', direccion_proveedor='$direccion', telefono_proveedor='$telefono', 
            email_proveedor='$email', asesor_proveedor='$asesor', telAsesor_proveedor='$telAsesor', infoAdicional_proveedor='$infoAdicional' 
            WHERE id_proveedor='$id'";
    if (mysqli_query($conn, $sql)) {
        Header("Location: proveedor.vista.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

function eliminar(){
    
    $id = trim($_GET['id']);
    $estado = trim($_GET['estado']);

    if($estado == 1){

        $sql= "UPDATE proveedores SET estado_proveedor=0 WHERE id_proveedor='$id'";
    }else{
        $sql= "UPDATE proveedores SET estado_proveedor=1 WHERE id_proveedor='$id'";
    }
    
    if (mysqli_query($conn, $sql)) {
        Header("Location: proveedor.vista.php");
        echo $sql;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
