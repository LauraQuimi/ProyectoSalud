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
    if(user === ""){
        alert("Error, por favor ingrese su usuario");
        $("#txtUsuario").focus();
    }else if(pass === ""){
        alert("Error, por favor ingrese su contraseña");
        $("#txtPassword").focus();
    }else{
        objeto = {user, pass};
        $.ajax({
            cache: false,
            url: "../mvc/objetos/login.php",
            type: "POST",
            data: objeto,
            dataType: 'json',
            success: function(data){
                var res = data;
                iden = res['identificador'];
                if(ident == 0){
                    alert('Error, usuario o clave incorrectos');
                }else{
                    location.reload(true);
                }
            },
            error : function(r, status){
                alert('Error, no se puede conectar ahora');
            }
        });
    }
        
}

function logout() {
    $("#btnLogin").css("display", "inline");
    $("#btnLogout").css("display", "inline");
    $("#btnPacientes").css("display", "inline");
    $("#btnControl").css("display", "inline");
    $("#btnConsulta").css("display", "inline");
    $("#btnTips").css("display", "inline");
    $("#btnRegistrate").css("display", "inline");
    $("#btnContactanos").css("display", "inline");
    $("#btnAcerca").css("display", "inline");
}
