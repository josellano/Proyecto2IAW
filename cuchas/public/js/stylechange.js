function reStyle(est) {
	
	if( est=="estilo0"){
			document.getElementById("estilo1").disabled=true;
			guardarEstilo("estilo0");
	}
	else{
		if( est=="estilo1"){
			document.getElementById("estilo1").setAttribute("href","css/estilo1.css");
			guardarEstilo("estilo1");
			cambiarPestañas(est);
			cambiarHuesos(1);
		}
		else{
			document.getElementById("estilo1").setAttribute("href","css/estilo2.css");
			guardarEstilo("estilo2");
			cambiarPestañas(est);
			cambiarHuesos(2);
		}
			document.getElementById("estilo1").disabled=false;
	}
}

function cambiarPestañas(est){
	
	if( est=="estilo1")
		document.getElementById("tipoPestaña").setAttribute("class","nav nav-tabs");
	else
		document.getElementById("tipoPestaña").setAttribute("class","nav nav-pills");
}

function noStyle() {
   document.getElementById("estilo1").disabled=true;
   guardarEstilo("estilo0");
}


function cargarEstilo() {
	var x=localStorage.getItem("estiloGuardado");
    if(x)
		reStyle(x);
	else
		reStyle("estilo1");
}

function guardarEstilo(estilo) {
    localStorage.setItem("estiloGuardado", estilo);
    
}

function cambiarHuesos(est){
	var x=document.getElementsByName("hueso");
	if( est==1){
		x[0].setAttribute("src","source/hueso1.png");
		x[1].setAttribute("src","source/hueso1.png");
	}
	else{
		x[0].setAttribute("src","source/bone2.png");
		x[1].setAttribute("src","source/bone2.png");
	}
}
