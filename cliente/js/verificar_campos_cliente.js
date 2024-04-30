function verificar_campos_cliente() {
    let nombre = document.formulario.nombre.value;
    let correo = document.formulario.correo.value;
    let mensaje = document.formulario.mensaje.value;
    
    if (nombre == "" || correo == "" || mensaje == "") {
        $("#error_campos").fadeIn(1500);
        setTimeout(() => { $("#error_campos").fadeOut(1500); }, 5000);
        return false;
    }
    else {
        
            alert("Gracias por contactarnos " + nombre);
            return true;
        
    }
}


