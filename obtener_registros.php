<?php


    include("conexion.php");
    include("funciones.php");

    $query = "";
    $salida = array();
    $query = "SELECT * FROM usuarios "; //Preparamos la consulta

    if (isset($_POST["search"]["value"])) { //Si se ha buscado algo
       $query .= 'WHERE nombre LIKE "%' . $_POST["search"]["value"] . '%" '; //Añadimos la búsqueda
       $query .= 'OR apellidos LIKE "%' . $_POST["search"]["value"] . '%" '; 
    }

    if (isset($_POST["order"])) { //Si se ha ordenado
        $query .= 'ORDER BY' . $_POST['order']['0']['column'] .' '.$_POST["order"][0]['dir'] . ' ';    //Añadimos el orden    
    }else{
        $query .= 'ORDER BY id ASC '; //Si no se ha ordenado, ordenamos por id de forma ascendente
    }

    if($_POST["length"] != -1){ //Si se ha limitado la cantidad de registros
        $query .= 'LIMIT ' . $_POST["start"] . ','. $_POST["length"]; //Añadimos el limite
    } 

    $stmt = $conexion->prepare($query); //Preparamos la consulta
    $stmt->execute();
    $resultado = $stmt->fetchAll(); //Obtenemos el resultado de la consulta
    $datos = array();
    $filtered_rows = $stmt->rowCount(); //Obtenemos el numero de registros sin limit
    foreach($resultado as $fila){
        $imagen = '';
        if($fila["imagen"] != ''){  //Si la imagen no está vacía
            $imagen = '<img src="img/' . $fila["imagen"] . '"  class="img-thumbnail" width="50" height="35" />'; //Añadimos la imagen
        }else{
            $imagen = ''; //Si la imagen está vacía, añadimos una imagen por defecto
        }

        
        $sub_array = array(); //Creamos un array para cada fila
        $sub_array[] = $fila["id"]; //Añadimos el id
        $sub_array[] = $fila["nombre"];
        $sub_array[] = $fila["apellidos"];
        $sub_array[] = $fila["telefono"];
        $sub_array[] = $fila["email"]; //Añadimos el email
        $sub_array[] = $imagen;
        $sub_array[] = $fila["fecha_creacion"];
        $sub_array[] = '<button type="button" name="editar" id="'.$fila["id"].'" class="btn btn-warning btn-xs editar">Editar</button>'; //Añadimos el botón de editar
        $sub_array[] = '<button type="button" name="borrar" id="'.$fila["id"].'" class="btn btn-danger btn-xs borrar">Borrar</button>'; //Añadimos el botón de borrar
        $datos[] = $sub_array;
    }

    //propiedades de la data table
    $salida = array(
        "draw"               => intval($_POST["draw"]), //Propiedad de DataTables para que se muestre el número de peticiones
        "recordsTotal"       => $filtered_rows, //Propiedad de DataTables para que se muestre el número total de registros
        "recordsFiltered"    => obtener_todos_registros(), //Propiedad de DataTables para que se muestre el número total de registros sin filtrar
        "data"               => $datos //Propiedad de DataTables para que se muestre los datos
    );

    echo json_encode($salida); //Enviamos los datos en formato JSON

    ?>