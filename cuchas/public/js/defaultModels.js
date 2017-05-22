
function cheapModel() {
	document.getElementById("colorPared2").style.display = 'none';
	var radioBtns=document.getElementsByName("tamaño");
		radioBtns[0].checked=true;
		
	radioBtns=document.getElementsByName("material");
		radioBtns[3].checked=true;
	
	radioBtns=document.getElementsByName("ventana");
			radioBtns[2].checked=true;
	
	radioBtns=document.getElementsByName("forma");
		radioBtns[0].checked=true;
		
	radioBtns=document.getElementsByName("estilo");
		radioBtns[1].checked=true;
		
	reDraw();
	updateSum();
	changeImg();
}

function classicModel() {
	document.getElementById("colorPared2").style.display = 'none';
	
	var radioBtns=document.getElementsByName("tamaño");
		radioBtns[1].checked=true;
		
	radioBtns=document.getElementsByName("material");
		radioBtns[0].checked=true;
	
	radioBtns=document.getElementsByName("ventana");
			radioBtns[1].checked=true;
	
	radioBtns=document.getElementsByName("forma");
		radioBtns[1].checked=true;
		
	radioBtns=document.getElementsByName("estilo");
		radioBtns[1].checked=true;
		
	document.getElementById("colorPared1").value="#DEB887";
	document.getElementById("colorTecho").value="#B8860B";
		
	reDraw();
	updateSum();
	changeImg();
}

function ejecutiveModel() {
	var radioBtns=document.getElementsByName("tamaño");
		radioBtns[2].checked=true;
		
	radioBtns=document.getElementsByName("material");
		radioBtns[2].checked=true;
	
	radioBtns=document.getElementsByName("ventana");
			radioBtns[0].checked=true;
	
	radioBtns=document.getElementsByName("forma");
		radioBtns[1].checked=true;
		
	radioBtns=document.getElementsByName("estilo");
		radioBtns[0].checked=true;
		
	document.getElementById("colorPared1").value="#A9A9A9";
	document.getElementById("colorPared2").value="#D3D3D3";
	document.getElementById("colorPared2").style.display = 'block';
	document.getElementById("colorTecho").value="#000000";
		
	reDraw();
	updateSum();
	changeImg();
}