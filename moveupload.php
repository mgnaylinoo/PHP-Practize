<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action="moveupload.php" enctype="multipart/form-data" method="post">
	<input type="file" name="file">
	<input type="submit" name="submit" value="submit">
</form>

<?php


if(isset($_POST["submit"])){
	$uploaded_file = $_FILES['file']['tmp_name'];

	$destination_path = 'photo/' . $_FILES['file']['name'];
	print_r($_FILES['file']);
	echo "<br>".$destination_path;

	if (move_uploaded_file($uploaded_file, $destination_path)) {

	    echo "File uploaded successfully!";

	} else {

	    echo "Error uploading file:".$_FILES["file"]["error"];

	}	
}

?>

</body>
</html>