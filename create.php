<?php
require_once 'config/dbconfig.php';

	
	if($_POST) {
		$name = $_POST['name'];
		$category = $_POST['category'];
		$sku = $_POST['sku'];
		$qtyavail = $_POST['qtyavail'];
		
		try {
			
			$stmt = $db_con->prepare("INSERT INTO items(name,category,sku,qtyavail) VALUES(:name, :category, :sku, :qtyavail)");
			$stmt->bindParam(":name", $name);
			$stmt->bindParam(":category", $category);
			$stmt->bindParam(":sku", $sku);
			$stmt->bindParam(":qtyavail", $qtyavail);
			
			if($stmt->execute()) {
				echo "Successfully Added";
			} else {
				echo "Query Problem";
			}	
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
	}

?>