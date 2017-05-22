var cucha = {  }
	
function newCucha() {
	var radioBtns=document.getElementsByName("tamaño");
	for(var i=0;i<radioBtns.length;i++) {
			if(radioBtns[i].checked)
				cucha["tamaño"]=(radioBtns[i].value);
	}
	radioBtns=document.getElementsByName("material");
	for(var i=0;i<radioBtns.length;i++) {
			if(radioBtns[i].checked)
				cucha["material"]=(radioBtns[i].value);
	}
	
	radioBtns=document.getElementsByName("ventana");
	for(var i=0;i<radioBtns.length;i++) {
			if(radioBtns[i].checked)
				cucha["ventana"]=(radioBtns[i].value);
	}
	
	radioBtns=document.getElementsByName("forma");
	for(var i=0;i<radioBtns.length;i++) {
			if(radioBtns[i].checked)
				cucha["forma"]=(radioBtns[i].value);
	}
	
	radioBtns=document.getElementsByName("estilo");
	for(var i=0;i<radioBtns.length;i++) {
			if(radioBtns[i].checked)
				cucha["estilo"]=(radioBtns[i].value);
	}
	
	cucha["colorPared1"]=document.getElementById("colorPared1").value;
	cucha["colorPared2"]=document.getElementById("colorPared2").value;
	cucha["colorTecho"]=document.getElementById("colorTecho").value;
	
}


function modifyJson(atr,value){
	cucha[atr]=value;
}
