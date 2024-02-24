<?php 
include("dblink.php");
$sql="Create table Expense (item varchar(50),expense varchar(50))";
$ret=mysqli_query($con,$sql);
if($ret){
	echo "table created";
}
mysqli_close($con);

?>