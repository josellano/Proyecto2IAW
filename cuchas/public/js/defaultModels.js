function cargarPredet(predeterminado){
	document.getElementById('colorTecho').value=predeterminado['colorTecho'];
	document.getElementById('colorPared1').value=predeterminado['colorPared1'];
	document.getElementById('colorPared2').value=predeterminado['colorPared2'];

	var radioBtns=document.getElementsByName("tamaño");

	for(var i=0;i<radioBtns.length;i++) {
        if(radioBtns[i].value == predeterminado['tamaño'])
            radioBtns[i].checked=true;
    }

	radioBtns=document.getElementsByName("material");
	for(var i=0;i<radioBtns.length;i++) {
        if(radioBtns[i].value == predeterminado['material'])
            radioBtns[i].checked=true;
    }

    radioBtns=document.getElementsByName("ventana");
	for(var i=0;i<radioBtns.length;i++) {
        if(radioBtns[i].value == predeterminado['ventana'])
            radioBtns[i].checked=true;
    }

    radioBtns=document.getElementsByName("forma");
	for(var i=0;i<radioBtns.length;i++) {
        if(radioBtns[i].value == predeterminado['forma'])
            radioBtns[i].checked=true;
    }

    radioBtns=document.getElementsByName("estilo");
	for(var i=0;i<radioBtns.length;i++) {
        if(radioBtns[i].value == predeterminado['estilo'])
            radioBtns[i].checked=true;
    }

    cucha=predeterminado;
    reDraw();
    updateSum();
	changeImg();
}
