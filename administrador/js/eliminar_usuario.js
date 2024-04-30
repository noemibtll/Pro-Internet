function eliminar(eliminado) {
    if (confirm("¿Esta seguro de eliminar?")) {
        $.ajax({
            url: './funciones/empleados/empleados_elimina.php',
            type: 'post',
            dataType: 'text',
            data: { "id": eliminado },
            success: (res) => {
                console.log(res);
                if (res == 1) {
                    $("#" + eliminado).hide();
                }
            }, error: () => {
                $('#mensaje').html('Cancelado');
            }
        });
    }
    return false;
}