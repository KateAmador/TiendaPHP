
<?php

//esta clase devuelve los option para ser usados dentro de un selct en cualquier parte de la app

    class Component {

        //esta funcion devuelve los option para ser usados dentro de un selct en cualquier parte de la app
        function viewOptionsComponent($nameTable,$value,$showName){
        /*    include('../conexion.php');
            $sql = $conn->query("SELECT * FROM $nameTable");
            while ($datos = $sql->fetch_array()) {
                echo "
                <option value='$datos[$value]'>
                    $datos[$showName]
                </option>
            ";
         } 
         mysqli_close($conn);*/
        }
        
        
        function saveComponent($nameTable,$value){
            include_once('../conexion.php');
            $sql = $conn->query("INSERT INTO $nameTable ");
            while ($datos = $sql->fetch_array()) {
                echo "
                <option value='$datos[$value]'>
                    $datos[$showName]
                </option>
            ";
         } 
         mysqli_close($conn);
        }
                 
    }

?>