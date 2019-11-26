<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="<?php echo base_url("assets")?>/css/bootstrap-4.0.0.css" rel="stylesheet">
    

 	<script type="text/javascript">
		function previewImage() {
			document.getElementById("gambar").style.display = "block";
			var reader = new FileReader();
			reader.readAsDataURL(document.getElementById("uploadImage").files[0]);
			reader.onload = function(event) {
				document.getElementById("gambar").src = event.target.result;
			};
		};
	</script>
</head>
<body>
	<h3>Image</h3>
	<?php echo $error;?>
 
	<?php echo form_open_multipart('upload/upload_1301160239');?>
 
	<input type="file" name="berkas" id='uploadImage' onchange="previewImage()"/>
 
	<br /><br />
 
	<button type="submit" class="btn btn-info" value="upload">Save</button>
 
</form>

	
 
</body>
</html>