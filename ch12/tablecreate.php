<?php 
$conn = mysqli_connect("localhost","root","","mydatabase");

if(!$conn) die("Could not connect:".mysqli_errno($conn));

//mysqli_select_db($conn,"mydatabase");

// $result=mysqli_query($conn,"CREATE TABLE user(first_name varchar(15), sur_name varchar(15))");
// if($result){
// 	echo 'Table created.';
// }else{
// 	echo 'Something went wrong:'.mysqli_error($conn);
// }
//$query="INSERT INTO user(first_name, sur_name) VALUES('NayLin','Oo')";
$query="SELECT * FROM user";
$result=mysqli_query($conn,$query);
//echo mysqli_num_rows($result);
$rows=mysqli_fetch_array($result);
var_dump($rows);
//$row = mysqli_fetch_array($result);
//echo $rows[0];
//if($result){
//	echo 'Insert new row';
//}else{
//	echo 'Something went wrong'.mysqli_error($conn);
//}

mysqli_close($conn);
?>
