function validar(){
    var matricula, nombre, apellido, turno, carrera, telefono, correo, expresion;
    matricula = document.getElementById("matricula").value; 
    nombre = document.getElementById("nombre").value; 
    apellido = document.getElementById("apellido").value; 
    turno = document.getElementById("turno").value; 
    carrera = document.getElementById("carrera").value; 
    telefono = document.getElementById("telefono").value; 
    correo = document.getElementById("correo").value; 
    
    
    if(matricula === "" || nombre === "" || apellido === "" || turno === "" || carrera === "" || telefono === "" || correo === ""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if(matricula.length>11) {
        alert("La matricula es muy larga");
        return false;
    }
    else if(nombre.length>30) {
        alert("El nombre es muy largo");
        return false;
    }
    else if(apellido.length>30) {
        alert("El nombre es muy largo");
        return false;
    }
    else if(turno.length>20) {
        alert("El turno es muy largo");
        return false;
    }
    else if(carrera.length>11) {
        alert("la carrera es incorrecta");
        return false;
    }
    else if(telefono.length>10) {
        alert("El nombre es muy largo");
        return false;
    }

     else if(correo.length>50) {
        alert("El correo es muy largo");
        return false;
    }
    else if(isNaN(telefono)) {
        alert("El telefono ingresado no es un numero");
        return false;
    }
}
