<?php
if(!empty($_POST)){
	if(isset($_POST["email"]) &&isset($_POST["pass"])){
		if($_POST["email"]!=""&&$_POST["pass"]!=""){
			include "../conexion.php";
			
			$user_id=null;
			$sql1= "SELECT * FROM usuarios WHERE email_usuario=\"$_POST[email]\") and contraseña_usuario=\"$_POST[pass]\" ";
			$query = $conn->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["email_usuario"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../login.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../home.php';</script>";				
			}
		}
	}
}
