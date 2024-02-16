<?php 	
function login(){

	echo "<form action='log&sign.php' method='post'>";
	echo "<input type='hidden' name='step' value='1'>";
	echo "<input type='hidden' name='signup' value='".setvalue('signup')."'>";
	echo "<input type='text' name='login' placeholder='Login' value='".setvalue('login')."'>";
	echo "<input type='submit' value='login'>";
	echo "</form>";
}


function signup(){
	echo "<form action='log&sign.php' method='post'>";
	echo "<input type='hidden' name='step' value='2'>";
	echo "<input type='hidden' name='login' value=".setvalue('login').">";
	echo "<input type='text' name='signup' placeholder='Singup your name' value='".setvalue('signup')."'>";
	echo "<input type='submit' value='signup'>";
	echo "</form>";
}


function setvalue($name){
	if(isset($_POST[$name])){
		return $_POST[$name];
	}else{
		return '';
	}
}
if(isset($_POST['step']) && $_POST['step']!=''){
	if($_POST['step']==1){
		signup();
	}else{
		login();
	}
}else{
	login();
}
?>
