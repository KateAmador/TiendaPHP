<?php
//recibo todos los datos del formulario html
    include('db.php');
    $cli_codigo =$_POST['cli_codigo'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $info_demas = $_POST['info_demas'];

    echo "Datos actualizados correctamente Correctamente <br>";

    echo "$cli_codigo, $nombre, $apellido, $documento, $telefono, $correo, $direccion, $info_demas";
?>

<body>
    <?php
    $conectar = conn(); // ejecuta las conexiones a la b.d 
    $sql= ("UPDATE cliente SET nombre = '$nombre', apellido = '$apellido', documento = '$documento', telefono = '$telefono', correo = '$correo', direccion = '$direccion', info_demas = '$info_demas' WHERE cli_codigo = '$cli_codigo';");
    $result = mysqli_query($conectar, $sql)or trigger_error("query Failed:  SQL Error: ".mysqli_error($conectar), E_USER_ERROR);

    echo "$sql";
   ?>
