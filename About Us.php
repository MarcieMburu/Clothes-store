<?php
session_start();
$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
?>
<!DOCTYPE html>
<html>
<head> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us</title>

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
                    <a href="index.php">Account</a>
                    

                </nav>
                <div class="link-icons">
                    <a href="index.php?page=cart">
						<i class="fas fa-shopping-cart"></i>
                        <span><?php echo $num_items_in_cart; ?></span>
                        </a>
                </div>
            </div>
        </header>
        <main>
            
    <style>
    body{
    background:white;

}
h2{
    text-align:center;
    margin-top:5%;
}
p{
text-align:center;
margin-top:5%;

}
</style>
</head>
<body>
    <h2>ABOUT US</h2>
    <p>
Sleek Style is an online platform where women can order stylish and elegant clothes at the comfort of the homes.<br>
We sell clothes at very affordable prices as we offer discounts.we offer free door delivery services.<br>
Our mission is to ensure that women are able to access stylish and high quality clothes at an affordable prices <br>
at the comfort of their homes.
If you have any queries feel free to go to the CONTACT US section.<br>
Fill your details and your query on the comment section and will respond to you via email.

</p>
</body>


</html>
<?PHP=template_footer();?>
