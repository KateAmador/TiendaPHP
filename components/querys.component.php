<?php

//esta clase devuelve los option para ser usados dentro de un selct en cualquier parte de la app
class querysComponent
{

    //esta funcion devuelve los option para ser usados dentro de un selct en cualquier parte de la app
    function count($nameFields, $nameTable)
    {
        include('../conexion.php');
        $sql = "SELECT COUNT($nameFields) FROM $nameTable";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_fetch_assoc($result)['COUNT($nameFields)'];
        echo $count;
    }
}
