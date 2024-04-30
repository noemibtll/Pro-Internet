function verificar() {
    let nombre = document.formulario.nombre.value;
    let codigo = document.formulario.codigo.value;
    let descripcion = document.formulario.descripcion.value;
    let costo = document.formulario.costo.value;
    let stock = document.formulario.stock.value;
    let imagen = document.formulario.imagen.value;

    if (nombre == "" || codigo == "" || descripcion == "" || costo == "0" || stock == "0" || imagen == "") {
        $("#error_campos").fadeIn();
        setTimeout(() => { $("#error_campos").fadeOut(1500); }, 5000);
        return false;
    }
    if (validar_codigo() == false) return false;
    
    return true;
}

function validar_codigo() {
    let valido = false;
    let codigo = document.formulario.codigo.value;

    if (codigo != "") {
        $.ajax({
            async: false,// hacer que js se espere a que termine la consulta
            url: './funciones/productos/productos_validar_codigo.php',
            type: 'post',
            dataType: 'text',
            data: { "codigo": codigo },
            success: function (res) {
                if (res == 1) {
                    $("#codigo_error").html(codigo + ' ya existe');
                    $("#codigo_error").fadeIn(1500);
                    setTimeout(_ => { $("#codigo_error").fadeOut(1500); }, 5000);
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