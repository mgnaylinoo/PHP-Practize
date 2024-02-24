<html>
	<head>	
		<style type="text/css">
			table, th, td {
			  border: 1px solid black;
			  border-collapse: collapse;
			}
		</style>
		<title>Electric Bill</title>
	</head>
	<body>
		<form action="ex6.php" method="post">
			Owner's Name:<input type="text" 	name="name"><br>
			Township:<input type="text" name="township">
			<br>
			Phone Number:<input type="text" name="phone"><br>		
			Billing date:<input type="text" name="billdate"><br>
			Pay for which month?:
			<select name="month">
			<option value="January">January</option>
			<option value="February">February</option>
			<option value="March">March</option>
			<option value="Apir">Apir</option>
			<option value="May">May</option>
			<option value="June">June</option>
			<option value="July">July</option>
			<option value="August">August</option>
			<option value="September">September</option>
			<option value="October">October</option>
			<option value="November">November</option>
			<option value="December">December</option>
			</select><br>
			Amount of Consumption<input type="text" name="unit" placeholder="Please enter you used unit">
			<input type="submit" value="Save" name="submit">		
		</form>
	</body>
</html>
<?php 
	function calculate($unit){
	$bill=0;
	$firstunit=8;
	$secondunit=12;
	$thirdunit=16;
	$fourthunit=20;
	if($unit>1 && $unit <=100)
	$bill=$unit*$firstunit;
	if($unit>100 && $unit<=200)
	$bill=(100*$firstunit)+($unit-100)*$secondunit;
	if($unit>200 && $unit<=300)
	$bill=(100*$firstunit)+(100*$secondunit)+($unit-200)*$thirdunit;
	if($unit>300)
	$bill=(100*$firstunit)+(100*$secondunit)+(100*$thirdunit)+($unit-300)*$fourthunit;
	return $bill;
	}


	function result(){

		$conn=mysqli_connect("localhost","root","");
	
		if($conn){
			if(!isset($_SESSION['createdb'])){
				$query="CREATE DATABASE Electricbill";
				mysqli_query($conn, $query);
				$_SESSION['createdb']='created';
			}
				if(!isset($_SESSION['createtb'])){
				mysqli_select_db($conn,"Electricbill");
				$query = "CREATE TABLE Bill(ownner VARCHAR(30), township VARCHAR(30), unit VARCHAR(30), bill VARCHAR(30))";
				mysqli_query($conn, $query);
				$_SESSION['createtb']='created';
			}
		}else{
			echo "Database connection fail:".mysqli_errno($conn);
		}
		
		$ownner=$_POST['name'];
		$township=$_POST['township'];
		$unit=$_POST['unit'];
		$bill = calculate($unit);

		mysqli_select_db($conn,"Electricbill");
		$query = "INSERT INTO Bill(ownner, township, unit, bill) VALUES('$ownner', '$township', '$unit', '$bill')";
		mysqli_query($conn, $query);

		$query = "SELECT * FROM Bill";
		$result = mysqli_query($conn, $query);
		$num_row = mysqli_num_rows($result);

		?>
		<table>
			<tr>
				<th>Name</th>
				<th>City</th>
				<th>Unit</th>
				<th>Bill</th>
			</tr>

		<?php

		for($i=0; $i<$num_row; $i++){
			 $rows = mysqli_fetch_array($result);
			 echo "<tr>";
			 echo "<td>";
			 echo $rows['ownner'];
			 echo "</td>";
			 echo "<td>";
			 echo $rows['township'];
			 echo "</td>";
			 echo "<td>";
			 echo $rows['unit'];
			 echo "</td>";
			 echo "<td>";
			 echo $rows['bill'];
			 echo "</td>";
			 echo "</tr>";
		}
		?>
		</table>
		<?php
			mysqli_close($conn);
	}

	session_start();
	 if(isset($_POST['submit'])){
		result();
	}

?>

