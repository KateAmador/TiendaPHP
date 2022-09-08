<?php
//recibo todos los datos del formulario html

if (isset($_POST['cliente_guardar'])) {
  guardar();
} else if (isset($_POST['actualizar_cliente'])) {
  actualizar();
} else if (isset($_POST['estado_cliente'])) {
  eliminar();
}
function guardar()
{
  include_once('../conexion.php');

  $id_cliente = $_POST['id_cliente'];
  $nombre_cliente = $_POST['nombre_cliente'];
  $apellido_cliente = $_POST['apellido_cliente'];
  $telefono_cliente  = $_POST['telefono_cliente'];
  $email_cliente = $_POST['email_cliente'];
  $direccion_cliente = $_POST['direccion_cliente'];
  $info_cliente = $_POST['info_cliente'];


  $query = "  INSERT INTO clientes (id_cliente, nombre_cliente, apellido_cliente,  telefono_cliente, email_cliente, direccion_cliente, info_cliente) 
  VALUES ('$id_cliente', '$nombre_cliente', '$apellido_cliente', '$telefono_cliente', '$email_cliente', '$direccion_cliente', '$info_cliente')";

  if (mysqli_query($conn, $query)) {
    Header("Location: cliente.vista.php");
    echo "Datos Guardados Correctamente <br>";
  } else {
    echo "Error al guardar" . $query . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
}

function actualizar()
{

  include_once('../conexion.php');
  $id_cliente = trim($_POST['id_cliente']);
  $nombre_cliente = trim($_POST['nombre_cliente']);
  $apellido_cliente = trim($_POST['apellido_cliente']);
  $telefono_cliente  = trim($_POST['telefono_cliente']);
  $email_cliente = trim($_POST['email_cliente']);
  $direccion_cliente = trim($_POST['direccion_cliente']);
  $info_cliente = trim($_POST['info_cliente']);


  $sql = "UPDATE clientes SET nombre_cliente='$nombre_cliente', apellido_cliente='$apellido_cliente', 
          email_cliente='$email_cliente', direccion_cliente='$direccion_cliente', info_cliente='$info_cliente' WHERE id_cliente='$id_cliente'";
  if (mysqli_query($conn, $sql)) {
    echo "dato actualizado";
    Header("Location: cliente.vista.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
}

function eliminar()
{
  include_once('../conexion.php');

  $id_cliente = trim($_GET['id_cliente']);
  $sql = "UPDATE cliente SET estado_cliente = 0 WHERE id_cliente = '$id_cliente'";
  $query = mysqli_query($conn, $sql);
  if ($query) {
    //Header("Location: cliente.vista.php");
    echo $sql;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
}