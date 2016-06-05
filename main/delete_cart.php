<?php
	session_start();

	
	if(empty($_SESSION['cart'])){
		$_SESSION['cart'] = array();
	}
	
	$aaaa= ($_SESSION['cart']);

	$key = array_search($_GET['proid'],$aaaa);
	if($key!==false){
		unset($aaaa[$key]);
	}
	$_SESSION['cart'] = $aaaa;
	
	header("location: products.php");
?>