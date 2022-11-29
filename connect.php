<?php
if(isset($_POST['submit']))
{
  session_start();
//create connection
$conn= new mysqli("localhost:3306", "root","","sleekstyledb");
if($conn-> connect_error){
  die('connection Failed :' .$conn-> connect_error);
}

$user = $_SESSION['user'];
$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$userId = $user['id'];
if(!isset($_SESSION['cart'])){
  //redirect
  header('Location: index.php');
}
if ($products_in_cart) {
  if(count($products_in_cart) == 0 ){
     //redirect
  header('Location: index.php');
  }
  
foreach(array_keys($products_in_cart)  as $product_id){
  $fullname = $_POST['fullname'];
  $phone = $_POST['phone'];
  $productId = $product_id;
  $quantity = 2;
  $county = $_POST['county'];
  $estate = $_POST['estate'];
  $additional_details =  $_POST['additional_details'];

  $stmt = $conn->prepare("INSERT INTO orders(user_id,fullname, phone, product_id, quantity, county, estate,additional_details) VALUES(?,?,?,?,?,?,?,?)");
  $stmt->bind_param("issiisss",$userId,$fullname,$phone,$productId, $quantity,$county,$estate,$additional_details);
  $stmt->execute();
  $stmt->close();
  //redirect
  header('Location: index.php?page=placeorder');
  //empty shoppping cart
  unset($_SESSION['cart']);
}
}
}else{
   //redirect
   header('Location: index.php');
}
?>