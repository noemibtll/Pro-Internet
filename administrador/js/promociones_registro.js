function verificar() {
    let nombre = document.formulario.nombre.value;
    let archivo = document.formulario.archivo.value;


    if (nombre == "" || archivo == "" ) {
        $("#content").fadeIn(1500);
        setTimeout(() => { $("#content").fadeOut(1500); }, 5000);
        return false;
    }
    else {
        if (validar_codigo()) {
            alert("Registrado");
            return true;
        }
    }
}