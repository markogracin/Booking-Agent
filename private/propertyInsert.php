<?php
include_once "../config.php";


if(empty($_POST['property_name'] && $_POST['price'] && $_POST['description'])){
  header("location:property.php?oh_gosh!");
}else{

$do=$db->prepare("insert into property (property_name, price, description) values(:property_name, :price, :description)");
$do->execute(array(
	"property_name" => $_POST['property_name'], 
	"price" => $_POST["price"], 
	"description" => $_POST["description"]
	));
header("location: property.php");

}
?>