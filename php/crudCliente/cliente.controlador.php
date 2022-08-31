<?php 
//recibo todos los datos del formulario html
  include_once('../conexion.php');

    $id_cliente =$_POST['id_cliente'];
    $nombre_cliente = $_POST['nombre_cliente'];
    $apellido_cliente = $_POST['apellido_cliente'];
    $telefono_cliente  = $_POST['telefono_cliente'];
    $email_cliente = $_POST['email_cliente'];
    $direccion_cliente = $_POST['direccion_cliente'];
    $info_cliente = $_POST['info_cliente'];

  
  $query = "INSERT INTO clientes (id_cliente, nombre_cliente, apellido_cliente,  telefono_cliente, email_cliente, direccion_cliente, info_cliente) 
  VALUES ('$id_cliente', '$nombre_cliente', '$apellido_cliente', '$telefono_cliente', '$email_cliente', '$direccion_cliente', '$info_cliente')";

  if(mysqli_query($conn, $query)){
 echo "Datos Guardados Correctamente <br>";

  } else {
    echo "Error al guardar" .$query . "<br>" . mysqli_error($conn);

  }
?>    

