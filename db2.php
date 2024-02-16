<?php
$conn=mysql_connect('localhost','root','');
if($conn){
	die('Could not connect:'.mysql_err());
}

if(mysql_query("CREATE DATABASE mydatabase",$conn)){
	echo 'Database created';
}else{
	echo 'Error creating database:'.mysql_error();
}

mysql_select_db("mydatabase",$conn);
$tablequery="CREATE TABLE members(FirstName varchar(15), LastName varchar(15), Age int, JoinedDate varchar(20))";
$response=mysql_query($tablequery,$conn);

if($response){
	echo 'Table created';
}else{
	echo 'Something went wrong:'.mysql_error();
}

mysql_query("INSERT INTO members(FirstName, LastName, Age, JoinedDate) VALUES('Jo','Scrivener',31,'September 3, 2006')",$conn);

mysql_query("INSERT INTO members(FirstName, LastName, Age, JoinedDate) VALUES('Marty', 'Pareene',19, 'January 7, 2007')", $conn);

mysql_query("INSERT INTO members(FirstName, LastName, Age, JoinedDate) VALUES('Nick', 'Blakeley',23, 'August 19, 2007')", $conn);

mysql_query("INSERT INTO members(FirstName, LastName, Age, JoinedDate) VALUES('Bill', 'Swan',20, 'June 11, 2007 ')", $conn);

mysql_query("INSERT INTO members(FirstName, LastName, Age, JoinedDate) VALUES('Jane', 'Field',36, 'March 3, 2006')", $conn);

mysql_close();
?>