<?php
include_once('adminheader.php');
?>
<?php
include_once 'database.php';
$result = mysqli_query($con,"SELECT * FROM admins");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete admin user</title>
</head>
<body>

<table>
	<tr>
	<th>id</th>
	<th>username</th>
	<th>password</th>
	<th>Action</th>
	</tr>
	
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["id"]; ?></td>
	<td><?php echo $row["username"]; ?></td>
	<td><?php echo $row["password"]; ?></td>
	<td><a href="delete_userphp.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>