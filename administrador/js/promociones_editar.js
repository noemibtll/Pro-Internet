function verificar_actualizacion() {
    let valido = false;
    let nombre = document.formulario.nombre.value;
    let id = document.formulario.id.value;

    if (correo != "") {
        $.ajax({
            url: './funciones/promociones/validar_archivo_actualizado.php',
            type: 'post',
            dataType: 'text',
            data: { "correo": correo, "id": id },
            success: function (res) {
                if (res == 1) {
                    $("#correo_error").html(nombre + ' ya existe');
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


