<!DOCTYPE html>
<html>

<head>
	<title>Upload Image/File</title>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link rel="stylesheet" href="sweetalert2.min.css">
	<script src="sweetalert2.min.js"></script>
</head>

<body>
	<form method="POST" enctype="multipart/form-data">
	<input type="file" name="image"><br>
	<input type="submit" value="Upload">
	</form>

	<?php
if(isset($_FILES['image'])) {
	$file_name 	= $_FILES['image']['name'];
	$file_size 	= $_FILES['image']['size'];
	$file_tmp 	= $_FILES['image']['tmp_name'];
	$file_type 	= $_FILES['image']['type'];

	if(move_uploaded_file($file_tmp,"Uploads/". $file_name)) {
		//echo ("Uploaded Successfully");
		?>
         <script>
		Swal.fire(
		  'Good job!',
		  'You clicked the button!',
		  'success'
		);
		</script>
		<h3>Information of Uploaded File</h3>
		<p>
		<?php
			// File Name = 
			echo $file_name;
			// File Size = 
			echo $file_size;
			// File Type = 
			echo $file_type;
		?>
		</p>
		<?php
	} else {
		echo ("Upload Unsuccessful, Try Again");
		?> 
		<script>
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'Something went wrong, Please Try Again !',
		});
		</script>
	}
}
</body>
</html>