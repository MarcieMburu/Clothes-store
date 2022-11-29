<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="STYLEREG.css" />
</head>
<body>
<?php
require('database.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$phone_number = stripslashes ($_REQUEST['phone_number']);
	$phone_number = mysqli_real_escape_string($con,$phone_number);
        $query = "INSERT into `users` (username, password, email, phone_number)
VALUES ('$username', '$password', '$email', '$phone_number')";
// die($query);
        $result = mysqli_query($con,$query);
        if($result){
            header('Location: log-in.php');
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required /><br>
<input type="email" name="email" placeholder="Email" required /><br>
<input type="password" name="password" placeholder="Password" required /><br>
<input type="phone_number" name="phone_number" placeholder="phone_number" required/><br>
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>

