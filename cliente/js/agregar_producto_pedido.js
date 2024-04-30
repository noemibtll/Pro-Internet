function agregar_producto() {
    let id_producto = document.getElementById('id_producto').value;
    let cantidad = document.getElementById('cantidad').value;

    if (!validar_sesion()) {
        header("location: ./login_cliente.php");
    } else {
        // Verifica si la cantidad es válida
        if (cantidad < 0) {
            alert('La cantidad debe ser mayor o igual a cero.');
            return false;
        }
        $.ajax({
            url: '../administrador/funciones/clientes/agregar_producto_pedido.php',
            type: 'post',
            dataType: 'text',
            data: { id_producto, cantidad },
            success: _ => {
                alert('Producto agregado!');
            },
            error: function () {
                alert('Error: archivo no encontrado...');
            }
        });
    }
}
