<?php 

include("../conexion.php");
	//set timezone
	date_default_timezone_set('America/Bogota');
    echo date_default_timezone_get();
	$year = date('Y');
	$total=array();

	for ($month = 1; $month <= 12; $month ++){
		$sql="SELECT 
        SUM(total_factura) AS total
        FROM facturas, salidas 
        WHERE YEAR(fecha_salida) = YEAR(CURDATE()) 
        AND MONTH(fecha_salida) = MONTH(CURDATE())";
		$query=$conn->query($sql);
		$row=$query->fetch_array();
 
		$total[]=$row['total'];
	}
 
    $phpToJsVars = [
        'value1' => 'foo1',
        'value2' => 'foo2'    
      ];
	$tjan = $total[0];
	$tfeb = $total[1];
	$tmar = $total[2];
	$tapr = $total[3];
	$tmay = $total[4];
	$tjun = $total[5];
	$tjul = $total[6];
	$taug = $total[7];
	$tsep = $total[8];
	$toct = $total[9];
	$tnov = $total[10];
	$tdec = $total[11];
 

?>