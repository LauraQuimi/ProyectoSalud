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

function cambiarDivTipoConsulta() {
    var tipo = $("#cbxTipoConsulta").val();
    if (tipo === '0') {
        $("#divConsultaPersonal").css("display", "inline");
        $("#divConsultaRango").css("display", "none");
    }
    else if (tipo === '1') {
        $("#divConsultaPersonal").css("display", "none");
        $("#divConsultaRango").css("display", "inline");
    }
    else {
        $("#divConsultaPersonal").css("display", "none");
        $("#divConsultaRango").css("display", "none");
    }
}

function login() {
    var user = $("#txtUsuario").val();
    var pass = $("#txtPassword").val();
    if(user === "fedaloor"){
        if(pass === "espol"){
            $("#btnLogin").css("display", "none");
            $("#btnLogout").css("display", "inline");
            $("#btnPacientes").css("display", "inline");
            $("#btnControl").css("display", "inline");
            $("#btnConsulta").css("display", "inline");
            $("#btnTips").css("display", "inline");
            $("#btnRegistrate").css("display", "inline");
            $("#btnContactanos").css("display", "inline");
            $("#btnAcerca").css("display", "inline");
            $("#txtUsuario").val("");
            $("#txtPassword").val("");
        }else{
            alert("Contraseña incorrecta");
            $("#txtUsuario").focus();
        }
    }else{
        alert("Usuario incorrecto");
        $("#txtUsuario").focus();
    }
}

function logout() {
    $("#btnLogin").css("display", "inline");
    $("#btnLogout").css("display", "none");
    $("#btnPacientes").css("display", "none");
    $("#btnControl").css("display", "none");
    $("#btnConsulta").css("display", "none");
    $("#btnTips").css("display", "none");
    $("#btnRegistrate").css("display", "inline");
    $("#btnContactanos").css("display", "none");
    $("#btnAcerca").css("display", "none");
}