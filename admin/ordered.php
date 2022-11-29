<?php
include_once('adminheader.php');
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>PHP code to retrieve and update data from MySQL database</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
.bs-example{
margin: 20px;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
</script>
</head>
<body>
<div class="bs-example">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
<h2 class="pull-left">Ordered Products</h2>
</div>
<?php
include_once 'database.php';
$result = mysqli_query($con,"SELECT * FROM orders");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class='table table-bordered table-striped'>
<tr>
<td>User ID</td>
<td>Full Name</td>
<td>Phone No</td>
<td>Product ID</td>
<td>Quantity</td>
<td>County</td>
<td>Estate</td>
<td>Additional Details</td>
<td>Order date</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["user_id"]; ?></td>
<td><?php echo $row["fullname"]; ?></td>
<td><?php echo $row["phone"]; ?></td>
<td><?php echo $row["product_id"]; ?></td>
<td><?php echo $row["quantity"]; ?></td>
<td><?php echo $row["county"]; ?></td>
<td><?php echo $row["estate"]; ?></td>
<td><?php echo $row["additional_details"]; ?></td>
<td><?php echo $row["order_date"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
?>
</div>
</div>        
</div>
</div>
</body>
</html>