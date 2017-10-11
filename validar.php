<?php
$usuario =$_POST['usuario'];
$clave =$_POST['contraseña'];

//conectar a la bd
$conexion = mysqli_connect("localhost", "root", "", "casilleros");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave ='$clave'";
$resultado = mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0){
    header("location:administrador.html");
}
else{
    echo "Error en la autentificacion";
}
mysqli_free_result($resultado);
mysqli_close($conexion);