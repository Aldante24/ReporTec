<?php

include "../controlador/usuariosControlador.php";

if(isset($_GET["usuario"]) || isset($_GET["pass"])) {
  $usuariosCon = new usuariosControlador();
  if($usuariosCon->insertarUsuarios($_GET["usuario"],$_GET["pass"])){
    echo "true";
  }else {
    echo "false";
  }
}else {
  echo "false";
}

 ?>
