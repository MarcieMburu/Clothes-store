<?php
// Include database connection file
require_once "database.php";
if(count($_POST)>0) {
mysqli_query($con,"UPDATE admin_login set  username='" . $_POST['username'] . "', password='" . $_POST['password'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM admin_login WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Update Record</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style type="text/css">
.wrapper{
width: 500px;
margin: 0 auto;
}
</style>
</head>
<body>
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="page-header">
<h2>Update Record</h2>
</div>
<p>Please edit the input values and submit to update the record.</p>
<form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
<div class="form-group">
<label>username</label>
<input type="text" name="username" class="form-control" value="<?php echo $row["username"]; ?>">
</div>
<div class="form-group ">
<label>password</label>
<input type="password" name="password" class="form-control" value="<?php echo $row["password"]; ?>">
</div>
<input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
<input type="submit" class="btn btn-primary" value="Submit">
<a href="adminpage.php" class="btn btn-default">Cancel</a>
</form>
</div>
</div>        
</div>
</div>
</body>
</html>