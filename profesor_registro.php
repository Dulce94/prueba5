<!DOCTYPE HTML>
<html>
<head>
<title>Formulario de registro</title>
<link rel="stylesheet" href="estilos/estilo.css">
    </head>
    <body>
        <h1>Formulario de registro</h1>
        <form action="registrar.php" method="post" class="registro">
            <h2 class="titulo">Registrate</h2>
            <div class="contenedor-inputs">
                <input type="text" name="id_maestro" placeholder="Codigo" class="input-100" required>
                <input type="text" name="nombre" placeholder="Nombre" class="input-48" required>
                <input type="text" name="apellido" placeholder="Apellido" class="input-48" required>
                <input type="text" name="telefono" placeholder="Telefono" class="input-100" required>
                <input type="email" name="correo" placeholder="Correo" class="input-100" required mail>
                <input type="submit" value="Registrar" class="registrar">
                
                
            </div>
        </form>
    </body>
</html>