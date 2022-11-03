<?php

include('conexion.php');
include("funciones.php");

if(isset($_POST["id_usuario"])) //Si se ha enviado el id del usuario a editar
{
	$imagen = obtener_nombre_imagen($_POST["id_usuario"]); //Obtenemos el nombre de la imagen del usuario
	if($imagen != '') //Si el nombre de la imagen no está vacío
	{
		unlink("img/" . $imagen); //Eliminamos la imagen del usuario
	}
	$stmt = $conexion->prepare(
		"DELETE FROM usuarios WHERE id = :id" //Preparamos la consulta
	);
	$resultado = $stmt->execute(
		array(
			':id'	=>	$_POST["id_usuario"]  //Asignamos el valor del id del usuario a eliminar
		)
	); 
	
	if(!empty($resultado)) //Si se ha eliminado correctamente
	{
		echo 'Registro borrado'; //Mostramos un mensaje de que se ha borrado correctamente
	}
}
 


?>