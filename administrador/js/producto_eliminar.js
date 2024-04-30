function producto_eliminar(id) {
    if (confirm("¿Esta seguro de eliminar?")) {
        $.ajax({
            url: './funciones/productos/productos_elimina.php',
            type: 'post',
            dataType: 'text',
            data: { "id": id },
            success: (res) => {
                console.log(res);
                if (res == 1) {
                    $("#" + id).hide();
                }
            }
        });
    }
    return false;
}