<?php=template_header('About')?>

<?php
session_start();
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>contact</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
        <header>
            <div class="content-wrapper">
                <h1>
                
                <img src="imgs/Sleekstylelogo.jpg" style="width:60px ; height: 60px">
            
                 </h1>
                <nav>
                    <a href="index.php">Home</a>
                    <a href="index.php?page=products">Products</a>
                    <a href="About Us.php">About </a>
                    <a href="contactus.php">Contact</a>
                    <a href="log-in.php">Account</a>
                    

                </nav>
                <div class="link-icons">
                    <a href="index.php?page=cart">
						<i class="fas fa-shopping-cart"></i>
                        <span><?php echo $num_items_in_cart;?></span>
                        </a>
                </div>
            </div>
        </header>
        <main>
           
        <title>contact us</title>
        </head>
        <body>
          
<style>
button{
padding-top:2px;
margin-top:15px;
} 
textarea{
width: 50pxpx ;
height: 60pxpx;
}  
div {
background-color: white;
text-align:center;
}
</style>
<div class="tab">
 <h1><b>CONTACT US</b></h1>
 <form>
 <label for="fname">Username:</label><br>
                  <input type="text" id="fname" value="<?php echo isset($user)?$user['username'] : ''; ?>" name="fname"><br>
                  <br>
                  
                  <label for="uemail">Email:</label><br>
                  <input type="email" id="uemail" value="<?php echo isset($user)?$user['email'] : ''; ?>" name="uemail" multiple><br>
                  <br>
                   <br>
                   <label for="ucomment">Comment;</label><br>
                
                <textarea id="ucomment" name="ucomment" rows="4" cols="50"></textarea>
  <br>
                <br>
                <a href="">Submit</a> 
                  
                </form>                
                </div>

        </body>
</html>


