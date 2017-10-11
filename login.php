<!DOCTYPE html>
<html lang="es">
<head>
<title>Inicio de Sesion</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">
<title>Inicio de Sesion</title>
    <link rel="stylesheet" href="estilos/estilo.css">
<link rel="stylesheet" href="estilos/estilo_menu.css">
</head>
<body>
    <h1>Inicio de Sesion</h1>
        <form action="validar.php" method="post" class="registro">
            <h2 class="titulo">Iniciar sesion</h2>
            <div class="contenedor-inputs">
                <input type="text" name="usuario" placeholder="&#128272: Usuario" class="input-100" required>
                <input type="password" name="contraseña" placeholder="&#128272: Contrseña" class="input-100" required>

                <input type="submit" value="Iniciar" class="registrar">
                
                <a href="index.html" class="registrar" value="Regresar" type="submit">Regresar</a>
            </div>
           
        </form>

           
</body>
</html>
