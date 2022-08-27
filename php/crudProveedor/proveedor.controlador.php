<?php

$nombreEmpresa = $_REQUEST['nombreEmpresa'];
$direccion = $_REQUEST['direccion'];
$telefono = $_REQUEST['telefono'];
$email = $_REQUEST['email'];
$asesor = $_REQUEST['asesor'];
$telAsesor = $_REQUEST['telAsesor'];
$infoAdicional = $_REQUEST['infoAdicional'];

echo $nombreEmpresa;
echo $direccion;
echo $telefono;
echo $email;
echo $asesor;
echo $telAsesor;
echo $infoAdicional;

function GuardarProveedor(){

}

header("Location:proveedor.vista.php");


?>