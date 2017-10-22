<?php 

include_once "../config.php";

	if(isset($_GET["property_id"])){
		$do = $db->prepare("delete from property where property_id=:property_id ");
		$do->execute(array("property_id"=>$_GET["property_id"]));

		header("location: property.php");
	}
?>