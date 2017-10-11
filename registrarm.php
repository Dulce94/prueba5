<?php
include 'cn.php';

$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];

$insertar = "INSERT INTO maestro(id_maestro, nom_maestro, apellido_maestro, tel_maestro, correo_maestro) VALUES ('$codigo', '$nombre', '$apellido', '$telefono', '$correo')";

//ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo "Error al registrarse";
} else {
    echo "Usuario registrado exitosamente";
}

//cerrar conexion

mysqli_close($conexion);