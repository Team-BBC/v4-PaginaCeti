<?php
session_start();
require_once('loginRequest.php');


//require_once "Conexion.php";



$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = ? AND password = ? LIMIT 1";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([$username, $password]);

if($result){
	$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if($stmtselect->rowCount() > 0){
		$_SESSION['userlogin'] = $user;
		echo "1";
	}else{
		echo "wrong user or password";
	}
}else{
	echo "There were errors conecting to database";
}