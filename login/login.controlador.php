<?php
	
	require "../conexion.php";
	
	session_start();
	
	if($_POST){
		
		$email = $_POST['email'];
		$password = $_POST['pass'];
		
		$sql = "SELECT id_usuario, nombre_usuario, contraseña_usuario, tipo_usuario FROM usuarios WHERE email_usuario='$email'";
		//echo $sql;
		$resultado = mysqli_query($conn, $sql);
		$num = $resultado->num_rows;
		
		if($num>0){
			$row = $resultado->fetch_assoc();
			$password_bd = $row['contraseña_usuario'];
			
			if(password_verify($password, $password_bd)){
				
				$_SESSION['id_usuario'] = $row['id_usuario'];
				$_SESSION['nombre_usuario'] = $row['nombre_usuario'];
				$_SESSION['tipo_usuario'] = $row['tipo_usuario'];
				
				header("Location: ../dashboard.php");
				
			} else {
				print "<script>alert(\"Contraseñas no coinciden\");window.location='login.vista.php';</script>";
			}

			} else {
				print "<script>alert(\"No existe el usuario\");window.location='login.vista.php';</script>";
		}
		
		
		
	}
	
	
	
?>
