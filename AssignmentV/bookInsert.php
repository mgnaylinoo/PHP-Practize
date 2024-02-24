<?php 
	$conn = mysqli_connect("localhost","root","");
	if($conn){
		$query = "CREATE DATABASE DigitalLibrary";

		$result = mysqli_query( $conn, $query);
		if(!$result){
			echo "Error in creating database".mysqli_error($conn);
		}

		mysqli_select_db($conn, "DigitalLibrary");

		$query = "CREATE TABLE Book(BookID int, BookName varchar(100), Authors varchar(100), Category varchar(100))";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Error in creating table".mysqli_error($conn);
		}

		$BookName = array("Java Programing", "Core Java Programing", "Programming in Java", "PHP A Beginners Guide", "PHP 5 for Dummies", "PHP 5 for Dummies", "A Smart Way to Learn JavaScript", "C\# 5.0 Programmer\'s reference", "A Programmer\'s Guide to ADO.NET in C\#");
		$Authors = array("Wendy Sahanaya", "Jeremy Lindeck","Tom Berry", "Vikram Vaswani", "Matt Doyle", "Janet Valade", "Mark Myers", "Rod Stephens", "Mashesh Chand");
		$Category = array("Java", "Java", "Java", "PHP", "PHP", "PHP", "JavaScript", "C\#", "C\#");

		for($i=0; $i<count($BookName);$i++){
			$BookID = $i+1;
			$query = "INSERT INTO Book(BookID, BookName, Authors, Category) VALUES('$BookID', '$BookName[$i]', '$Authors[$i]', '$Category[$i]')";
			mysqli_query($conn, $query);
		}
		include("search.php");
		
	}else{
		die("Could not connect".mysqli_error($conn));
	}
 ?>
 
