<?php
 
 if(isset($_POST['guardar_proveedor'])) {
    guardar();
}
 else if(isset($_POST['actualizar_proveedor'])) {
    actualizar();
} else{
    eliminar();
}

 function guardar(){

    include_once('../conexion.php');
    $nombreEmpresa = trim($_POST['nombreEmpresa']);
    $direccion = trim($_POST['direccion']);
    $telefono = trim($_POST['telefono']);
    $email = trim($_POST['email']);
    $asesor = trim($_POST['asesor']);
    $telAsesor = trim($_POST['telAsesor']);
    $infoAdicional = trim($_POST['infoAdicional']);


    $sql= "INSERT INTO proveedores(empresa_proveedor, direccion_proveedor, telefono_proveedor, email_proveedor, asesor_proveedor, telAsesor_proveedor, infoAdicional_proveedor, estado_proveedor)
             VALUES ('$nombreEmpresa','$direccion','$telefono','$email','$asesor','$telAsesor','$infoAdicional', 1)";
    if (mysqli_query($conn, $sql)) {
        Header("Location: proveedor.vista.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
 }

 function actualizar(){ 

    include_once('../conexion.php');
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

    include_once('../conexion.php');
    $id = trim($_GET['id']);

    $sql= "UPDATE proveedores SET estado_proveedor=0 WHERE id_proveedor='$id'";
    if (mysqli_query($conn, $sql)) {
        Header("Location: proveedor.vista.php");
        echo $sql;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

?>