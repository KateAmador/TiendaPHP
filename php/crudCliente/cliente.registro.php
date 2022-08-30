<?php
//recibo todos los datos del formulario html
    include_once('db.php');
    $cli_codigo =$_POST['cli_codigo'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $info_demas = $_POST['info_demas'];

    echo "Datos Guardados Correctamente <br>";

    echo "$cli_codigo, $nombre, $apellido, $documento, $telefono, $correo, $direccion, $info_demas";
?>

<body>
    <?php
    $conectar = conn(); // ejecuta las conexiones a la b.d 
    $sql= "INSERT INTO cliente(cli_codigo, nombre, apellido, documento, telefono, correo, direccion, info_demas)
    VALUE ('$cli_codigo','$nombre','$apellido','$documento','$telefono','$correo','$direccion','$info_demas')";
    $result = mysqli_query($conectar, $sql)or trigger_error("query Failed:  SQL Error: ".mysqli_error($conectar), E_USER_ERROR);

    echo "$sql";
    ?>     
