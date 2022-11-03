<?php

include("conexion.php");
include("funciones.php");

if ($_POST["operacion"] == "Crear") { //Si se va a crear un nuevo registro
    $imagen = '';
    if ($_FILES["imagen_usuario"]["name"] != '') {//Si se ha subido una imagen
        $imagen = subir_imagen(); //Subimos la imagen
    }
    $stmt = $conexion->prepare("INSERT INTO usuarios(nombre, apellidos, imagen, telefono, email)VALUES(:nombre, :apellidos, :imagen, :telefono, :email)"); //Preparamos la consulta

    $resultado = $stmt->execute( //Ejecutamos la consulta
        array( //Array con los datos a insertar
            ':nombre'    => $_POST["nombre"], 
            ':apellidos'    => $_POST["apellidos"],
            ':telefono'    => $_POST["telefono"],
            ':email'    => $_POST["email"],
            ':imagen'    => $imagen
        )
    );

    if (!empty($resultado)) { //Si se ha insertado correctamente
        echo 'Registro creado';
    }
}


if ($_POST["operacion"] == "Editar") { //Si se va a editar un registro
    $imagen = '';
    if ($_FILES["imagen_usuario"]["name"] != '') {  //Si se ha subido una imagen
        $imagen = subir_imagen();
    }else{
        $imagen = $_POST["imagen_usuario_oculta"]; //Si no se ha subido una imagen, obtenemos el nombre de la imagen que tenía el registro
    }


    $stmt = $conexion->prepare("UPDATE usuarios SET nombre=:nombre, apellidos=:apellidos, imagen=:imagen, telefono=:telefono, email=:email WHERE id = :id");
     //Preparamos la consulta

    $resultado = $stmt->execute( //Ejecutamos la consulta
        array(
            ':nombre'    => $_POST["nombre"], 
            ':apellidos'    => $_POST["apellidos"],
            ':telefono'    => $_POST["telefono"],
            ':email'    => $_POST["email"],
            ':imagen'    => $imagen,
            ':id'    => $_POST["id_usuario"]
        )
    );
 
    if (!empty($resultado)) { //Si se ha editado correctamente
        echo 'Registro actualizado';
    }
}

?>

  