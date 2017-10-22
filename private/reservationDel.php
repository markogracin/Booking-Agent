<?php 

include_once "../config.php";

	if(isset($_GET["booking_id"])){
		$do = $db->prepare("delete from reservation where booking_id=:booking_id ");
		$do->execute(array("booking_id"=>$_GET["booking_id"]));

		header("location: reservation.php");
	}
?>