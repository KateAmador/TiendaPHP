<?php
$servername = "bnjciagdtxueyilzernu-mysql.services.clever-cloud.com";
$database = "bnjciagdtxueyilzernu";
$username = "ui9k77zcb2u4y96f";
$password = "lPaw8OcTpppjjKllEvO0";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Fallo la conexion: " . mysqli_connect_error());
}
echo "Conexion exitosa<br>";
mysqli_close($conn);

	# Comprobar si existe registro

    // $usertable="prueba";
    // $yourfield = "nombre";
	
	// $query = "SELECT * FROM $usertable";
	
	// $result = mysqli_query($conn, $query);

    // if($result){
	// 	while($row = mysqli_fetch_array($result)){
	// 		$name = $row["$yourfield"];
	// 		echo "Nombre: ".$name."<br>";
	// 	}
	// }
?>