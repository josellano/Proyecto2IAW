var disableds= [];
var index;

function loadDisableds(){

  for(var i=0;i<disableds.length;i++)
      document.getElementById(disableds[i]).disabled=true;
}


function minustamano(){
  var radioBtns=document.getElementsByName("tamaño");
  for(var i=0;i<radioBtns.length;i++) {
      if(radioBtns[i].value == document.getElementById("-tam").value.toLowerCase()){
        document.getElementById(radioBtns[i].id).disabled=true;
      }
  }
}

function plustamano(){
  var radioBtns=document.getElementsByName("tamaño");
  for(var i=0;i<radioBtns.length;i++) {
      if(radioBtns[i].value == document.getElementById("+tam").value.toLowerCase())
        document.getElementById(radioBtns[i].id).disabled=false;
        
  }
}

function minusmaterial(){
  var radioBtns=document.getElementsByName("material");
  for(var i=0;i<radioBtns.length;i++) {
      if(radioBtns[i].value == document.getElementById("-mat").value.toLowerCase())
        document.getElementById(radioBtns[i].id).disabled=true;
  }
}

function plusmaterial(){
  var radioBtns=document.getElementsByName("material");
  for(var i=0;i<radioBtns.length;i++) {
      if(radioBtns[i].value == document.getElementById("+mat").value.toLowerCase())
        document.getElementById(radioBtns[i].id).disabled=false;
  }
}
