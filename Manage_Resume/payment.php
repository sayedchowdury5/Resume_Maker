<?php

   include('header.php');

   if(isset($_POST['submit_btn'])){

   $pname = $_POST['pname'];
   $pemail = $_POST['pemail'];
   $address = $_POST['address'];
   $pcity = $_POST['pcity'];
   $pstate = $_POST['pstate'];
   $pzip = $_POST['pzip'];
   $cardname = $_POST['cardname'];
   $cardnumber = $_POST['cardnumber'];
   $expirem = $_POST['expirem'];
   $expirey = $_POST['expirey'];
   $cvv = $_POST['cvv'];
   
   $sql = "INSERT INTO payment(pname, pemail, address, pcity, pstate, pzip, cardname, cardnumber, expirem, expirey, cvv) VALUES ('$pname','$pemail','$address','$pcity','$pstate','$pzip','$cardname','$cardnumber','$expirem','$expirey','$cvv')";
        mysqli_query($db, $sql);
   }
  
	 
?>
<?php
 include('footer.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="payment.css">
<style>
</style>
</head>
<body>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form method="POST" action="payment.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="pname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="pname" placeholder="John Michel">
            <label for="pemail"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="pemail" placeholder="sample@example.com">
            <label for="address"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="kota Samarahan">
            <label for="pcity"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="pcity" placeholder="Kuching">

            <div class="row">
              <div class="col-50">
                <label for="pstate">State</label>
                <input type="text" id="state" name="pstate" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="pzip">Zip</label>
                <input type="text" id="zip" name="pzip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cardname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="abu sam">
            <label for="cardnumber">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expirem">Exp Month</label>
            <input type="text" id="expmonth" name="expirem" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expirey">Exp Year</label>
                <input type="text" id="expyear" name="expirey" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
        <input type="submit" value="Confirm" name ="submit_btn" id = "submit">
      </form>
    </div>
  </div>
  <div class="col-25">
    
  </div>
</div>
      <a href="homepage.php">Back to Main Page</a>
</body>
</html>
