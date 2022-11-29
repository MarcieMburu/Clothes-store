<?php
include_once('adminheader.php');
?>


<?php
require('database.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
        $query = "INSERT into `admins` (username, password)
VALUES ('$username', '$password')";
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
<td>Username</td>
<td><input type="text" name="username"></td>
</tr>
<tr> 
<td>Password</td>
<td><input type="text" name="password"></td>
</tr>
<tr> 
<td></td>
<td><input type="submit" name="Submit" value="Add"></td>
</tr>
			
        </tbody></table>
    </form>
<?php } ?>