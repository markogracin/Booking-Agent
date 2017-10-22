<?php

include_once "config.php";
	
if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
}

$do = $db->prepare('SELECT * from operator WHERE email = :email and password = :password');
$do->bindParam(':email', $email);
$do->bindParam(':password', $password);
$do->execute();

$count = $do->rowCount();
$row = $do->fetch();

if($count == 1){
	$_SESSION['logged'] = "operator";
	header('location:private/cpanel.php');
}else{
	header('location:index.php?tryagain&email=' . $_POST["email"]);
}

?>