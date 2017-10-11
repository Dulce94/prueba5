<?php

$conexion = mysqli_connect("localhost", "root", "", "casilleros");
if (!$conexion) {
    echo 'Error al conectar a la Base de Datos';
}

else {
   echo 'Conectado a la Base de Datos';
}
