<?php
$username=$_POST['username'];
$password=$_POST['password'];

$con = new mysqli("localhost", "root","","sleekstyledb");
if($con->connect_error){
   die("failed to connect : ".$conn->connect_error);
} else{
   $stmt = $con->prepare("select * from admins where username=?");
   $stmt->bind_param("s", $username);
   $stmt->execute();
   $stmt_result = $stmt->get_result();
   if($stmt_result->num_rows > 0){
      $data = $stmt_result->fetch_assoc();
      if($data['password'] === $password){
         echo "login successfully";
		 header('Location: adminpage.php');
		 
      } else{
         echo"invalid username or password";
		 header('Location: admin log in.php');
      }
   } else{
      echo"invalid username or password";
	  header('Location: admin log in.php');
   }
}
?>