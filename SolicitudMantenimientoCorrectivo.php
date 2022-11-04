<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOLICITUD DE MANTENIMIENTO CORRECTIVO</title>
    <link rel="stylesheet" href="SolicitudMantenimientoCorrectivo.css">
    <link href='https://fonts.googleapis.com/css?fa,ilyRoboto' rel='stylesheet' type='text/css'>
</head>


<body>
    <h2 id = "titulo">Mantenimiento correctivo</h2>
    
    <div id = "franja">
    </div>

    <h2 id="sub">SOLICITUD</h2>

   <button id = "btnguia"> <a href="guia/GUIA SOLICITUD DE MANTENIMIENTO CORRECTIVO.pdf" download="Guía-solicitud-mantenimiento-correctivo" target="_blank">Guía de llenado</a></button>
   
   <button id = "btnguia2"> <a href="guia/HERRAMIENTAS PARA ANÁLISIS DE CAUSAS.pdf" download="Herramientas-para-análisis-de-causas" target="_blank">¿Cómo analizar las causas?</a></button>

   <table style="border: hidden" class="folio">
    <tr>
        <th>FOLIO</th>
    </tr>

    <tr>
        <td>
            <input type="text">
        </td>
    </tr>
</table>



<section>
    <section id = "sec1">
    </section>
    <table style="border: hidden" class="tabla1">
        <tr>
            <th>DEPTARTAMENTO</th>
        </tr>

        <tr><td></td></tr>

        <tr id = "principal2">
            <td>
            <form action="" class="formulario">
                <div class="radio">
                    <input type="radio" name="accion" id="opc1">
                    <label for="opc1">Recursos materiales y servicios</label>
                    <br></br>
                    <input type="radio" name="accion" id="opc2">
                    <label for="opc2">Centro de cómputo</label>
                </div>
            </form>
            </td>
        </tr>
    </table>

    

    <table style="border: hidden" class="tabla2">
        <tr>
            <th>ÁREA SOLICITANTE</th>
        </tr>

        <tr>
            <td><textarea id="area" name="area" cols="30" rows="5" placeholder="El solicitante anota nombre del área correspondiente, (Dirección, Subdirección, Departamento ó División). La solicitud puede ser llenada por cualquier trabajador que pertenezca al área solicitante."></textarea></td>
        </tr>
    </table>
</section>
    


<section id = "sec3">
    

    <table class="tabla">

        <tr id = "solicitud">
            <th colspan="2"><h2>Solicitud</h2></th>
        </tr>


        <tr id = "fecha">
            <th>NOMBRE DEL SOLICITANTE <input id="nombre" type="text" name="nombre"></th>
            <th> FECHA DE ELABORACIÓN <input id="fechaEla" type="date" name="fecha"></th>
        </tr>


        <tr id = "emoji">
            <th>👤<br></br></th>
            <th>📅<br></br></th> 
        </tr>

<br></br>


        <tr id = "encabezado">
            <th colspan="2">DESCRIPCIÓN DEL SERVICIO SOLICITADO O FALLA A REPARAR</th>
        </tr>
        

        <tr>
            <td colspan="2"><textarea id="descripcion" name="descripcion" cols="30" rows="5" placeholder="El solicitante anota la descripción de las modificaciones o reparación de fallas en los equipos identificadas o requeridas y su ubicación."></textarea></td>
        </tr>
    </table>

    <button type="submit" id="enviar" onclick="recopilar()">G U A R D A R</button>
</section>

<script src="recopilacionDeInfo.js"></script>
</body>
</html>