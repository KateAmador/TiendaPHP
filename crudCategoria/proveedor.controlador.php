<?php
 
 if(isset($_POST['guardar_categoria'])) {
    guardar();
}
 else if(isset($_POST['actualizar_proveedor'])) {
    actualizar();
} else{
    eliminar();
}

 function guardar(){

    include_once('../conexion.php');
    $id_categoria= trim($_POST['id_categoria']);
    $nombre_categoria = trim($_POST['nombre_categoria']);
    $descripcion_categoria = trim($_POST['descripcion_categoria']);
   

    $sql= "INSERT INTO categorias (id_categoria, nombre_categoria, descripcion_categoria, estado_categoria)
             VALUES ('$id_categoria', '$nombre_categoria', '$descripcion_categoria',  1)";
    if (mysqli_query($conn, $sql)) {
        Header("Location: proveedor.vista.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
 }

 function actualizar(){ 

    include_once('../conexion.php');
    $id_categoria= trim($_POST['id_categoria']);
    $nombre_categoria = trim($_POST['nombre_categoria']);
    $descripcion_categoria = trim($_POST['descripcion_categoria']);


    $sql= "UPDATE categorias SET id='$id', nombre_categoria='$nombre_categoria', descripcion_categoria='$descripcion_categoria' WHERE id_categoria='$id_categoria'";
    if (mysqli_query($conn, $sql)) {
        Header("Location: proveedor.vista.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

function eliminar(){

    include_once('../conexion.php');
    $id_categoria = trim($_GET['id_categoria']);
    $estado = trim($_GET['estado']);

    if($estado == 1){

        $sql= "UPDATE categorias SET estado_categoria=0 WHERE id_categoria='$id_categoria'";
    }else{
        $sql= "UPDATE categorias SET estado_categoria=1 WHERE id_categoria='$id_categoria'";
    }

    if (mysqli_query($conn, $sql)) {
        Header("Location: proveedor.vista.php");
        echo $sql;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

?>