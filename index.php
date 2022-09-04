





<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es-ES">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
        <script src="Recursos/js/Buscador.js" type="text/javascript"></script>

        <link rel="stylesheet" href="fonts/icomoon/style.css">
        <link rel="stylesheet" type="text/css" href="style.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Style -->
        <link rel="stylesheet" href="css/style.css">

        <title>FORMULARIO</title>
    </head>
    <body>

        <main>



<header>
        <div class="logo">
            <img src="logo.png">
            <h2 class="empresa">SERVICIOS IT</h2>

        </div>

    </header>




            <h1>FORMULARIO DE CONTACTO </h1> 
          

          <!--  <form action="https://formsubmit.co/jromeros2@miumg.edu.gt" method="POST">-->
                <form action="https://formsubmit.co/jromeros2@miumg.edu.gt" method="POST">

                <div for="correo" class='field'>
                    <label>Correo Electrónico*</label>
                    <input name="correo"  class="form-control" type="correo" placeholder="name@example.com" id="correo" required onblur="buscar_datos();">

                   <!-- ondblclick="Doble_Clic(this.value)"-->
                    <!--onblur="buscar_datos();"-->

                </div>


                <div class='field'>
                    <label for="nombre">Nombre</label>
                    <input name="nombre" class="form-control" type="text" placeholder="Nombre" id="nombre" disabled value=""/>
                </div>
                <div class='field'>
                    <label for="departamento">Departamento</label>
                    <input name="departamento" class="form-control" type="text" disabled placeholder="Departamento" id="departamento" value=""/>

                </div>


                <fieldset class="row mb-3">
                    <legend class="fiel">Servicios*</legend>

                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="servicio" id="gridRadios1" value="Soporte_tecnico" required>
                            <label class="form-check-label" for="gridRadios1">
                                Soporte Técnico
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="servicio" id="gridRadios2" value="Desarrollo" required>
                            <label class="form-check-label" for="gridRadios2">
                                Desarrollo
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="servicio" id="gridRadios3" value="Base_de_datos" required>
                            <label class="form-check-label" for="gridRadios3">
                                Base de Datos
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="servicio" id="gridRadios4" value="Telecomunicaciones" required>
                            <label class="form-check-label" for="gridRadios4">
                                Telecomunicaciones
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="servicio" id="gridRadios5" value="Otros" required>
                            <label class="form-check-label" for="gridRadios5">
                                Otros
                            </label>
                        </div>


                    </div>

                </fieldset>

                <div class="wrap-input1 validate-input" data-validate = "El mensaje es requerido">
                    <label for="message" class="form-label">Descripción<span>*</span></label>
                    <textarea class="input1" name="message" placeholder="Descripción" required></textarea>
                    <span class="shadow-input1"></span>
                </div>

                <div class="container-contact1-form-btn">
                    <button class="contact1-form-btn" onclick="return confirmacion()">
                        <span>
                            ENVIAR
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                        </span>
                    </button>



                </div>

 
                        </form>
                        </main>


                        </body>
                        </html>  




                        <!--  FUNCION JS -->

                        <script type="text/javascript">

                            function confirmacion(){

                                var respuesta = confirm ("¿Desea enviar la información?"); 
                                if(respuesta == true){
                                    return true;
                                }else{
                                    return false;
                                }


                            }




                            function buscar_datos() {
                                
                                correo = $("#correo").val();
                               

                                var parametros =
                                        {
                                            "buscar": "1",
                                            "correo": correo
                                           
                                        };
                                $.ajax(
                                        {
                                            data: parametros,
                                            dataType: 'json',
                                            url: 'codigos_php.php',
                                            type: 'post',
                                            beforeSend: function ()
                                            {
                                              
                                            },
                                            error: function ()
                                            {
                                              
                                            },
                                            complete: function ()
                                            {
                                               
                                            },
                                            success: function (valores)
                                            {
                                               if(valores.existe=="1") //Aqui usamos la variable que NO use en el vídeo
        {
                                         $("#nombre").val(valores.nombre);

                                         $("#departamento").val(valores.departamento);
        }
        else
        {
          alert("El propietario no existe, ¡Crealo!")
        }


                                                
                                            }
                                        })

                            }

   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 
<!-- jQuery UI -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  

                        </script>


<script type="text/javascript">
  $(function() {
     $( "#search_persona" ).autocomplete({
       source: 'lista_persona.php',
     });
  });
</script>  


<script>

        function Doble_Clic(str) {
            if (str.length == 0) {
                document.getElementById("nombre").value = "";
                document.getElementById("departamento").value = "";
                return;
            }
            else {

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function ()
                {
                        if (this.readyState == 4 && this.status == 200)
                    {
                    var myObj = JSON.parse(this.responseText);
                    document.getElementById
                    ("nombre").value = myObj[0];
                    document.getElementById(
                    "departamento").value = myObj[1];
                    }
                };
                xmlhttp.open("GET", "buscar_id.php?search_persona=" + str, true);
                xmlhttp.send();
            }
        }
    </script>      








