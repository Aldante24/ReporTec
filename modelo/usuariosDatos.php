<?php

include "../entidades/usuarios.php";
include "conexion.php";

class usuariosDatos{
  function insertarUsuarios($usuario,$pass){
    $cnn = new conexion();
    $con = $cnn->conectar();

    $usuarios = new usuarios();
    $usuarios->usuario = $usuario;
    $usuarios->contrasena = $pass;
    mysqli_select_db($con,"TecLogin");
    $sql = "INSERT INTO usuarios (usuario,contrasena)
    VALUES (
      '".$usuarios->usuario."',
      '".$usuarios->contrasena."'
    )";
    if(mysqli_query($con,$sql)){
      return true;
    }else {
      return false;
    }
    mysqli_close($con);
  }
}

/*Para la insercion de usuarios en la tabla*/
// $obj = new usuariosDatos();
// if($obj->insertarUsuarios("tec","123456")){
//   echo "Todo salio bien";
// }



 ?>
