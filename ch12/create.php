<?php 
	$conn = mysqli_connect("localhost","root","");
	if($conn){
		if(mysqli_query($conn,"CREATE DATABASE costDB")){
			echo "Database created.<br>";
			mysqli_select_db($conn,"costDB");
			if(mysqli_query($conn, "CREATE TABLE Cost(itemName varchar(50),cost varchar(50))")){
				echo "Table created.";
			}else{
				echo "Something went wrong: ".mysqli_error($conn);
			}
		}else{
			echo "Something went wrong: ".mysqli_error($conn);
		}
	}else{
		die("Something went wrong".mysqli_error($conn));
	}
 ?>