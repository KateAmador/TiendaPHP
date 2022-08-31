<?php
 
    include_once('../conexion.php');
    $nombreEmpresa = trim($_POST['nombreEmpresa']);
    $direccion = trim($_POST['direccion']);
    $telefono = trim($_POST['telefono']);
    $email = trim($_POST['email']);
    $asesor = trim($_POST['asesor']);
    $telAsesor = trim($_POST['telAsesor']);
    $infoAdicional = trim($_POST['infoAdicional']);


    $sql= "INSERT INTO proveedores(empresa_proveedor, direccion_proveedor, telefono_proveedor, email_proveedor, asesor_proveedor, telAsesor_proveedor, infoAdicional_proveedor)
             VALUES ('$nombreEmpresa','$direccion','$telefono','$email','$asesor','$telAsesor','$infoAdicional')";
    if (mysqli_query($conn, $sql)) {
        echo "Proveedor creado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);

?>