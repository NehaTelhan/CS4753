<?php

require 'vendor/autoload.php';

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function test_email($data) {
  if (strpos($data, ".") !== false) {
    return True;
  } else {
    return False;
  }
}

include_once('connect.php');

$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// Form the SQL query (an INSERT query)
if(isset($_POST['name'])){
  $email = test_input($_POST['email']);
  $_SESSION["Email"] = $email;
  if (test_email($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $sql="INSERT INTO contact_requests (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    if (!mysqli_query($con,$sql)){
        die('Error: ' . mysqli_error($con));
        $fmsg ="Contact request failed";

    } else {
        // echo "Welcome $name. You are registered as $email.";
        $smsg = "Thanks for the contacting us, $name. One of our representatives will get back to you at: $email. Click <a href='index.php'>here</a> to return to the home page.";
    }
  } else {
    $fmsg = "Contact request failed:";
    if(!test_email($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
      $fmsg .=" Improperly Formatted Email ";

    }

  }
  mysqli_close($con);
}


 ?>



<div class="footer">
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <ul class="footer_box">
        <h4 style="font-size: 75%" >Products</h4>
        <li><a style="font-size: 60%" href="shop.php">Shop Now</a></li>
      </ul>
    </div>
    <div class="col-md-3">
      <ul class="footer_box">
        <h4 style="font-size: 75%" >About</h4>
        <li><a style="font-size: 60%" href="about.php">Who We Are</a></li>
      </ul>
    </div>
    <div class="col-md-3">
      <ul class="footer_box">
        <h4 style="font-size: 75%" >Customer Support</h4>
        <li><a style="font-size: 60%" href="contact.php">Contact Us</a></li>
      </ul>
    </div>
    <div class="col-md-3">
      <ul class="footer_box">
        <h4 style="font-size: 75%" >Newsletter</h4>
        <div class="footer_search">
             <form>
               <div class="form-group">
                 <input style="font-size: 60%" name="email" id="inputEmail" type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
               </div>
            <input style="font-size: 70%" type="submit" value="Go">
             </form>
            </div>
        <ul class="social">
          <li class="facebook"><a href="#"><span> </span></a></li>
          <li class="twitter"><a href="#"><span> </span></a></li>
          <li class="instagram"><a href="#"><span> </span></a></li>
          <li class="pinterest"><a href="#"><span> </span></a></li>
          <li class="youtube"><a href="#"><span> </span></a></li>
          </ul>
        </ul>
    </div>
  </div>
  <div class="row footer_bottom">
      <div class="copy">
           <p>Chaiwali Inc.</a></p>
          </div>
    </div>
</div>
</div>
