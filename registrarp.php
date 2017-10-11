<?php
include 'cn.php';

$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];

$insertar = "INSERT INTO personal(id_personal, nombre_personal, apellido_personal, tel_personal, correo_personal) VALUES ('$codigo', '$nombre', '$apellido', '$telefono', '$correo')";

//ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo "Error al registrarse";
} else {
    echo "Usuario registrado exitosamente";
}

//cerrar conexion

mysqli_close($conexion);