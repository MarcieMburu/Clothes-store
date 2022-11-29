<?php
include_once  ('adminheader.php');
?>

<?php
require('database.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['name'])){
        // removes backslashes
	$name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
	$name = mysqli_real_escape_string($con,$name); 
	$desc = stripslashes($_REQUEST['desc']);
	$desc = mysqli_real_escape_string($con,$desc);
	$price = stripslashes($_REQUEST['price']);
	$price = mysqli_real_escape_string($con,$price);
	$rrp = stripslashes ($_REQUEST['rrp']);
	$rrp = mysqli_real_escape_string($con,$rrp);
	$quantity = stripslashes ($_REQUEST['quantity']);
	$quantity = mysqli_real_escape_string($con,$quantity);
	$img = stripslashes ($_REQUEST['img']);
	$img = mysqli_real_escape_string($con,$img);
        $query = "INSERT into `products` (`name`,`desc`, price, rrp,quantity,img)
VALUES ('$name', '$desc', '$price', '$rrp', '$quantity', '$img')";
        $result = mysqli_query($con,$query);
        if($result){
            header('Location: adminpage.php');
        }
    }else{
?>
<title>Insert Data and Display in Table </title>

<form action="" method="post" name="form1">
	<style> 
input[type=text] {
  width: 100%;
  padding: 7px ;
  margin: 5px 0;
  border: 1px solid #000000;
  }
input[type=submit] {
  width: 50%;
  padding: 9px;
  margin: 5px 0;
  
  border: 2px solid #000000;
  outline: none;
   background-color:green;
   color:white;
    
}
	</style>
<table width="25%" border="0">
 <tbody><tr> 
<td>Product Name</td>
<td><input type="text" name="name"></td>
</tr>
<tr> 
<td>Product Desc</td>
<td><input type="text" name="desc"></td>
</tr>
<tr> 
<td>Product Price </td>
<td><input type="text" name="price"></td>
</tr>
<tr>
<td>RRP </td>
<td><input type="text" name="rrp"></td>
</tr>
<tr>
<td>Quantity</td>
<td>
<input type="text" name="quantity">
</td>
</tr>
<tr>
<td>Image</td>
<td>
<input type="text" name="img">
</td>
</tr>
<tr> 
<td></td>
<td><input type="submit" name="Submit" value="Add"></td>
</tr>
			
        </tbody></table>
    </form>
<?php } ?>