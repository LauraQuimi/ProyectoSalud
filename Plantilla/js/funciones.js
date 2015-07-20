function cambiarDiv() {
    var tipo = $("#cbxTipoUsuario").val();
    if (tipo === '0') {
        $("#divPaciente").css("display", "inline");
        $("#divMediko").css("display", "none");
    }
    else if (tipo === '1') {
        $("#divPaciente").css("display", "none");
        $("#divMediko").css("display", "inline");
    }
    else {
        $("#divPaciente").css("display", "none");
        $("#divMediko").css("display", "none");
    }
}