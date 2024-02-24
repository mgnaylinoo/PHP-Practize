<?php 
	$conn=mysqli_connect("localhost","root","");
	$database = "Digital";
	$exit = "";
	if($conn){
			$query="SHOW DATABASES";
			$result = mysqli_query($conn, $query);
			$nums = mysqli_num_rows($result);
			for($i=0;$i<$nums;$i++){
			$rows = mysqli_fetch_array($result);
			if($database == $rows['Database']){
				$exit.="1";
			}else{
				$exit.="0";
			}
		 	}
		 	if(strpos($exit, "1")){
		 		echo "exit";
		 	}else{
		 		echo "not exit";
		 	}
		 	
		}else{
			echo "Database connection fail:".mysqli_errno($conn);
		}
 ?>