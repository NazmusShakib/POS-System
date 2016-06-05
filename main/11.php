<?php
	include('../connect.php');
$selectUserQuery = 'SELECT email_address, password FROM user WHERE email_address = :email_address AND password = :password';
$prepSelectUser = $db->prepare($selectUserQuery);
/*
* HOW DO I ADD MULTIPLE PARAMETERS TO THIS BINDPARAM() FUNCTION?
*/
$prepSelectUser->bindParam(':email_address', $email, PDO::PARAM_INT);
$prepSelectUser->execute();
$userResult = $prepSelectUser->fetchAll();
$userCount = count($userResult);

?>