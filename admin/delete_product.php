<?php
include_once('adminheader.php');
?>
<?php
include_once 'database.php';
$result = mysqli_query($con,"SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete Product</title>
</head>
<body>

<table>
	<tr>
	<th>Name</th>
	<th>Description</th>
	<th>Price</th>
	<th>RRP</th>
	<th>Quantity</th>
	<th>Product image</th>
	<th>Action</th>
	</tr>
	
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["name"]; ?></td>
	<td><?php echo $row["desc"]; ?></td>
	<td><?php echo $row["price"]; ?></td>
	<td><?php echo $row["rrp"]; ?></td>
	<td><?php echo $row["quantity"]; ?></td>
	<td><?php echo $row["img"]; ?></td>
	
	<td><a href="delete_productphp.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>