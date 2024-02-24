<?php 
$con =mysqli_connect("localhost","root","");
if(!$con){
	echo "Could not connect:".mysqli_error($con);
}

if(mysqli_query($con,"Create Database thet")){
	echo "Database created";
}
?>