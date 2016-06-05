<?php
	session_start();

	if(empty($_SESSION['cart'])){
		$_SESSION['cart'] = array();
	}
	array_push($_SESSION['cart'], $_GET['proid']);
	
	
	//var_dump($_SESSION['cart']);
	
	/*
	function createRandomPassword() {
		$chars = "003232303232023232023456789";
		srand((double)microtime()*1000000);
		$i = 0;
		$pass = '' ;
		while ($i <= 7) {

			$num = rand() % 33;

			$tmp = substr($chars, $num, 1);

			$pass = $pass . $tmp;

			$i++;

		}
		return $pass;
	}
	$finalcode='RS-'.createRandomPassword();
	*/		
	
	//$bb = $_GET['invoice'];
	//header("location: products.php");

?>