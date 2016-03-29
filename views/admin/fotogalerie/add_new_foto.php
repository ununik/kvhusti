<?php
$container = '<h2>Přidat nové fotky do alba '. $gallery['title'] .'</h2>';
$container .= '<input type="file" id="fotos" name="file[]" multiple="multiple" onchange="for(var i=0; i<this.files.length;i++) { ajaxSaveUploaded(this.files[i]);};">';
$container .= '<div id="uploadedFile" class="myClass"></div>';

$container .= "<script>
        var fileCollection = new Array();
        
        $('#fotos').on('change', function(e){
        	var files = e.target.files;
            $.each(files, function(i, file){
                fileCollection.push(file);
        
                var reader = new FileReader();
        
                reader.readAsDataURL(file);
        
                reader.onload = function (e) {
                    var template = '<form action=\"/upload\">'+
						'<img src=\"'+e.target.result+'\" height=\"40px\"> '+
						'<label>Image Title</label> <input type=\"text\" name=\"title\">'+
						' <button class=\"btn btn-sm btn-info upload\">Upload</button>'+
						' <a href=\"#\" onclick=\"removeThisFoto(this)\">Remove</a>'+
					'</form>';
        
                    $('#uploadedFile').append(template);
                };
            })
        })	;
        
        //form upload ... delegation
		$(document).on('submit','form',function(e){
			e.preventDefault();
			//this form index
			var index = $(this).index();
			var formdata = new FormData($(this)[0]); //direct form not object
			//append the file relation to index
			formdata.append('image',fileCollection[index]);
			var request = new XMLHttpRequest();
			request.open('post', 'controllers/admin/foto/uploadFoto.php?id=".$gallery['id']."', true);
			request.send(formdata);
        
            $(this).hide();
		});
        
        function removeThisFoto(remove) {
            remove.parentNode.style.display = 'none';
        }
        </script>";

return $container;