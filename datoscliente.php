<?php
	$ncapa=$_REQUEST['ncapa'];
	//$af=$_REQUEST['af'];
	if(isset($_REQUEST['g']))$g=$_REQUEST['g'];
	if(isset($_REQUEST['b']))$b=$_REQUEST['b'];
	if(isset($_REQUEST['af']))$af=$_REQUEST['af'];
	include("conexion.php"); 
	if(!$conexion)
	{
			echo "No se pudo conectar con la base de datos";
	}else{
		
		if ($ncapa==5 && $g==1){//CAPA 5 PARA ACTUALIZAR DATOS
			$rfc5=$_REQUEST['rfc5']; 
			$nombre5=$_REQUEST['nombre5']; 
			$apellido5=$_REQUEST['apellido5'];
			$telefono5=$_REQUEST['telefono5'];
			$usuario5=$_REQUEST['usuario5'];
			$email5=$_REQUEST['email5'];



			$campos="rfc_clientes='$nombre5',nombre=$nombre5,apellidos='$apellido5',telefono='$telefono5',email='$email5'";
			$criterio=" where rfc_clientes='$rfc5'";
			$rs=mysql_query($variable1.$campos.$criterio,$conexion);
			//echo $rs=mysql_affected_rows($rs); 
			if($rs==1)
			{
					$ncapa='4';
					header("location:busqueda.php");exit();
			}
			else
			{
					$ncapa='5';
					$error="Error al Guardar ".mysql_error();
					session_start();
					$_SESSION['rfc5']=$rfc5;
					$_SESSION['error']=$error;
					header("location:busqueda.php");exit();
			}
		}//FIN CAPA 5 PARA ACTUALIZAR DATOS
		
		if($ncapa==21){//CERRAR SESION
			session_start();
			session_destroy();
			header("location:busqueda.php");exit();			
		}
	}
	mysql_close($conexion);
?>

