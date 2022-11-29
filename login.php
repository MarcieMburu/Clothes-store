<?php
session_start();

$username=$_POST['uname'];
$password=$_POST['psw'];

$con = new mysqli("localhost", "root","","sleekstyledb");
if($con->connect_error){
   die("failed to connect : ".$conn->connect_error);
} else{
   $stmt = $con->prepare("select * from users where username=?");
   $stmt->bind_param("s", $username);
   $stmt->execute();
   $stmt_result = $stmt->get_result();
   if($stmt_result->num_rows > 0){
      $data = $stmt_result->fetch_assoc();
      if($data['password'] === $password){
         $_SESSION['success'] = 'Login Successful';
         $_SESSION['user'] = $data;
         header('Location: my-account.php');
         header('Location: log-in.php');
         // echo "login successfully";
      } else{
         $_SESSION['error']='Invalid username or password';
         header('Location: log-in.php');
         // echo"invalid username or password";
      }
   } else{
      $_SESSION['error']='No user with the supplied username was found';
         header('Location: log-in.php');
   }
}
?>