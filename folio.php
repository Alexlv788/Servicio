<?php 
//Comparar fecha
$fecha = "SELECT max(fechaElaboracion) as fechaElaboracion
          FROM solicitud ORDER BY fechaElaboracion DESC";
          //obtenemos la ultima registrada
$Ufecha =  mysqli_query($conexion, $fecha) or die("Conexion fallida".mysqli_error($conexion));;
// obtenemos la fecha que se va a registra
$date = mysqli_fetch_array($Ufecha);
$guardarAnio = substr($date[0],0,4;
$guardarAnioElabo = substr($fechaElaboracion,0,4);

echo $guardarAnio ."    " . $guardarAnioElabo;
//comparamos ambas fechas 
if (strcmp($guardarAnio,$guardarAnioElabo) != 0) {
    //si son diferentes reiniciamos autoincremente
    $reiniciar = "ALTER TABLE solicitud AUTO_INCREMENT = 1";
    mysqli_query($conexion, $reiniciar) or die("Conexion fallida".mysqli_error($conexion));;   
    echo "entre al if";
    $folio = "1".$year;
    
}

else {
    echo "entre al else";
    $autoIncrement = " SELECT max(id) as id FROM solicitud ORDER BY id DESC";
    $resultado = mysqli_query($conexion, $autoIncrement) or die("Conexion fallida".mysqli_error($conexion));;
    $arr = mysqli_fetch_array($resultado);
    
    if ($arr[0]==null) {
        $arr[0]=1;
    }
    else{
        $arr[0]=$arr[0]+1;
    }
    echo $arr[0];
    
    $folio =$arr[0] .$year;
   
}
?>