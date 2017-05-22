function updateSum(){
	var sum=0;
	
	var radioBtns=document.getElementsByName("tamaño");
	for(var i=0;i<radioBtns.length;i++) {
			if(radioBtns[i].checked)
				sum+=parseInt(radioBtns[i].title);
	}
	
	radioBtns=document.getElementsByName("material");
	for(var i=0;i<radioBtns.length;i++) {
			if(radioBtns[i].checked)
				sum+=parseInt(radioBtns[i].title);
	}
	
	radioBtns=document.getElementsByName("ventana");
	for(var i=0;i<radioBtns.length;i++) {
			if(radioBtns[i].checked)
				sum+=parseInt(radioBtns[i].title);
	}
	
	radioBtns=document.getElementsByName("forma");
	for(var i=0;i<radioBtns.length;i++) {
			if(radioBtns[i].checked)
				sum+=parseInt(radioBtns[i].title);
	}
	
	radioBtns=document.getElementsByName("estilo");
	for(var i=0;i<radioBtns.length;i++) {
			if(radioBtns[i].checked)
				sum+=parseInt(radioBtns[i].title);
	}
	
	sum+=parseInt(document.getElementById("colorPared1").title);
	sum+=parseInt(document.getElementById("colorTecho").title);
	
	document.getElementById("total").setAttribute("value",sum);	
}