<?php
require_once 'config/dbconfig.php';

	
	if($_POST) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$category = $_POST['category'];
		$sku = $_POST['sku'];
		$qtyavail = $_POST['qtyavail'];
		
		$stmt = $db_con->prepare("UPDATE items SET name=:name, category=:category, sku=:sku, qtyavail=:qtyavail WHERE id=:id");
		$stmt->bindParam(":name", $name);
		$stmt->bindParam(":category", $category);
		$stmt->bindParam(":sku", $sku);
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":qtyavail", $qtyavail);
		
		if($stmt->execute()) {
			echo "Successfully updated";
		} else {
			echo "Query Problem";
		}
	}

?>