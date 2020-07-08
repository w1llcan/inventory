<?php
include_once 'config/dbconfig.php';

if($_POST['del_id']) {
	$id = $_POST['del_id'];	
	$stmt=$db_con->prepare("DELETE FROM items WHERE id=:id");
	$stmt->execute(array(':id'=>$id));	
}
?>