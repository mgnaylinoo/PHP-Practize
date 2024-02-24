<?php 

include("dblink.php");
if(!isset($_POST['submit'])){
	echo '<table>
	<form action="Expense.php" method="POST">
<tr>
<td>Item Name</td>
<td><input type="text" name="iname" ></td>
</tr>
<tr>
<td>Price for each item</td>
<td><input type="text" name="price" ></td>
</tr>

<tr>
<td>No of Item</td>
<td><input type="text" name="item" ></td>
</tr>

<tr>
<td><input type="submit" name="submit" value="Save Cost"></td>
</tr>

	</form></table>';
}
else{
	$name=$_POST['iname'];
	$price=$_POST['price'];
	$item=$_POST['item'];

	$total=$price*$item;

	$sql="insert into Expense values ('$name','$total')";
	$ret=mysqli_query($con,$sql);
	if ($ret){
		echo "inset ok";
	}




	$sql1="SELECT * from Expense";
	$res=mysqli_query($con,$sql1);
	echo '<table border="1" width="50%">';
	echo "<tr><th>Item Name</th> <th>Total Cost</th></tr>";



	while($r=mysqli_fetch_array($res)){
		echo "<tr><td>{$r[0]}</td><td>{$r[1]}</td></tr>";

	}
echo "</table>";



}
?>