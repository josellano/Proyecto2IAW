function actualizar(id,value,title,text){
	$.ajax({
		type: "POST",
		url: "editPage/update/{id,value,title,text}",
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		data: {'id':id,'value':value,'title':title,'text':text}
	});
}