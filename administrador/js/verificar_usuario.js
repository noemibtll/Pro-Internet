function verificar_usuario() {
    let user = document.login.user.value;
    let pass = document.login.pass.value;

    if (user != "" && pass != "") {
        $.ajax({
            url: "./funciones/empleados/validar_usuario.php",
            type: "post",
            dataType: "text",
            data: { "user": user, "pass": pass },
            success: (res) => {
                if (res == 1) {
                    window.location.replace("./bienvenido.php");
                }
                else {
                    $("#error_usuario").html("Usuario no valido");
                    $("#error_usuario").fadeIn();
                    setTimeout(function () {
                        $("#error_usuario").fadeOut();
                    }, 5000);
                }
            }
        });
    }
    else {
        $("#error_usuario").html("Faltan campos por llenar!");
        $("#error_usuario").fadeIn();
        setTimeout(function () {
            $("#error_usuario").fadeOut();
        }, 2000);
    }
    return false;
}