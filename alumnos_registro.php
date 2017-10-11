<!DOCTYPE HTML>
<html>
<head>
<title>Formulario de registro</title>
<link rel="stylesheet" href="estilos/estilo.css">
   <script src="validar.js"></script>
    </head>
    <body>
        <h1>Formulario de registro</h1>
        <form action="registrar.php" method="post" class="registro" onsubmit="return validar()">
            <h2 class="titulo">Registro Alumno</h2>
            <div class="contenedor-inputs">
                <input type="text" id="matricula" name="matricula" placeholder="matricula" class="input-100" required>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="input-100" required>
                <input type="text" id="apellido" name="apellido" placeholder="Apellido" class="input-100" required>                
                <input type="text" id="grupo" name="grupo" placeholder="grupo" class="input-48" required>
                <input type="text" id="turno" name="turno" placeholder="Turno" class="input-48" required>
                <input type="text" id="telefono" name="telefono" placeholder="Telefono" class="input-100" required>
                <input type="email" id="correo" name="correo" placeholder="Correo" class="input-100" required>
                
                <div class="contenedor-inputs">
                    <select name="carrera" class="input-100">
                        <option value="">Carrera</option>
                        <option value="Ing. en Informatica">Ing. en Informatica</option>
                        <option value="Ing. en Sistemas">Ing. en Sistemas</option>
                        <option value="Ing. Ambiental">Ing. Ambiental</option>
                        <option value="Ing. en Electronica">Ing. en Electronica</option>
                        <option value="Biomedica">Biomedica</option>
                        <option value="Lic. en Administracion">Lic. en Administracion</option>
                        <option value="Arquitectura">Arquitectura</option>   
                    </select>
                </div>
                
                
                 <div class="contenedor-inputs">
                    <select name="semestre" class="input-100">
                        <option value="">Semestre</option>
                        <option value="1">1°</option>
                        <option value="2">2°</option>
                        <option value="3">3°</option>
                        <option value="4">4°</option>
                        <option value="5">5°</option>
                        <option value="6">6°</option>
                        <option value="7">7°</option>
                        <option value="8">8°</option>
                        <option value="9">9°</option>   
                    </select>
                </div>

                <input type="submit" value="Registrar" class="registrar">
                
                
            </div>
        </form>
    </body>
</html>