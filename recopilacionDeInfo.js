
function recopilar() {
// let rms = document.getElementById('opc1').checked;
// let computo = document.getElementById('opc2').checked;
// let areaSolicitante = document.getElementById('area').value;
// let nombreSolicitante = document.getElementById('nombre').value;
// let fechaElaboracion = document.getElementById("fechaEla").value;
// let folio = calcularFolio();

let params = {
  folio : calcularFolio(),
  rms : document.getElementById('opc1').checked,
  computo : document.getElementById('opc2').checked,
  areaSolicitante : document.getElementById('area').value,
  nombreSolicitante : document.getElementById('nombre').value,
  fechaElaboracion : document.getElementById("fechaEla").value,
  descripcion : document.getElementById("descripcion").value
}
 
ajax(params);
}


function calcularFolio() {
    let fecha = new Date();
    let year = String(fecha.getFullYear()).substring(2,4);
    let folio ="-"+year;
    return folio; 
}

function ajax(parametro) {
    // De esta forma se obtiene la instancia del objeto XMLHttpRequest
    if(window.XMLHttpRequest) {
      connection = new XMLHttpRequest();
    }
    else if(window.ActiveXObject) {
      connection = new ActiveXObject("Microsoft.XMLHTTP");
    }
   
     
   
    // Preparando la función de respuesta
    connection.onreadystatechange = response;
   
    // Realizando la petición HTTP con método POST
    connection.open('POST', 'registroDatos.php');
    connection.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    connection.send(JSON.stringify(parametro));
  }
   
  function response() {
    if(connection.readyState == 4) {
      alert(connection.responseText);
    }
  }
     


