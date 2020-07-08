<?php

	$db_host = "willcandesignscom.ipagemysql.com";
	$db_name = "wcdinv";
	$db_user = "wcdadmin";
	$db_pass = "Chicago33Five8!";
	
	try {
		
		$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo $e->getMessage();
	}


?>