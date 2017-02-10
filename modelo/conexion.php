<?php

class conexion{
  function conectar(){
    return mysqli_connect("localhost","root","admin");
  }
}

/*Las siguientes lineas comentadas solo es para probar que la conexion a la BD sea correcta*/
// $cnn = new conexion();
// if($cnn->conectar()){
//   echo "Conectado";
// }else{
//   echo "Desconectado";
// }



 ?>
