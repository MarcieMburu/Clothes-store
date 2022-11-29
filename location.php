


<html>
    <head>
      <link rel="stylesheet" href="locationstyles.css">
        <body>
          
        <form action="connect.php" method="post">
          <div class="container">
            <h2>Location Details</h2>
  <label for="fullname">FULL NAME:</label><br>
  <br>
  <input type="text" id="fullname" name="fullname"><br>
  <br>

  <label for="phoneNo"> PHONE_NUMBER:</label><br>
  <br>
  <input type="tel" id="phoneNo" name="phone" placeholder="0721345678"><br><br>
  <label for="phoneNo"> COUNTY:</label><br>
  <input type="text" id="county" name="county" placeholder="Nyeri"><br><br>
  <label for="phoneNo"> ESTATE:</label><br>
  <input type="text" id="uestate" name="estate" placeholder="Kahawa"><br><br>
  <label for="phoneNo"> Additional details</label><br>
  <textarea name="additional_details" id="uestate" cols="50" rows="4"></textarea>
  <p>We currenty deliver in Nyeri only</p>
  <p>Payment plan: Cash on Delivery</p>
  
</div>
<button type="submit" name="submit" style="margin-top: 5% ;display:inline-block; background:#4e5c70; color: #FFFFFF; padding: 12px 29px;margin: 30px 0;
     border-radius: 30px;transition: backgroud0.5s;font-weight: bold;border-radius: 5px; border: 0;font-size: 14px    cursor: pointer; margin-left:20px;"
     > COMPLETE ORDER</button>


</form><br>
<br>
</body>
</html>
<?=template_footer();?>
