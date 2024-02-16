<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
	if(isset($_COOKIE['visited'])==0){
		setcookie('visited',0,time()*60*2);
	}

	function visited_time(){

		$time=$_COOKIE['visited']+1;
		setcookie('visited',$time,time()*60*2);
	}

	if(isset($_POST['password']) && $_POST['password']!=''){
		if(strcmp($_POST['password'],'4444')==0){
			visited_time();
		}
			
	}
?>
	<form action="history.php" method="post">
		Log in :<input type="text" name="password" value="4444"><input type="submit" value="Log in"><br>
		Your visted time:<?php echo $_COOKIE['visited'];?>
		last visted:
	</form>
</body>
</html>