function cerrar_pedido(id_pedido, total) {
    console.log(id_pedido, total);
    if (total < 1) return false;
    else {
        $.ajax({
            url: '../administrador/funciones/clientes/cerrar_pedido.php',
            type: 'post',
            dataType: 'text',
            data: { id_pedido, total },
            success: _ => {
                alert('Pedido cerrado!');
                location.reload()
                
            }, error: function () {
                alert('Error archivo no encontrado...')
            }
        });
    }
}