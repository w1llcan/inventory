
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory - Add</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
    <link href="assets/datatables.min.css" rel="stylesheet" type="text/css">

    <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="bootstrap/js/main.js"></script>
</head>

<body>

<style type="text/css">
#dis{
	display:none;
}
</style>	
    
    <div id="dis">
	</div>
    <div class="container">
      
        <a href='https://inv.willcandesigns.com/'><button>View Inventory</button></a> 
        <hr />    
 	</div>
	 <form method='post' id='inv-SaveForm' action="#">
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Item Name</td>
            <td><input type='text' name='name' class='form-control' placeholder='Item name' required /></td>
        </tr>
 
        <tr>
            <td>Category</td>
            <div class="dropdown">
            <td>
                <select name='category'>
                <option value="hidden">Choose Category Item</option>
                <option value="hand tools">Hand Tools</option>
                <option value="applicances">Appliances</option>
                <option value="plumbing">Plumbing Items</option>
                <option value="electrical">Electrical Item</option>
                </select>
            </td>
            </div>
        </tr>
 
        <tr>
            <td>Item SKU</td>
            <td><input type='text' name='sku' class='form-control' placeholder='Item SKU' required></td>
        </tr>

        <tr>
            <td>Quantity Available</td>
            <td><input type='text' name='qtyavail' class='form-control' placeholder='Quantity On-hand'></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save this Item
			</button>  
            </td>
        </tr>
 
    </table>
</form>

</body>
</html>
     
