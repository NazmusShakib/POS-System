<?php
	include('../connect.php');
	require_once('auth.php');
		if($_SESSION['SESS_LAST_NAME']!="Admin" && $_SESSION['SESS_LAST_NAME']!= "admin"){
			
			echo "<h1>Error 404: Page Not Found.</h1>";
			exit();
						
		}
		
	if(isset($_POST['btn_sub'])){
		$user = htmlspecialchars($_POST['user_name']);
		$position = htmlspecialchars($_POST['user_position']);
		$password = htmlspecialchars($_POST['user_pass']);
		
		$sql = "INSERT INTO user (username,password,position) VALUES (:a,:b,:c)";
		$q = $db->prepare($sql);
		$q->execute(array(':a'=>$user,':b'=>$password,':c'=>$position));
		header("location: user_create.php?successfully_created");
		exit();
	}
	
	
	//Delete user
	if(isset($_GET['id'])){
		$result = $db->prepare("SELECT * FROM user");
		$result->execute();
		$rowcount123 = $result->rowcount();
		$rrow = $result->fetch();		
		
	if($rowcount123 >1){
		$id = $_GET['id'];
		$result = $db->prepare("DELETE FROM user WHERE id= :memid");
		$result->bindParam(':memid', $id);
		$result->execute();
		header("location: user_create.php?Delete_successfully");
	}
	else{
		header("location: user_create.php?fld");
		//echo $rrow['id'];
	}
	}
	

?>