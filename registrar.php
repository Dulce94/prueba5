<?php
include 'conexion.php';

//recibir datos y almacenarlos en variables
$matricula = $_POST["matricula"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$grupo = $_POST["grupo"];
$turno = $_POST["turno"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$carrera = $_POST["carrera"];
$semestre = $_POST["semestre"];
//consulta para insertar

$insertar = "INSERT INTO alumno(matricula, nom_alumno, apellido_alumno, turno, carrera, grupo, tel_alumno, correo_alumno, semestre) VALUES ('$matricula', '$nombre', '$apellido', '$turno', '$carrera', '$grupo', '$telefono', '$correo', '$semestre')";

//ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo "Error al registrarse";
} else {
    echo "Usuario registrado exitosamente";
}

//cerrar conexion

mysqli_close($conexion);