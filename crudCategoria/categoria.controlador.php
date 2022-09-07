<?php
//recibo todos los datos del formulario html

if (isset($_POST['categoria_guardar'])) {
    guardar();
} else if (isset($_POST['actualizar_cliente'])) {
    actualizar();
} else if (isset($_POST['eliminar_cliente'])) {
    eliminar();
}
function guardar()
{
    include_once('../conexion.php');

    $id_categoria = ($_POST['id_categoria']);
    $nombre_categoria = ($_POST['nombre_categoria']);
    $descripcion_categoria = ($_POST['descripcion_categoria']);

    $query = "  INSERT INTO categorias (id_categoria, nombre_categoria, descripcion_categoria) 
  VALUES ('$id_categoria', '$nombre_categoria', '$descripcion_categoria')";

    if (mysqli_query($conn, $query)) {
        Header("Location: categoria.vista.php");
        echo "Datos Guardados Correctamente <br>";
    } else {
        echo "Error al guardar" . $query . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

function actualizar()
{

    include_once('../conexion.php');
    $id_categoria = trim($_POST['id_categoria']);
    $categoria = trim($_POST['categoria']);
    $descripcion = trim($_POST['descripcion']);

    $sql = "UPDATE categorias SET categoria='$categoria', categoria='$categoria', 
          descripcion='$descripcion' WHERE id_categoria='$id_categoria'";

    if (mysqli_query($conn, $sql)) {
        echo "dato actualizado";
        Header("Location: categoria.vista.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

function eliminar()
{
    include_once('../conexion.php');

    $id_categoria = $_GET['id_categoria'];
    $sql = "DELETE FROM categorias WHERE id_categoria = '$id_categoria'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        Header("Location: categoria.vista.php");
        echo $sql;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
