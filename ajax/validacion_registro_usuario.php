<?php  

	include_once("../class/class_conexion.php");
	include_once("../class/class_usuario.php");

	$conexion = new Conexion();
	
	switch ($_POST["accion"]) {
		case '1':

			$usuario = new Usuario($_POST["cbo-privilegio"], $_POST["txt-usuario"], $_POST["txt-password"], $_POST["txt-password-confirm"]);
			if($_POST["txt-usuario"]==""){
				echo "Ingrese un nombre de usuario<br>";
			}else{

				if($_POST["txt-password"]==""){
				echo "Ingrese una contraseña<br>";
			}

			if($_POST["txt-password-confirm"]==""){
				echo "Ingrese contraseña de confirmacion";
				}	
			}

			

			
				$usuario->registrarUsuario($conexion);
				$conexion->cerrarConexion();
			
			break;
			
		default:
			break;
	}

	

?>