<?=template_header('Place Order')?>
<?php
// session_start();
$user=isset($_SESSION['user']) ? $_SESSION['user'] : null  ;
?>
<div class="placeorder content-wrapper">
    <h1>Your Order Has Been Placed</h1>
    <p>Thank you <?php echo isset($_SESSION['user']) ? $user['username']: 'guest';?> for ordering with us, we'll contact you by email with your order details.</p>
    <a href="index.php"class="btn"  style="display:inline-block; background:#4e5c70; color: #FFFFFF; padding: 12px 29px;margin: 30px 0;
     border-radius: 30px;transition: backgroud0.5s;font-weight: bold;border-radius: 5px; border: 0;font-size: 14px    cursor: pointer; margin-left:800px;" 
      >Continue Shopping &#8594;</a>
</div>


    