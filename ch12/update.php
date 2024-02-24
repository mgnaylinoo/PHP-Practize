<?php
$conn = mysqli_connect("localhost","root","");
		mysqli_select_db($conn,"DigitalLibrary");
$updateauthor="Matt Doyle";
	$query = "UPDATE Book SET BookName='Beginning PHP 5.3' WHERE Authors=\"$updateauthor\"";
	echo $query;
	mysqli_query($conn,$query);
?>