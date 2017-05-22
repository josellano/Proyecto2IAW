function drawCucha(colorT,colorP1,colorP2,formaT,estilo,ventana) {
	var canvas = document.getElementById("canvas");
	var ctx = canvas.getContext("2d");
	
	ctx.setTransform(1,0,0,1,0,0);
	ctx.clearRect(0,0,canvas.width,canvas.height);

	drawFloor(ctx);

	drawBack(ctx,formaT);
	drawWallR(ctx,formaT);
	drawWallL(ctx,colorP1,colorP2,formaT,estilo);


	if(formaT=="dos aguas"){
		drawRoofR(ctx,colorT);
		drawFront(ctx,colorP1,colorP2,formaT,estilo);
		drawRoofL(ctx,colorT);
	}
	else{
		drawFront(ctx,colorP1,colorP2,formaT,estilo);
		drawRoofA(ctx,colorT);
	}

	if(ventana!="ninguna")
		drawWindow(ctx,colorP1,ventana);
}

function drawFloor(ctx){
	ctx.setTransform(2,1,2,0,75,275);

	var grd=ctx.createLinearGradient(0,0,100,0);
	grd.addColorStop(0,"black");
	grd.addColorStop(1,"white");

	ctx.fillStyle=grd;
	ctx.fillRect(0,0,50,76);
}

function drawWallL(ctx,color,color2,formaT,estilo) {
	ctx.setTransform(1,0.5,0,-1,75,275);

	var grd=ctx.createLinearGradient(-50,0,150,0);
	grd.addColorStop(0,"black");
	grd.addColorStop(1,color);

	ctx.fillStyle=grd;

	if(formaT=="dos aguas")
		ctx.fillRect(0,0,100,125);
	else
		ctx.fillRect(0,0,100,100);
	
	if(estilo=="rayado")
		drawLinesW(ctx,color2,100);
}

function drawLinesW(ctx,color,h){
	grd=ctx.createLinearGradient(-50,0,150,0);
	grd.addColorStop(0,"black");
	grd.addColorStop(1,color);

	ctx.fillStyle=grd;

	var i=25;
	while(i<=h){
		ctx.fillRect(0,i,100,25);
		i=i+50;
	}
}

function drawWallR(ctx,formaT) {
	ctx.setTransform(1,0.5,0,-1,225,275);
	ctx.fillStyle='#000000';
	
	if(formaT=="dos aguas")
		ctx.fillRect(0,0,100,125);
	else
		ctx.fillRect(0,0,100,175);
}

function drawBack(ctx,formaT) {
	ctx.setTransform(1,0,0,1,75,275);

	ctx.beginPath();
	ctx.moveTo(0,0);
	ctx.lineTo(150,0);

	if(formaT=="dos aguas"){
		ctx.lineTo(150,-125);
		ctx.lineTo(75,-185);
		ctx.lineTo(0,-125);
	}
	else{
		ctx.lineTo(150,-175);
		ctx.lineTo(0,-100);
	}

	ctx.closePath();

	ctx.fillStyle='#000000';
	ctx.fill();
}

function drawFront(ctx,color,color2,formaT,estilo) {
	ctx.setTransform(1,0,0,1,175,325);

	ctx.beginPath();
	ctx.moveTo(0,0);
	ctx.lineTo(35,0);
	ctx.lineTo(35,-70);
	ctx.arc(75,-70,40,1*Math.PI,0*Math.PI);
	ctx.lineTo(115,0);
	ctx.lineTo(150,0);

	if(formaT=="dos aguas"){
		ctx.lineTo(150,-125);
		ctx.lineTo(75,-185);
		ctx.lineTo(0,-125);
	}
	else{
		ctx.lineTo(150,-175);
		ctx.lineTo(0,-100);
	}

	ctx.closePath();

	ctx.fillStyle=color;
	ctx.fill();

	if(estilo=="rayado"){
		ctx.save();
		ctx.clip();

		drawLinesF(ctx,color2,-150);

		ctx.restore();
	}
}

function drawLinesF(ctx,color,h){

	ctx.fillStyle=color;
	var i=0;
	while(i>=h){
		ctx.fillRect(0,i,150,25);
		i=i-50;
	}
}

function drawRoofL(ctx,color) {
	ctx.setTransform(1,0.5,-1.25,1,130,80);

	var grd=ctx.createLinearGradient(-50,0,100,0);
	grd.addColorStop(0,"black");
	grd.addColorStop(1,color);

	ctx.fillStyle=grd;
	ctx.fillRect(0,0,130,60);
}

function drawRoofR(ctx,color) {
	ctx.setTransform(1,0.5,1.25,1,130,80);
	ctx.fillStyle=color;
	ctx.fillRect(0,0,130,60);
}

function drawRoofA(ctx,color) {
	ctx.setTransform(1,0.5,-2,1,210,90);

	var grd=ctx.createLinearGradient(-50,0,100,0);
	grd.addColorStop(0,"black");
	grd.addColorStop(1,color);

	ctx.fillStyle=grd;
	ctx.fillRect(0,0,130,80);
}

function drawWindow(ctx,color,ventana){
	ctx.setTransform(1,0.5,0,-1,125,240);

	var grd=ctx.createLinearGradient(-20,0,15,0);
	grd.addColorStop(0,"white");
	grd.addColorStop(1,"lightblue");

	ctx.fillStyle=grd;

	if(ventana=="redonda"){
			ctx.beginPath();
			ctx.arc(0,0,20,0,2*Math.PI);
			ctx.closePath();	

			ctx.fill();

			var grad = ctx.createRadialGradient(0,0,18, 0,0,22);
		    grad.addColorStop(0, color);
		    grad.addColorStop(0.5, "#888888");
		    grad.addColorStop(1, color);
		    ctx.strokeStyle = grad;
		    ctx.lineWidth = 6;

		    ctx.stroke();
	}
	else
		if(ventana=="cuadrada"){
			var grd2=ctx.createLinearGradient(-50,0,200,0);
			grd2.addColorStop(0,"black");
			grd2.addColorStop(1,color);
			ctx.fillStyle=grd2;
			ctx.fillRect(-35,-25,70,50);

			ctx.fillStyle=grd;
			ctx.fillRect(-25,-15,50,30);
	}
}