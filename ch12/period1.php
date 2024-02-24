<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action="period1.php" method="post">
	<table>
		<tr>
			<td>Item Name:</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Price for each item:</td>
			<td><input type="text" name="price"></td>
		</tr>
		<tr>
			<td>No. of item:</td>
			<td><input type="text" name="number"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Save Cost"></td>
		</tr>
	</table>
</form>
<?php 
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$price = $_POST['price'];
		$number = $_POST['number'];
		$cost = $price*$number;

		$conn = mysqli_connect("localhost","root","");
		if($conn){
			mysqli_select_db($conn,"costDB");

			$query = "INSERT INTO Cost VALUES('$name', '$cost')";
			mysqli_query($conn, $query);

			$query = "SELECT * FROM Cost";
			$result = mysqli_query($conn, $query);
			$nums = mysqli_num_rows($result);
?>
			<table>
				<tr>
					<th>Item Name</th>
					<th>Total Cost</th>
				</tr>

<?php

			for($i=0;$i<$nums;$i++){
				$rows = mysqli_fetch_array($result);
				echo "<tr>";
				echo "<td>";
				echo $rows['itemName'];
				echo "</td>";
				echo "<td>";
				echo $rows['cost'];
				echo "</td>";
				echo "</tr>";
			}
?>
			</table>
<?php

		}else{
		die("Something went wrong".mysqli_error($conn));
		}
		mysqli_close($conn)	;
	}
 ?>
</body>
</html>