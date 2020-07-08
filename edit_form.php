<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inventory</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">

<script src="assets/jquery-1.11.3-jquery.min.js"></script>
<script src="bootstrap/js/main.js"></script>

</head>
<?php
include_once 'config/dbconfig.php';

if($_GET['edit_id']) {
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM items WHERE id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
}

?>
<body>
<style type="text/css">
#dis {
	display:none;
}
</style>


	
    
    <div id="dis">
    
	</div>
        
 	
	 <form method='post' id='inv-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php echo $row['id']; ?>' />
        <tr>
            <td>Item Name</td>
            <td><input type='text' name='name' class='form-control' value='<?php echo $row['name']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Category</td>
            <td><input type='text' name='category' class='form-control' value='<?php echo $row['category']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Item SKU</td>
            <td><input type='text' name='sku' class='form-control' value='<?php echo $row['sku']; ?>' required></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
 
    </table>
</form>
</body>
</html>
