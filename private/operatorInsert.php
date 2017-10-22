<?php
include_once "../config.php";

if(empty($_POST['name'] && $_POST['surname'] && $_POST['email'] && $_POST['password'])){
  header("location:operator.php?oh_gosh!");
}else{

$do= $db->prepare("insert into operator (name, surname, email, password) values(:name, :surname, :email, :password)");
$do->execute(array("name" => $_POST['name'], "surname" => $_POST["surname"], "email" => $_POST["email"], "password" => $_POST["password"]));
header("location: operator.php");

}
?>