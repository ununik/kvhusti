function change_show(input) {
	var mypostrequest=new ajaxRequest()
	mypostrequest.onreadystatechange=function(){
	 if (mypostrequest.readyState==4){
	  if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
	  }
	  else{
	   alert("An error has occured making the request")
	  }
	 }
	}
	parameters = 'value='+input.checked+'&field='+input.name;
	mypostrequest.open("POST", "controllers/admin/profil/change.php", true)
	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	mypostrequest.send(parameters)
}

function change_data(input) {
	var mypostrequest=new ajaxRequest()
	mypostrequest.onreadystatechange=function(){
	 if (mypostrequest.readyState==4){
	  if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
	  }
	  else{
	   alert("An error has occured making the request")
	  }
	 }
	}
	parameters = 'value='+input.value+'&field='+input.name;
	mypostrequest.open("POST", "controllers/admin/profil/change.php", true)
	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	mypostrequest.send(parameters)
}
function deleteOsobaNaObrazku (foto, user) {
	var mypostrequest=new ajaxRequest()
	mypostrequest.onreadystatechange=function(){
	 if (mypostrequest.readyState==4){
	  if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
		  location.reload();
	  }
	  else{
	   alert("An error has occured making the request")
	  }
	 }
	}
	parameters = 'foto='+foto+'&user='+user;
	mypostrequest.open("POST", "controllers/admin/profil/deleteOsobaNaObrazku.php", true)
	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	mypostrequest.send(parameters)
}
function xxx (file) {
	xhr = new XMLHttpReuest();
	formData = new FromData();
	formData.append ('file', file);
	xhr.open ('POST', 'controllers/admin/foto/uploadFoto.php');
	xhr.send(formData);
	alert(xhr);
	/*var mypostrequest=new ajaxRequest()
	mypostrequest.onreadystatechange=function(){
	 if (mypostrequest.readyState==4){
	  if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
		  document.getElementById('uploadedFile').innerHTML += mypostrequest.responseText;
	  }
	  else{
	   alert("An error has occured making the request")
	  }
	 }
	}
	var formData = new FormData();
	alert(formData);
	mypostrequest.open("POST", "controllers/admin/foto/uploadFoto.php", true);
	mypostrequest.setRequestHeader("Content-type", file.type);
	/*mypostrequest.setRequestHeader("X-File-Name", file.name);
	mypostrequest.setRequestHeader("X-File-Size", file.size);
	mypostrequest.setRequestHeader("X-File-Type", file.type);
	formData.append ('file', file)
	mypostrequest.send(formData)*/
}
function ajaxSaveUploaded(file) {
	//formData = new FromData();
	//formData.append ('file', file);
	var response = $.ajax({
			url: 'controllers/admin/foto/uploadFoto.php',
			method: 'POST',
			contentType: 'multipart/from-data',
			context: document.getElementById('uploadedFile'),
			processData: false,
			data: file,
			cache: 'false',
			statusCode: {
				404: function() {
					alert("page not found!");
				}
			},
			success: function(data){
				document.getElementById('uploadedFile').innerHTML += data;
			}
	});
}
function uploadFoto() {
	fotos = document.getElementById('fotos').files;
	alert(files);
	/*for (i; i<files.length; i++) {
		alert(files.files[i]);
	}*/
}