<?php
$con =mysqli_connect("localhost","root","");

if(!$con){
	die ('Could not connect'.mysqli_error());
}
$databasename="thet";
$db_selected=mysqli_select_db($con,$databasename);
if($db_selected){
	echo "Database connect";
}



 ?>