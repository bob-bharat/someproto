<?php
session_start();
require_once 'app/model/dao/user/UserDAO.php';

$user = $_POST['user'];
$password = $_POST['pass'];


$userdao = new UserDAO();
if ($userdao->validate_user($user, $password)) {

	$_SESSION['user'] = $_POST['user'];
	
	header("Location: index.php");
}
else {
echo "Login fail";
}
?>

