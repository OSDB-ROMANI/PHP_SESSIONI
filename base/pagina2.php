<?php
	session_start();
	if(isset($_POST['input'])){
		$_SESSION['s'] = $_POST['input'];
	}
	if(isset($_SESSION['s'])){
		echo $_SESSION['s'];
	}else{
		echo 'errore';
	}
?>