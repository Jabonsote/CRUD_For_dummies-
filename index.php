<!doctype html>
<html lang="es">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="CRUD, PHP, JAVASCRIPT">
    <meta name="description" content="Port folio">
    <meta name="author" content="Javier Ramirez Gonzalez && Adan Rodarte">
    <meta name="copyright" content="UABC inc.">

 
    <!-- ESTILOS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- FUENTES -->
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Slackey&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarala&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sulphur+Point:wght@300;400;700&display=swap" rel="stylesheet">

	

    <!-- Bootstrap CSS and tables-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css ">


    <link rel="icon" href="./images/uabc.png">


    <title>CRUD - Final project </title>
	
  </head>

  <body onload="window.alert('Bienvenido a mi página');">


<header id="header">
        <img class="logo" alt="logo" src="./images/uabc.png">
        <div class="menu"></div>
        <nav>
            <ul class="menulist">
                <li><a  href="#inicio" class="active">INICIO</a></li>
                <li><a target="_BLANK" href="https://drag-uabc.netlify.app/">DRAG-AND-DROP </a></li>
                <li><a target="_BLANK" href="https://ipi-uabc-gamecanvas.netlify.app/">GAME</a></li>
                <li><a target="_BLANK" href="https://jabonsoteuwu.netlify.app/">CONTACT0</a></li>
            </ul>
        </nav>
    </header>
    <section id="nav">
        <img  src="./images/nube1.png" alt="nube1" id="nube1">
        <img src="./images/background.png" alt="" id="transparente">
        <img src="./images/f.png" alt="fondo" id="fondo">
        <img src="./images/nube2.png" alt="nube2" id="nube2">
        <h1 id="slogan"> I P I
        </h1>
        <a href="#inicio" id="btn">Formulario</a>

        <img src="./images/viento.png" alt="viento" id="viento">
        <img src="./images/mascota2.png" alt="persona" id="persona">
    </section>

    <div class="sec" id="inicio">
        <h2>CRUD ~ Final project</h2>
    <article>
        <h3> Javier R & Adan R</h3>
        <br>
        <p>El proyecto final llevó a cabo un CRUD sencillo, donde se pueden crear nuevos registros de estudiantes, así como editarlos y a su vez borrarlos de la base de datos.
            Utilizando los conocimientos adquiridos en el curso (html,javascript,css,php), realizamos está pagina web como proyecto final para la clase de Introducción a la programación en internet.
        </p>
            
        <br>

   
    </article>
 </div>

  <div class="container fondo">
<div class="row">
    <div class="col-2 offset-10">
        <div class="text-center">
            <!-- Button trigger modal -->
            <br>
            <br>
                <button type="button" class="btn btn-dark w-200 fs-7 mt-0 px-4 pb-12" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="botonCrear">
                <i class="bi bi-arrow-up-circle-fill"></i> Crear
                </button>
        </div>
    </div>
</div>
<br>
<br>

<div class="table-responsive" id="form">
    <table id="datos_usuario" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Imagen</th>
                <th>Fecha Creación</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
    </table>
</div>
</div>

</div>

<!-- Modal -->
<div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<form method="POST" id="formulario" enctype="multipart/form-data">
    <div class="modal-content">
        <div class="modal-body">
            <label for="nombre">Ingrese el nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
            <br>

            <label for="apellidos">Ingrese los apellidos</label>
            <input type="text" name="apellidos" id="apellidos" class="form-control">
            <br>

            <label for="telefono">Ingrese el teléfono</label>
            <input type="text" name="telefono" id="telefono" class="form-control">
            <br>

            <label for="email">Ingrese el email</label>
            <input type="email" name="email" id="email" class="form-control">
            <br>

            <label for="imagen">Seleccione una imagen</label>
            <input type="file" name="imagen_usuario" id="imagen_usuario" class="form-control">
            <span id="imagen_subida"></span>
            <br>
        </div>

        <div class="modal-footer">
            <input type="hidden" name="id_usuario" id="id_usuario">
            <input type="hidden" name="operacion" id="operacion">             
            <input type="submit" name="action" id="action" class="btn btn-success" value="Crear">
        </div>
    </div>
</form>
</div>      
</div>
</div>

<div class="sec">
        <h2>Gracias por visitar</h2>
        <h1 class="mb-8 fs-4 my-4">
            <a class="nav-link" href="#nav">
            <button type="button" class="btn btn-warning">
            <span >Regresar al Inicio</bu></h1>
         </a></button>

        <br>
            <img src="./images/about.jpg" alt="logo" id="logo" width="100%" height=400px"> 
            <br>
    </div>



        <!-- FOOTER -->
        <footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
        <div class="text-center p-0" style="background-color: rgba(0, 0, 0, 0.2);">
          <div id="iconos" >
            <a target="_BLANK" href="https://www.facebook.com/javi.ramirezglez/"><i class="bi bi-facebook"></i></a>
            <a target="_BLANK" href="https://twitter.com/JabonsoteUwU"><i class="bi bi-twitter"></i></a>
            <a target="_BLANK" href="https://www.instagram.com/jabonsote"><i class="bi bi-instagram"></i></a>  
          </div>
        </div>

      </footer>






  <script src= "particles.js-master/particles.js"> </script>
  <script src= "./particles.js-master/demo/js/app.js"> </script>
    <script src="./js/script.js"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>   

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function(){ //para que se ejecute cuando se cargue la pagina
        $("#botonCrear").click(function(){ //para que se ejecute cuando se pulse el boton
            $("#formulario")[0].reset(); //para que se resetee el formulario
            $(".modal-title").text("Crear Usuario"); //para que el titulo del modal sea Crear Usuario
            $("#action").val("Crear");     //para que el valor del action sea Crear
            $("#operacion").val("Crear"); //para que el valor del operacion sea Crear
            $("#imagen_subida").html(""); //para que la imagen subida sea vacia
        });
        
        var dataTable = $('#datos_usuario').DataTable({ 
            "processing":true, //para activar el procesamiento de datos
            "serverSide":true, //para activar el procesamiento en servidor de datos
            "order":[], //para no ordenar por defecto
            "ajax":{ //para llamar el archivo php que esta en el servidor
                url: "obtener_registros.php",
                type: "POST" //para que se puedan enviar datos
            },
            "columnsDefs":[ //para que se muestren los datos en las columnas
                {
                "targets":[0, 3, 4],
                "orderable":false,
                },
            ],
            "language": { //para cambiar el lenguaje a español
            "decimal": "", //para cambiar el separador de los decimales
            "emptyTable": "No hay registros", //para que muestre mensaje de que no hay registros
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
            "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
            "infoFiltered": "(Filtrado de _MAX_ total entradas)",
            "infoPostFix": "",
            "thousands": ",", 
            "lengthMenu": "Mostrar _MENU_ Entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados", //para que muestre mensaje de que no hay resultados
            "paginate": { 
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
        });
        
        //Aquí código inserción
        $(document).on('submit', '#formulario', function(event){
        event.preventDefault();
        var nombres = $('#nombre').val(); //para obtener el valor de la caja de texto nombre
        var apellidos = $('#apellidos').val();
        var telefono = $('#telefono').val();
        var email = $('#email').val();
        var extension = $('#imagen_usuario').val().split('.').pop().toLowerCase(); //para obtener la extensión de la imagen
        if(extension != '') //para validar que se haya seleccionado una imagen
        {
            if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1) //para validar que la extensión sea correcta
            {
                alert("Fomato de imagen inválido");
                $('#imagen_usuario').val(''); 
                return false;
            }
        }	
        if(nombres != '' && apellidos != '' && email != '') //para validar que no esten vacios los campos
            {
                $.ajax({ //para enviar los datos al archivo php
                    url:"crear.php",
                    method:'POST',
                    data:new FormData(this), //para enviar los datos del formulario
                    contentType:false, //para que no sepa que tipo de datos va a enviar
                    processData:false, //para que no sepa que va a procesar los datos
                    success:function(data) //para que se ejecute cuando se reciba la respuesta del archivo php
                    {
                        alert(data);
                        $('#formulario')[0].reset(); //para que se resetee el formulario
                        $('#modalUsuario').modal('hide'); //para que se cierre el modal
                        dataTable.ajax.reload(); //para que se recargue la tabla
                    }
                });
            }
            else
            {
                alert("Algunos campos son obligatorios");
            }
        });

        //Funcionalida de editar
        $(document).on('click', '.editar', function(){		
        var id_usuario = $(this).attr("id");	//para obtener el id del boton editar	
        $.ajax({ 
            url:"obtener_registro.php",
            method:"POST",
            data:{id_usuario:id_usuario},//para enviar el id del boton editar
            dataType:"json", //para que se reciba en formato json
            success:function(data)
                {
                    //console.log(data);				
                    $('#modalUsuario').modal('show'); //para que se muestre el modal
                    $('#nombre').val(data.nombre);    //para que el valor de la caja de texto nombre sea igual al nombre del usuario
                    $('#apellidos').val(data.apellidos); //para que el valor de la caja de texto apellidos sea igual al apellido del usuario
                    $('#telefono').val(data.telefono); //para que el valor de la caja de texto telefono sea igual al telefono del usuario
                    $('#email').val(data.email);
                    $('.modal-title').text("Editar Usuario");
                    $('#id_usuario').val(id_usuario);
                    $('#imagen_subida').html(data.imagen_usuario); //para que la imagen subida sea igual a la imagen del usuario
                    $('#action').val("Editar"); //para que el valor del operacion sea Editar
                    $('#operacion').val("Editar");
                },
                error: function(jqXHR, textStatus, errorThrown) { //si hay un error en la respuesta del ajax
                console.log(textStatus, errorThrown);
                }
            })
        });

        //Funcionalida de borrar
        $(document).on('click', '.borrar', function(){ //para que se ejecute cuando se haga click en el boton borrar
            var id_usuario = $(this).attr("id");  //para obtener el id del boton borrar
            if(confirm("Esta seguro de borrar este registro:" + id_usuario)) //para validar que se haga click en el boton borrar
            {
                $.ajax({
                    url:"borrar.php",
                    method:"POST",
                    data:{id_usuario:id_usuario}, //para enviar el id del boton borrar
                    success:function(data)
                    {
                        alert(data);
                        dataTable.ajax.reload(); //para que se recargue la tabla
                    }
                });
            }
            else
            {
                return false;	
            }
        });

    });         
</script>

</body>
</html>