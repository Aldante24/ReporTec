$(document).ready(ini);

function ini(){
    $("#registrar").click(enviarDatos);
}
function enviarDatos(){
  $.ajax({
    url:"insertar.php",
    success:function(result){
      alert(result);
    }
  });
}
