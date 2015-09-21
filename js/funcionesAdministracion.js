function cambiarForm(num) {
	var val = num;
    if(num === 1){
        $("#secVersion").css("display","inline");
        $("#secExpModelo").css("display","none");
        $("#secExpInternacionales").css("display","none");
        $("#secExpConfiguracion").css("display","none");
        $("secInfoTerminales").css("display","none");
        $("#secEncPiePagina").css("display","none");
    }else if(num === 2){
        $("#secVersion").css("display","none");
        $("#secExpModelo").css("display","inline");
        $("#secExpInternacionales").css("display","none");
        $("#secExpConfiguracion").css("display","none");
        $("secInfoTerminales").css("display","none");
        $("#secEncPiePagina").css("display","none");
    }else if(num === 3){
        $("#secVersion").css("display","none");
        $("#secExpModelo").css("display","none");
        $("#secExpInternacionales").css("display","inline");
        $("#secExpConfiguracion").css("display","none");
        $("secInfoTerminales").css("display","none");
        $("#secEncPiePagina").css("display","none");
    }else if(num === 4){
        $("#secVersion").css("display","none");
        $("#secExpModelo").css("display","none");
        $("#secExpInternacionales").css("display","none");
        $("#secExpConfiguracion").css("display","inline");
        $("secInfoTerminales").css("display","none");
        $("#secEncPiePagina").css("display","none");
    }else if(num === 5){
        $("#secVersion").css("display","none");
        $("#secExpModelo").css("display","none");
        $("#secExpInternacionales").css("display","none");
        $("#secExpConfiguracion").css("display","none");
        $("secInfoTerminales").css("display","inline");
        $("#secEncPiePagina").css("display","none");
    }else if(num === 6){
        $("#secVersion").css("display","none");
        $("#secExpModelo").css("display","none");
        $("#secExpInternacionales").css("display","none");
        $("#secExpConfiguracion").css("display","none");
        $("secInfoTerminales").css("display","none");
        $("#secEncPiePagina").css("display","inline");
    }
}

function editarGrupo() {
	$.colorbox({
		inline:true,
		width:"30%",
		height:"32%",
		href:
			"<section class=\"formularioPoput\">"+
				"<section>"+
					"<article class=\"bloqHorizontal\">"+
						"<div class=\"colTitulosPopup\">"+
							"<label class=\"blue-text\">Activo : </label>"+
						"</div>"+
						"<div class=\"colControlesPopup\">"+
							"<input type=\"checkbox\" name=\"activo\" id=\"ckbActivo\">"+
						"</div>"+
					"</article>"+
					"<article class=\"bloqHorizontal\">"+
						"<div class=\"colTitulosPopup\">"+
							"<label class=\"blue-text\">C&oacute;digo : </label>"+
						"</div>"+
						"<div class=\"colControlesPopup\">"+
							"<input type=\"text\" name=\"codigo\" id=\"txtCodigo\">"+
						"</div>"+
					"</article>"+
					"<article class=\"bloqHorizontal\">"+
						"<div class=\"colTitulosPopup\">"+
							"<label class=\"blue-text\">Descripci&oacute;n : </label>"+
						"</div>"+
						"<div class=\"colControlesPopup\">"+
							"<input type=\"text\" name=\"descripcion\" id=\"txtDescripcion\">"+
						"</div>"+
					"</article>"+
				"</section>"+
				"<section class=\"pie\">"+
					"<hr/>"+
					"<button type=\"submit\" name=\"okGrupo\" id=\"btnOkGrupo\" class=\"boton\" value=\"OK\">"+
						"<span class=\"btnsCrear\">OK</span>"+
						"<i class=\"icon-ok-sign iconoBoton\"></i>"+
					"</button>"+
				"</section>"+
			"</section>"
	});
}

function editarProducto() {
	$.colorbox({
		inline:true,
		width:"30%",
		height:"47%",
		href:
			"<section class=\"formularioPoput\">"+
				"<section>"+
					"<article class=\"bloqHorizontal\">"+
						"<div class=\"colTitulosPopup\">"+
							"<label class=\"blue-text\">Activo : </label>"+
						"</div>"+
						"<div class=\"colControlesPopup\">"+
							"<input type=\"checkbox\" name=\"activo\" id=\"ckbActivo\">"+
						"</div>"+
					"</article>"+
	
					"<article class=\"bloqHorizontal\">"+
						"<div class=\"colTitulosPopup\">"+
							"<label class=\"blue-text\">C&oacute;digo : </label>"+
						"</div>"+
						"<div class=\"colControlesPopup\">"+
							"<label id=\"lblCodigo\">0</label>"+
						"</div>"+
					"</article>"+
					
					"<article class=\"bloqHorizontal\">"+
						"<div class=\"colTitulosPopup\">"+
							"<label class=\"blue-text\">Tipo : </label>"+
						"</div>"+
						"<div class=\"colControlesPopup\">"+
							"<select name=\"tipo\" id=\"cbxTipo\" class=\"cbxTipo\">"+
								"<option value=\"\">-- Seleccione --</option>"+
								"<option value=\"0\">RECARGA</option>"+
								"<option value=\"1\">PIN</option>"+
								"<option value=\"2\">JUEGO</option>"+
								"<option value=\"3\">COLECTURIA</option>"+
							"</select>"+
						"</div>"+
					"</article>"+
					
					"<article class=\"bloqHorizontal\">"+
						"<div class=\"colTitulosPopup\">"+
							"<label class=\"blue-text\">Descripci&oacute;n : </label>"+
						"</div>"+
						"<div class=\"colControlesPopup\">"+
							"<input type=\"text\" name=\"descripcion\" id=\"txtDescripcion\">"+
						"</div>"+
					"</article>"+
					
					"<article class=\"bloqHorizontal\">"+
						"<div class=\"colTitulosPopup\">"+
							"<label class=\"blue-text\">Imprimible : </label>"+
						"</div>"+
						"<div class=\"colControlesPopup\">"+
							"<input type=\"checkbox\" name=\"imprimible\" id=\"ckbImprimible\">"+
						"</div>"+
					"</article>"+
				"</section>"+
			
				"<section class=\"pie\">"+
					"<hr/>"+
					"<button type=\"submit\" name=\"okGrupo\" id=\"btnOkGrupo\" class=\"boton\" value=\"OK\">"+
						"<span class=\"btnsCrear\">OK</span>"+
						"<i class=\"icon-ok-sign iconoBoton\"></i>"+
					"</button>"+
				"</section>"+
			"</section>"
	});
}

function editarItem() {
	$.colorbox({
		inline:true,
		width:"30%",
		height:"58%",
		href:
			"<section class=\"formularioPoput\">"+
				"<section>"+
					"<article class=\"bloqHorizontal\">"+
						"<div class=\"colTitulosPopup\">"+
							"<label class=\"blue-text\">Activo : </label>"+
						"</div>"+
						"<div class=\"colControlesPopup\">"+
							"<input type=\"checkbox\" name=\"activo\" id=\"ckbActivo\">"+
						"</div>"+
					"</article>"+
	
					"<article class=\"bloqHorizontal\">"+
						"<div class=\"colTitulosPopup\">"+
							"<label class=\"blue-text\">C&oacute;digo : </label>"+
						"</div>"+
						"<div class=\"colControlesPopup\">"+
							"<input type=\"text\" name=\"codigo\" id=\"txtCodigo\">"+
						"</div>"+
					"</article>"+
					
					"<article class=\"bloqHorizontal\">"+
						"<div class=\"colTitulosPopup\">"+
							"<label class=\"blue-text\">Min : 0 </label>"+
						"</div>"+
						"<div class=\"colControlesPopup\">"+
							"<input type=\"range\" name=\"points\" min=\"0\" max=\"40\" id=\"rgeMinimo\">"+
						"</div>"+
					"</article>"+
					
					"<article class=\"bloqHorizontal\">"+
						"<div class=\"colTitulosPopup\">"+
							"<label class=\"blue-text\">Max : 40 </label>"+
						"</div>"+
						"<div class=\"colControlesPopup\">"+
							"<input type=\"range\" name=\"points\" min=\"0\" max=\"40\" id=\"rgeMaximo\">"+
						"</div>"+
					"</article>"+
	
					"<article class=\"bloqHorizontal\">"+
						"<div class=\"colTitulosPopup\">"+
							"<label class=\"blue-text\">Nombre : </label>"+
						"</div>"+
						"<div class=\"colControlesPopup\">"+
							"<input type=\"text\" name=\"nombre\" id=\"txtNombre\">"+
						"</div>"+
					"</article>"+
					
					"<article class=\"bloqHorizontal\">"+
						"<div class=\"colTitulosPopup\">"+
							"<label class=\"blue-text\">Tipo de Dato : </label>"+
						"</div>"+
						"<div class=\"colControlesPopup\">"+
							"<select name=\"tipo\" id=\"cbxTipo\" class=\"cbxTipo\">"+
								"<option value=\"\">-- Seleccione --</option>"+
								"<option value=\"0\">CUENTA</option>"+
								"<option value=\"1\">TEXTO</option>"+
								"<option value=\"2\">MONTO</option>"+
								"<option value=\"3\">PASSWORD</option>"+
								"<option value=\"3\">FECHA</option>"+
								"<option value=\"3\">HORA</option>"+
								"<option value=\"3\">OCULTO</option>"+
							"</select>"+
						"</div>"+
					"</article>"+
					
					"<article class=\"bloqHorizontal\">"+
						"<div class=\"colTitulosPopup\">"+
							"<label class=\"blue-text\">Expresi&oacute;n : </label>"+
						"</div>"+
						"<div class=\"colControlesPopup\">"+
							"<input type=\"text\" name=\"expresion\" id=\"txtExpresion\">"+
						"</div>"+
					"</article>"+
				"</section>"+
				
				"<section class=\"pie\">"+
					"<hr/>"+
					"<button type=\"submit\" name=\"okGrupo\" id=\"btnOkGrupo\" class=\"boton\" value=\"OK\">"+
						"<span class=\"btnsCrear\">OK</span>"+
						"<i class=\"icon-ok-sign iconoBoton\"></i>"+
					"</button>"+
				"</section>"+
			"</section>"
	});
}

function adicionarVariable(var1, var2, var3) {
	if($("#variable"+var1+"").is(':checked')){
		var id = var1;
		var descripcion = var2;
		var variable = var3;
		var fila = "<tr id='variable_"+id+"'>"+
						"<td value='"+id+"'>"+id+"</td>"+
						"<td value='"+descripcion+"'>"+descripcion+"</td>"+
						"<td value='"+variable+"'><div contenteditable>"+variable+"</div></td>"+
					"</tr>";
		$(fila).appendTo("#cuerpo_tbl_especificas");
	}
	else if(!($("#variable"+var1+"").is(':checked'))){
		$("#variable_"+var1+"").remove();
	}
}