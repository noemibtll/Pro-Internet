function validar_codigo_actualizado() {
    let valido = false;
    let codigo = document.formulario.codigo.value;
    let id = document.formulario.id.value;

    if (codigo != "") {
        $.ajax({
            async: false,
            url: './funciones/productos/productos_validar_codigo_actualizado.php',
            type: 'post',
            dataType: 'text',
            data: { "codigo": codigo, "id": id },
            success: function (res) {
                if (res == 1) {
                    $("#codigo_error").html(codigo + ' ya existe');
                    $("#codigo_error").fadeIn();
                    setTimeout(() => { $("#codigo_error").fadeOut(1500); }, 5000);
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
    let nombre      = document.formulario.nombre.value;
    let codigo      = document.formulario.codigo.value;
    let descripcion = document.formulario.descripcion.value;
    let costo       = document.formulario.costo.value;
    let stock       = document.formulario.stock.value;

    if (nombre == "" || codigo == "" || descripcion == "") {
        $("#error_campos").fadeIn();
        setTimeout(() => { $("#error_campos").fadeOut(1500); }, 5000);
        return false;
    }
    if (validar_codigo_actualizado() == false) return false;
    
    return true;
}