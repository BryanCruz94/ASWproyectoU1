var nombre = null;
var correo = null;
var val_FechaNacDate = null;
var val_FechaHoy = null;
var error = false;


//FUNCION PARA VALIDAR CAMPOS VACÍOS Y BIEN ESCRITOS
function validarDatos() {
    nombre = document.getElementById("nombre_Form").value;
    correo = document.getElementById("correo_Form").value;
    val_FechaNacDate = new Date(document.getElementById('fechaNac_Form').value);
    val_FechaHoy = new Date();
    error = false;

    if (nombre == '' || correo == '' || val_FechaNacDate == '') {
        alert("Por favor debe llenar todos los campos.");
        error = true;
    }

    //VALIDAR LA FECHA
    if (val_FechaHoy < val_FechaNacDate) {
        alert("La fecha de nacimiento no puede ser posterior a la fecha actual")
        error = true;
    }

    if (!validarMayordeEdad(val_FechaNacDate,val_FechaHoy)){
        alert("No puede ingresar su comentario si es menor de edad.")
        error=true;
    }



    if (/\d/.test(nombre)) {
        alert("El nombre no puede contener números");
        error = true;
    }

    if (correo !== '' && !/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/.test(correo)) {
        alert('El correo ingresado no es válido.');
        error = true;
    }

    if (error==false){
        alert("Su comentario ha sido enviado de manera correcta");
        
    }

}

function validarMayordeEdad(fechaNac, fechaHoy) {
    // Obtener la fecha ingresada en el input (debe estar en formato 'yyyy-mm-dd')
    const fechaIngresada = fechaNac;

    // Calcular la diferencia en milisegundos entre ambas fechas
    const diferenciaTiempo = fechaHoy - fechaIngresada;

    // Convertir la diferencia a años
    const edad = Math.floor(diferenciaTiempo / (1000 * 60 * 60 * 24 * 365.25));

    if(edad<18){
        return false;
    }else{
        return true;
    }


}