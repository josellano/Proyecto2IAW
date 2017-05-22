
function cheapModel() {
	document.getElementById("colorPared2").style.display = 'none';
	var radioBtns=document.getElementsByName("tamaño");
		radioBtns[0].checked=true;
		modifyJson("tamaño",radioBtns[0].value);

	radioBtns=document.getElementsByName("material");
		radioBtns[3].checked=true;
		modifyJson("material",radioBtns[3].value);

	radioBtns=document.getElementsByName("ventana");
			radioBtns[2].checked=true;
			modifyJson("ventana",radioBtns[2].value);

	radioBtns=document.getElementsByName("forma");
		radioBtns[0].checked=true;
		modifyJson("forma",radioBtns[0].value);

	radioBtns=document.getElementsByName("estilo");
		radioBtns[1].checked=true;
		modifyJson("estilo",radioBtns[1].value);

	reDraw();
	updateSum();
	changeImg();
}

function classicModel() {
	document.getElementById("colorPared2").style.display = 'none';

	var radioBtns=document.getElementsByName("tamaño");
		radioBtns[1].checked=true;
		modifyJson("tamaño",radioBtns[1].value);

	radioBtns=document.getElementsByName("material");
		radioBtns[0].checked=true;
		modifyJson("material",radioBtns[0].value);

	radioBtns=document.getElementsByName("ventana");
			radioBtns[1].checked=true;
			modifyJson("ventana",radioBtns[1].value);

	radioBtns=document.getElementsByName("forma");
		radioBtns[1].checked=true;
		modifyJson("forma",radioBtns[1].value);

	radioBtns=document.getElementsByName("estilo");
		radioBtns[1].checked=true;
		modifyJson("estilo",radioBtns[1].value);

	document.getElementById("colorPared1").value="#DEB887";
	modifyJson("colorPared1","#DEB887");

	document.getElementById("colorTecho").value="#B8860B";
	modifyJson("colorTecho","#B8860B");

	reDraw();
	updateSum();
	changeImg();
}

function ejecutiveModel() {
	var radioBtns=document.getElementsByName("tamaño");
		radioBtns[2].checked=true;
		modifyJson("tamaño",radioBtns[2].value);

	radioBtns=document.getElementsByName("material");
		radioBtns[2].checked=true;
		modifyJson("material",radioBtns[2].value);

	radioBtns=document.getElementsByName("ventana");
			radioBtns[0].checked=true;
			modifyJson("ventana",radioBtns[0].value);

	radioBtns=document.getElementsByName("forma");
		radioBtns[1].checked=true;
		modifyJson("forma",radioBtns[1].value);

	radioBtns=document.getElementsByName("estilo");
		radioBtns[0].checked=true;
		modifyJson("estilo",radioBtns[0].value);

	document.getElementById("colorPared1").value="#A9A9A9";
	modifyJson("colorPared1","#A9A9A9");

	document.getElementById("colorPared2").value="#D3D3D3";
	modifyJson("colorPared2","#D3D3D3");

	document.getElementById("colorPared2").style.display = 'block';

	document.getElementById("colorTecho").value="#000000";
	modifyJson("colorTecho","#000000");

	reDraw();
	updateSum();
	changeImg();
}
