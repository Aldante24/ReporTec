<?php

include "conexion.php";

function crearBD(){
  $cnn = new conexion();
  $con = $cnn->conectar();

  $sql= "CREATE DATABASE TecLogin";
  if(mysqli_query($con, $sql)){
    echo "Consulta Correcta";
  }
  mysqli_close($con);
}

/*Se habilita para crear la BD en el servidor deseado.*/
//crearBD();

function crearTablas(){
  $cnn = new conexion();
  $con = $cnn->conectar();
  mysqli_select_db($con,"TecLogin");
  $sql = "CREATE TABLE usuarios (
    id INT(11) NOT NULL AUTO_INCREMENT,
    usuario CHAR(50),
    contrasena CHAR(50),
    PRIMARY KEY(id)
  )";
  if(mysqli_query($con,$sql)){
    echo "Tabla Creada";
  }
  mysqli_close($con);
}

/*Se habilita para crear las tablas en la base que se creo anteriormente.*/
// crearTablas();


 ?>
