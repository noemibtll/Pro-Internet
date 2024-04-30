function validar_correo_actualizado() {
    let valido = false;
    let correo = document.formulario.correo.value;
    let id = document.formulario.id.value;

    if (correo != "") {
        $.ajax({
            url: './funciones/empleados/validar_correo_actualizado.php',
            type: 'post',
            dataType: 'text',
            data: { "correo": correo, "id": id },
            success: function (res) {
                if (res == 1) {
                    $("#correo_error").html(correo + ' ya existe');
                    $("#correo_error").fadeIn();
                    setTimeout(() => { $("#correo_error").fadeOut(1500); }, 5000);
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

function verificar_actualizacion() {
    let nombre = document.formulario.nombre.value;
    let apellidos = document.formulario.apellidos.value;
    let correo = document.formulario.correo.value;
    let rol = document.formulario.rol.value;

    if (nombre == "" || apellidos == "" || correo == "" || rol == "0") {
        $("#error_campos").fadeIn();
        setTimeout(() => { $("#error_campos").fadeOut(1500); }, 5000);
        return false;
    }
    else {
        if (validar_correo_actualizado()) {
            alert("Bienvenido " + nombre);
            return true;
        }
    }
}