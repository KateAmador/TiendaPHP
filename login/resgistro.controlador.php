<?php

if (isset($_POST['registrar_usuario'])) {
    guardar();
}

function guardar()
{
    require_once('../conexion.php');
    $nombre = trim($_POST['nombre']);
    $tel = trim($_POST['tel']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['pass']);
    $hash = password_hash($pass, PASSWORD_DEFAULT);



    $sql = "INSERT INTO usuarios(nombre_usuario, telefono_usuario, email_usuario, contraseña_usuario, tipo_usuario, estado_usuario)
             VALUES ('$nombre','$tel','$email','$hash',1,1)";


    if (mysqli_query($conn, $sql)) {
        print "<script>alert(\"Registrado correctamente.\");window.location='login.vista.php';</script>";
    } else {
        print "<script>alert(\"Email duplicado.\");window.location='registro.vista.php';</script>";
    }
    mysqli_close($conn);
}
