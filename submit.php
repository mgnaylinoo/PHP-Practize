<?php 
	session_start();
	if(isset($_POST['name']) && !empty($_POST['name'])){
		$_SESSION['name']=$_POST['name'];
	}

	if(isset($_SESSION['name'])){
		echo "Hi, ".$_SESSION['name'].".";
	}else{
		echo 'No Session save.';
	}
	session_destroy();
 ?>