<?php

    function subir_imagen(){
        if (isset($_FILES["imagen_usuario"])) { //Si se ha subido una imagen
            
            $extension = explode('.', $_FILES["imagen_usuario"]['name']); //Separamos la extensión de la imagen
            $nuevo_nombre = rand() . '.' . $extension[1]; //Generamos un nuevo nombre para la imagen
            $ubicacion = './img/' . $nuevo_nombre; //Ubicación de la imagen
            move_uploaded_file($_FILES["imagen_usuario"]['tmp_name'], $ubicacion); //Movemos la imagen a la ubicación indicada
            return $nuevo_nombre; //Retornamos el nombre de la imagen
        }
    }

    function obtener_nombre_imagen($id_usuario){
        include('conexion.php'); //Incluimos la conexión a la base de datos
        $stmt = $conexion->prepare("SELECT imagen FROM usuarios WHERE id = '$id_usuario'"); //Preparamos la consulta
        $stmt->execute();//Ejecutamos la consulta
        $resultado = $stmt->fetchAll(); //Obtenemos el resultado de la consulta
        foreach($resultado as $fila){ //Recorremos el resultado de la consulta
            return $fila["imagen"]; //Retornamos el nombre de la imagen
        }
    }

    function obtener_todos_registros(){
        include('conexion.php');
        $stmt = $conexion->prepare("SELECT * FROM usuarios");//Preparamos la consulta
        $stmt->execute();
        $resultado = $stmt->fetchAll(); //Obtenemos el resultado de la consulta
        return $stmt->rowCount();    //Retornamos el número de filas
    }

    ?>

     