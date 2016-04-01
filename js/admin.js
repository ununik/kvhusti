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
function changeFotoComment(textarea, id) {
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
	parameters = 'text='+textarea.value+'&id='+id;
	mypostrequest.open("POST", "controllers/admin/foto/changeComment.php", true)
	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	mypostrequest.send(parameters)
}
function changeFotoTitle(input, id) {
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
	parameters = 'text='+input.value+'&id='+id;
	mypostrequest.open("POST", "controllers/admin/foto/changeTitle.php", true)
	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	mypostrequest.send(parameters)
}
function changeFotoOsoba(foto, member) {
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
	parameters = 'foto='+foto+'&member='+member;
	mypostrequest.open("POST", "controllers/admin/foto/changeFotoOsoba.php", true)
	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	mypostrequest.send(parameters)
}
function addNewZajem(user) {
	var text = document.getElementById('newZajem').value
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
	parameters = 'text='+text+'&user='+user;
	mypostrequest.open("POST", "controllers/admin/profil/addZajem.php", true)
	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	mypostrequest.send(parameters)
}
function changeZajem(id) {
	var text = document.getElementById('zajem_' + id).value
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
	parameters = 'text='+text+'&id='+id;
	mypostrequest.open("POST", "controllers/admin/profil/changeZajem.php", true)
	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	mypostrequest.send(parameters)
}
function deleteZajem(id) {
	var text = document.getElementById('zajem_' + id).value
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
	parameters = 'id='+id;
	mypostrequest.open("POST", "controllers/admin/profil/deleteZajem.php", true)
	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	mypostrequest.send(parameters)
}
function deleteFoto(id) {
	
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
	
	parameters = 'id='+id;
	mypostrequest.open("POST", "controllers/admin/foto/deleteFoto.php", true)
	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	mypostrequest.send(parameters)
}
function delVlastniVyroba(id) {
	var mypostrequest=new ajaxRequest()
	mypostrequest.onreadystatechange=function(){
	 if (mypostrequest.readyState==4){
	  if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
		  //location.reload();
	  }
	  else{
	   alert("An error has occured making the request")
	  }
	 }
	}
	
	parameters = 'id='+id;
	
	mypostrequest.open("POST", "controllers/admin/homemade/deleteHomemade.php", true)
	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	mypostrequest.send(parameters)
}