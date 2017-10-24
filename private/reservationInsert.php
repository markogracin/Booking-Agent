<?php
include_once "../config.php";

if(empty($_POST['guest_name'] && $_POST['guest_email'] && $_POST['date_from'] && $_POST['date_to'])){
  header("location:reservation.php?oh_gosh!");
}else{

$do=$db->prepare("insert into reservation (guest_name, guest_email, property, date_from, date_to) 
	values(:guest_name, :guest_email, :property_option, :date_from, :date_to)");
$do->execute(array(
	"guest_name" => $_POST["guest_name"], 
	"guest_email" => $_POST["guest_email"], 
	"property_option" => $_POST["property_option"],
	"date_from" => $_POST["date_from"],
	"date_to" => $_POST["date_to"]
	));
header("location: reservation.php");

}
?>