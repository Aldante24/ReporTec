<?php

class conexion{
  function conectar(){
    return mysqli_connect("localhost","root","admin");
  }
}
$cnn = new conexion();
if($cnn->conectar()){
  echo "Conectado";
}else{
  echo "Desconectado";  
}



 ?>
