<?php 

include_once "../config.php";

	if(isset($_GET["operator_id"])){
		$do = $db->prepare("delete from operator where operator_id=:operator_id ");
		$do->execute(array("operator_id"=>$_GET["operator_id"]));

		header("location: operator.php");
	}
?>