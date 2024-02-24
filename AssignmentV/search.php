<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		th{
			text-decoration: underline;
			padding-right:80px;
		}
	</style>
	<title>Search Book</title>
</head>
<body>
<?php 
	session_start();

	if(isset($_POST['submit']) && $_POST['submit'] != ""){
		if($_POST['submit'] == "Next"){
			displaySearch();
		}
		if($_POST['submit'] == "Search"){
			displayResult();
		}

	}else{
		displaySearchBy();
	}
	function displaySearchBy(){
		echo "
				<h1>
			 	System for Books Enquiry in Digital Library
				</h1>
				<form action='search.php' method='post'>
				 	<p>Enquired by</p>
				 	<input type='radio' name='searchby' value='Book Name'>Book Name<br>
				 	<input type='radio' name='searchby' value='Authors Name'>Author Name<br>
				 	<input type='radio' name='searchby' value='Category'>Book Category<br>
				 	<input type='submit' name='submit' value='Next'>
				</form>
		";
	}
	function displaySearch(){
		$_SESSION['searchby'] = $_POST['searchby'];
		echo "<form action='search.php' method='post'>";
		echo "Enter the ".$_SESSION['searchby']." you want to search:";
		echo "<input type='text' name='search'>";
		echo "<input type='submit' name='submit' value='Search'>";
		echo "</form>";
	}

	function allinfo(){
		$conn = mysqli_connect("localhost","root","");
		mysqli_select_db($conn,"DigitalLibrary");
		$query = "SELECT * FROM Book";
		$result = mysqli_query($conn, $query);
		$num_result = mysqli_num_rows($result);
		if($result){
			?>
			<table class="allinfo">
				<tr>
					<th>BookID</th>
					<th>Book Name</th>
					<th>Authors</th>
					<th>Category</th>
				</tr>
				<?php 
						for($i=0; $i<$num_result; $i++){
							$row = mysqli_fetch_array($result);
							echo "<tr>";
							echo "<td>".$row["BookID"]."</td>";
							echo "<td>".$row["BookName"]."</td>";
							echo "<td>".$row["Authors"]."</td>";
							echo "<td>".$row["Category"]."</td>";
							echo "</tr>";
						}
					 ?>
			</table>
			<?php
		}else{
			echo "Something went wrong".mysqli_error($conn);
		}
	}

	function displayResult(){
		$_SESSION['search'] = $_POST['search'];
		$searchby = $_SESSION['searchby'];
		$searchvalue = $_SESSION['search'];
		$conn = mysqli_connect("localhost","root","");
		mysqli_select_db($conn,"DigitalLibrary");
		$query = "";
		switch($searchby){
			case "Book Name":
			$query = "SELECT Authors, Category FROM Book WHERE BookName=\"$searchvalue\"";
			$result = mysqli_query($conn,$query);
			$num_result = mysqli_num_rows($result);
			if($result){
			?>
				<p>The following authors are found.</p>
				<table>
					<tr>
						<th>Author Name</th>
						<th>Category</th>
					</tr>
					<?php 
						for($i=0; $i<$num_result; $i++){
							$row = mysqli_fetch_array($result);
							echo "<tr>";
							echo "<td>".$row["Authors"]."</td>";
							echo "<td>".$row["Category"]."</td>";
							echo "</tr>";
						}
					 ?>
				</table>
			<?php
			}else{
				echo "Something went wrong".mysqli_error($conn);
			}
			break;
			case "Authors Name":
			$query = "SELECT BookName, Category FROM Book WHERE Authors=\"$searchvalue\"";
			$result = mysqli_query($conn,$query);
			$num_result = mysqli_num_rows($result);
			if($result){
			?>
				<p>The following books are found.</p>
				<table>
					<tr>
						<th>Book Name</th>
						<th>Category</th>
					</tr>
					<?php 
						for($i=0; $i<$num_result; $i++){
							$row = mysqli_fetch_array($result);
							echo "<tr>";
							echo "<td>".$row["BookName"]."</td>";
							echo "<td>".$row["Category"]."</td>";
							echo "</tr>";
						}
					 ?>
				</table>
			<?php
			}else{
				echo "Something went wrong".mysqli_error($conn);
			}
			break;
			case "Category":
			$query = "SELECT BookName, Authors FROM Book WHERE Category=\"$searchvalue\"";
			$result = mysqli_query($conn,$query);
			$num_result = mysqli_num_rows($result);
			if($result){
			?>
				<p>The following books are found.</p>
				<table>
					<tr>
						<th>Book Name</th>
						<th>Author Name</th>
					</tr>
					<?php 
						for($i=0; $i<$num_result; $i++){
							$row = mysqli_fetch_array($result);
							echo "<tr>";
							echo "<td>".$row["BookName"]."</td>";
							echo "<td>".$row["Authors"]."</td>";
							echo "</tr>";
						}
					 ?>
				</table>
			<?php
			}else{
				echo "Something went wrong".mysqli_error($conn);
			}
				break;
			}

			$query = "UPDATE Book SET BookName='Beginning PHP 5.3' WHERE Authors='Matt Doyle'";
			mysqli_query($conn,$query);
			echo "<p>After modify the BookName of Authors Matt Doyle as Beginning PHP 5.3</p>";
			allinfo();

			$query = "DELETE FROM Book WHERE Category='JavaScript'";
			mysqli_query($conn, $query);
			echo "<p>After delete all record of Book Category JavaScript</p>";
			allinfo();

	}

	
	mysqli_close($conn);
	session_destroy();
	
 ?>
</body>
</html>