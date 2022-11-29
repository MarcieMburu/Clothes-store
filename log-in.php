<?php
session_start();
?>

<!DOCTYPE html>   
<html>
    <head><link rel="stylesheet" href="styles.css"></head>
<form style='padding-left: 25%; padding-right: 25%' action="login.php" method="post">

  <div class="imgcontainer">
    <img src="imgs/Sleekstylelogo.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <?php
  if(isset($_SESSION['success'])){
    ?>
    <p> <?php
     echo $_SESSION['success'];
     unset($_SESSION['success']);
     header('Location: index.php');
      ?></p>

    <?php
  }else if(isset($_SESSION['error'])){
    ?>
<p style="color: red;">
  <?php
  echo $_SESSION['error'];
  unset($_SESSION['error']);
  ?>
</p>
<?php
  }
?>

    <label for="uname"><b>Username</b></label>
    <input type="text" style='width: 50%' placeholder="Enter Username" name="uname">
<br>
    <label for="psw"><b>Password</b></label>
    <input type="password" style='width: 50%' placeholder="Enter Password" name="psw">
<br>
    <button type="submit" style='width: 30%' >Login</button>
    <br>
  </div>

  <div class="container">
    <span class="new_account" style='color:grey' >New Here? <a href="regform.php" style='color: slateblue'>Create New Account.</a></span>
    <span class="psw" style='color: grey' >Forgot <a href="#" style='color: slateblue'>password?</a></span>
  </div>
</form>
</html>

