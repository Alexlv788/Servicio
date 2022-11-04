<?php
include('conexion.php');
$informacion =  json_decode(file_get_contents('php://input'),true);
$departamento = "";
 $year = "-23"; /*$informacion["folio"];*/
$rms = $informacion["rms"];
$computo = $informacion["computo"];
$areaSolicitante = $informacion["areaSolicitante"];
$nombreSolicitante = $informacion["nombreSolicitante"];
$fechaElaboracion = $informacion["fechaElaboracion"];
$descripcion = $informacion["descripcion"];

if ($rms == 1) {
    $departamento = "rms";
}

else if($computo == 1){
    $departamento = "computo";
}

include('folio.php');

$consulta = "INSERT INTO solicitud(folio, departamento, areaSolicitante,
                                       nombreSolicitante, fechaElaboracion,descripcion)
                VALUES ('$folio','$departamento', '$areaSolicitante', 
                '$nombreSolicitante','$fechaElaboracion','$descripcion')";
    
    mysqli_query($conexion, $consulta) or die("Conexion fallida".mysqli_error($conexion));;   
    mysqli_close($conexion);


?>
