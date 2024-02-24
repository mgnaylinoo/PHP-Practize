<?php
$con = mysqli_connect("localhost","root","");
mysqli_query($con,"CREATE DATABASE mydatabase") ;
// if(!$con)
// { 	 
// 	die('Could not connect: '.mysqli_error());
// }
//  mysqli_query("CREATE DATABASE mydatabase",$con) ;
   
// }
// else  
// {    echo "Error creating database: ".mysqli_error();
// }
// mysql_select_db("mydatabase", $con);
// $tbquery="CREATE TABLE members(  FirstName varchar(15), LastName varchar(15), Age int, JoinedDate varchar(20))";
// $ret=mysql_query($tbquery,$con);
// if($ret) {
//     		echo "<p>Table created!</p>";
// 		}
// else {
//         	echo "<p>Something went wrong: ", mysql_error() + "</p>";
// 	  }
// mysql_query("INSERT INTO members(FirstName, LastName, Age, JoinedDate) VALUES('Jo', 'Scrivener',31, 'September 3, 2006')", $con);
// mysql_query("INSERT INTO members(FirstName, LastName, Age, JoinedDate) VALUES('Marty', 'Pareene',19, 'January 7, 2007')", $con);
// mysql_query("INSERT INTO members(FirstName, LastName, Age, JoinedDate) VALUES('Nick', 'Blakeley',23, 'August 19, 2007')", $con);
// mysql_query("INSERT INTO members(FirstName, LastName, Age, JoinedDate) VALUES('Bill', 'Swan',20, 'June 11, 2007 ')", $con);
// mysql_query("INSERT INTO members(FirstName, LastName, Age, JoinedDate) VALUES('Jane', 'Field',36, 'March 3, 2006')", $con);  
// mysql_close($con);
?>