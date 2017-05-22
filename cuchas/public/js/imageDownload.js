function downloadImage(){
	var can=document.getElementById("canvas");
	ReImg.fromCanvas(can).downloadPng("miCucha.png");
}

function urlImage(){
	var can=document.getElementById("canvas");
	var dato = can.toDataURL("image/jpeg");
	document.getElementById("compartir").setAttribute("value",dato);
}

