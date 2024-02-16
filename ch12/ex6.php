<html>
	<head>	
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
	
	if(isset($_POST['submit']) && !empty($_POST['submit'])){
	$owner=$_POST['name'];
	$township=$_POST['township'];
	$phone=$_POST['phone'];
	$billdate=$_POST['billdate'];
	$month=$_POST['month'];
	$unit=$_POST['unit'];
	
	$conn=mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"mydatabase");
	
	if(!$conn){
		die("Database connection fail:".mysqli_error());
	}
	
	// $query="SHOW TABLES ";
	// $tablename="user";
	// $result=mysqli_query($conn,$query);
	// if($result){
	// 	$num=mysqli_num_rows($result);
	// 	$rows=mysqli_fetch_array($result);
	// 	print_r($rows);
		// for($i=0;$i<$num;$i++){
		// 	echo "$rows[$i],$tablename";
		// 	if(!strcmp($rows[$i],$tablename)){
		// 		echo 'exit';
		// 	}else{
		// 		echo 'not exit';
		// 	}
		// }
	// }else{
	// 	echo "Something went wrong".mysqli_error();
	// }
	
		// $query="CREATE TABLE ElectricBill(Name varchar(15), Township varchar(15), AmountOfConsumption int, TotalAmount int)";
		// $result=mysqli_query($conn,$query);
		// if($result){
		// 	echo "Table created!";
		// }else{
		// 	echo "Something went wrong:".mysqli_error($result);
		// }
		// $totalcost=calculate($unit);
		// $query="INSERT INTO ElectricBill( Name,Township, AmountOfConsumption, TotalAmount)
		// 		VALUES('$owner','$township','$unit','$totalcost') ";
		// $result=mysqli_query($conn, $query);
		// if($result){
		// 	echo "Insert new rows";
		// }else{
		// 	echo "Something went wrong:".mysqli_error($result);
		// }
		$query="SELECT * FROM ElectricBill";
		$result=mysqli_query($conn,$query);
		$rows=mysqli_fetch_array($result);
		print_r($rows);
	
	}
	mysqli_close($conn);
?>

