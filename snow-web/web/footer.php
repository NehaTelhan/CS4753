<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function test_input2($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function test_email2($data) {
  if (strpos($data, ".") !== false) {
    return True;
  } else {
    return False;
  }
}

include_once('connect.php');

$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// Form the SQL query (an INSERT query)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted
    if (isset($_POST['btnSubscribe'])) {
        // btnSubscribe
        $email = $_POST['email'];
        $_SESSION["Email"] = $email;
        if (test_email2($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $sql="UPDATE USERS SET subscribed='1' WHERE email='$email'";
          $name="SELECT name FROM `Users` WHERE email='$email'";
          if (!mysqli_query($con,$sql)){
              die('Error: ' . mysqli_error($con));
              $fmsg ="Contact request failed";

          } else {
              // echo "Welcome $name. You are registered as $email.";
              $smsg = "$email subscribed to mailing list";
              send_email2($email, $name);
          }
        } else {
          $fmsg = "Subscription request failed:";
          if(!test_email2($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $fmsg .=" Improperly Formatted Email ";

          }

        }
        mysqli_close($con);
    }
  }

    function send_email2($email, $name) {
      $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
      try {
          //Server settings
          $mail->SMTPDebug = false;                                 // Enable verbose debug output
          $mail->isSMTP();                                      // Set mailer to use SMTP
          $mail->Host = 'smtp.gmail.com'; ;  // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                               // Enable SMTP authentication
          $mail->Username = 'chaiwalli12@gmail.com';                 // SMTP username
          $mail->Password = 'welovechai$$$$';                           // SMTP password
          $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;                                    // TCP port to connect to

          //Recipients
          $mail->setFrom('chaiwalli12@gmail.com', 'Sadiyah from Chai Walli');
          $mail->addAddress($email, $name);     // Add a recipient
          // $mail->addAddress('ellen@example.com');               // Name is optional
          // $mail->addReplyTo('info@example.com', 'Information');
          // $mail->addCC('cc@example.com');
          // $mail->addBCC('bcc@example.com');

          //Attachments
          // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
          // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

          //Content
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = 'Subscription Confirmed';
          $mail->Body    = 'Thank you so much for subscribing! Look forward to our tea themed emails!';
          $mail->AltBody = 'Thank you so much for subscribing! Look forward to our tea themed emails!';

          $mail->send();
          // echo 'Message has been sent';
      } catch (Exception $e) {
          // echo 'Message could not be sent.';
          // echo 'Mailer Error: ' . $mail->ErrorInfo;
      }
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
               <button name="btnSubscribe" class="btn btn-small" formmethod="post" style="color:white; background:black" type="submit">Subscribe</button>
             </div>
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
