function verificar() {
    let nombre = document.formulario.nombre.value;
    let apellidos = document.formulario.apellidos.value;
    let correo = document.formulario.correo.value;
    let rol = document.formulario.rol.value;
    let contrasenia = document.formulario.contrasenia.value;
    let imagen = document.formulario.imagen.value;
    
    if (nombre == "" || apellidos == "" || correo == "" || rol == "0" || contrasenia == "" || imagen == "") {
        $("#error_campos").fadeIn(1500);
        setTimeout(() => { $("#error_campos").fadeOut(1500); }, 5000);
        return false;
    }
    else {
        if (validar_correo()) {
            alert("Bienvenido " + nombre);
            return true;
        }
    }
}

function validar_correo() {
    let valido = false;
    let correo = document.formulario.correo.value;

    if (correo != "") {
        $.ajax({
            url: './funciones/empleados/validar_correo.php',
            type: 'post',
            dataType: 'text',
            data: 'correo=' + correo,
            success: function (res) {
                if (res == 1) {
                    $("#correo_error").html(correo + ' ya existe');
                    $("#correo_error").fadeIn(1500);
                    setTimeout(function () {
                        $("#correo_error").fadeOut(1500);
                    }, 5000);
                }
                else {
                    valido = true;
                }
            }, error: function () {
                alert('Error archivo no encontrado...')
            }
        });
    }
    return valido;
}