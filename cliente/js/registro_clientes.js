function verificar_clientes() {
    let nombre = document.formulario.nombre.value;
    let correo = document.formulario.correo.value;
    let contrasenia = document.formulario.contrasenia.value;
    
    if (nombre == "" || correo == "" || contrasenia == "") {
        $("#error_campos").fadeIn(1500);
        setTimeout(() => { $("#error_campos").fadeOut(1500); }, 5000);
        return false;
    }
    else {
        if (validar_correo_clientes()) {
            alert("Se ha registrado " + nombre);
            return true;
        }
    }
}

function validar_correo_clientes() {
    let valido = false;
    let correo = document.formulario.correo.value;

    if (correo != "") {
        $.ajax({
            url: './funciones/clientes/validar_correo.php',
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