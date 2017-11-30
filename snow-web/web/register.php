<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<link href="css/style.css?<?php echo time(); ?>" rel='stylesheet' type='text/css' />

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>

<link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
<style>
h1,h2,h3,h4,ul {
    font-family: 'Merienda';font-size: 22px;
}
body {
  font-family: 'Raleway';
}
</style>

<?php include "header.php"; ?>


<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$address_special_chars = false;
$something_has_num_or_special_char = false;
$zip_too_short = false;
$zip_too_long = false;

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

function test_address($data) {
  $check_pattern = '/\d+ [0-9a-zA-Z ]+/';
  $has_error = !preg_match($check_pattern, $data);
  // Returns boolean:
  // 0 = False/ No error
  // 1 = True/ Has error
  if ($has_error == 0){
    if(1 === preg_match('/[$%^&*()+=\-\[\]\';,\/{}|":<>?~\\\\]/', $data)){
      $address_special_chars = true;
      return True;
    } else {
      return False;
    }
  } else {
    return True;
  }
}

function test_num($data){
  if(1 === preg_match('~[0-9]~', $data) || 1 === preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $data)){
    #has numbers
    $something_has_num_or_special_char = true;
    return False;
  } else {
    return True;
  }
}

function test_zip($data){
  if (strlen($data) > 5){
    $zip_too_long = true;
    return False;
  } else if (strlen($data) < 5){
    $zip_too_short = true;
    return False;
  } else {
    return True;
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
if (isset($_POST['name'])){
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $address = test_input($_POST['address']);
    $city = test_input($_POST['city']);
    $state = test_input($_POST['state']);
    $zipcode = test_input($_POST['zipcode']);
    $password = test_input($_POST['password']);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $check_email = mysqli_num_rows(mysqli_query($con, "SELECT email FROM Users where email = '$email' "));
    if ($check_email > 0) {
        $fmsg = "User Account already exists";
    } else {

      if (test_email($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !test_address($address) && test_num($name) && test_num($city) && test_num($state) && test_zip($zipcode)){
        $sql="INSERT INTO Users (name, email, address, city, state, zipcode, password) VALUES ('$name', '$email', '$address', '$city', '$state', '$zipcode', '$hashed_password')";
        if (!mysqli_query($con,$sql)){
            die('Error: ' . mysqli_error($con));
            $fmsg ="User Registration Failed";

        } else {
            // echo "Welcome $name. You are registered as $email.";
            $smsg = "Welcome $name. You are registered as $email. Click <a href='index.php'>here</a> to return to the home page.";
            send_email($email, $name);
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION["Email"] = $email;
            $_SESSION["Password"] = $hashed_password;
            $_SESSION["loggedin"] = true;
            header('Location: member.php');
        }
      } else {
        // $a .= "World!";
        $fmsg = "User Registration Failed:";
        if(!test_email($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
          $fmsg .=" Improperly Formatted Email ";
        } else if(test_address($address)){
          if($address_special_chars){
            $fmsg .=" Addresses Cannot Contain Special Characters Aside From # and . ";
          } else {
            $fmsg .=" Improperly Formatted Address ";
          }
        } else if(!test_num($name)){
          if($something_has_num_or_special_char) {
            $fmsg .=" Names Cannot Contain Special Characters or Numbers ";
          } else {
            $fmsg .=" Improperly Formatted Name ";
          }
        } else if(!test_num($city)){
          if($something_has_num_or_special_char) {
            $fmsg .=" Cities Cannot Contain Special Characters or Numbers ";
          } else {
            $fmsg .=" Improperly Formatted City ";
          }
        } else if(!test_num($state)){
          if($something_has_num_or_special_char) {
            $fmsg .=" States Cannot Contain Special Characters or Numbers ";
          } else {
            $fmsg .=" Improperly Formatted State ";
          }
        } else if(!test_zip($zipcode)){
          if($zip_too_short || $zip_too_long){
            $fmsg .=" Zip Codes Must Be 5 Numbers ";
          } else {
            $fmsg .=" Improperly Formatted Zip Code ";
          }
        }
      }
  }
    mysqli_close($con);
  }


function send_email($email, $name) {
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
      $mail->Subject = 'Welcome to Chai Walli';
      $mail->Body    = 'Thank you so much for registering! We look forward to offering you wonderful high quality teas!';
      $mail->AltBody = 'Thank you so much for registering! We look forward to offering you wonderful high quality teas!';

      $mail->send();
      // echo 'Message has been sent';
  } catch (Exception $e) {
      // echo 'Message could not be sent.';
      // echo 'Mailer Error: ' . $mail->ErrorInfo;
  }
}
    ?>

<div class="container" align="center">
        <form class="form-signin form-horizontal" method="POST" align="center" style="width: 600px">
          <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
          <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
          <br>
          <h2 class="register-top-grid">Please Register to Sign Up!</h2>
          <br>

          <label for="inputName" style="float:left" align="left"> <b>Name:</b> </label>
          <div class="form-group" align="horizontal" >
            <input type="text" name="name" id="inputName" class="form-control" placeholder="Name" required>
          </div>

          <label for="inputEmail" style="float:left"> <b>Email address: </b></label>
          <div class="form-group">
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          </div>

          <label for="inputAddress" style="float:left"><b>Mailing Address:</b></label>
          <div class="form-group">
            <input type="text" name="address" id="inputAddress" class="form-control" placeholder="Mailing address" required>
          </div>

          <label for="inputCity" style="float:left"><b>City:</b></label>
          <div class="form-group">
            <input type="text" name="city" id="inputCity" class="form-control" placeholder="City" required>
          </div>

          <label for="inputState" style="float:left"><b>State:</b></label>
          <div class="form-group">
            <!-- <input type="text" name="state" id="inputState" class="form-control" placeholder="State" required> -->
            <select name="state" id="inputState" class="form-control" placeholder="State" required>
            	<option value="AL">Alabama</option>
            	<option value="AK">Alaska</option>
            	<option value="AZ">Arizona</option>
            	<option value="AR">Arkansas</option>
            	<option value="CA">California</option>
            	<option value="CO">Colorado</option>
            	<option value="CT">Connecticut</option>
            	<option value="DE">Delaware</option>
            	<option value="DC">District of Columbia</option>
            	<option value="FL">Florida</option>
            	<option value="GA">Georgia</option>
            	<option value="HI">Hawaii</option>
            	<option value="ID">Idaho</option>
            	<option value="IL">Illinois</option>
            	<option value="IN">Indiana</option>
            	<option value="IA">Iowa</option>
            	<option value="KS">Kansas</option>
            	<option value="KY">Kentucky</option>
            	<option value="LA">Louisiana</option>
            	<option value="ME">Maine</option>
            	<option value="MD">Maryland</option>
            	<option value="MA">Massachusetts</option>
            	<option value="MI">Michigan</option>
            	<option value="MN">Minnesota</option>
            	<option value="MS">Mississippi</option>
            	<option value="MO">Missouri</option>
            	<option value="MT">Montana</option>
            	<option value="NE">Nebraska</option>
            	<option value="NV">Nevada</option>
            	<option value="NH">New Hampshire</option>
            	<option value="NJ">New Jersey</option>
            	<option value="NM">New Mexico</option>
            	<option value="NY">New York</option>
            	<option value="NC">North Carolina</option>
            	<option value="ND">North Dakota</option>
            	<option value="OH">Ohio</option>
            	<option value="OK">Oklahoma</option>
            	<option value="OR">Oregon</option>
            	<option value="PA">Pennsylvania</option>
            	<option value="RI">Rhode Island</option>
            	<option value="SC">South Carolina</option>
            	<option value="SD">South Dakota</option>
            	<option value="TN">Tennessee</option>
            	<option value="TX">Texas</option>
            	<option value="UT">Utah</option>
            	<option value="VT">Vermont</option>
            	<option value="VA">Virginia</option>
            	<option value="WA">Washington</option>
            	<option value="WV">West Virginia</option>
            	<option value="WI">Wisconsin</option>
            	<option value="WY">Wyoming</option>
            </select>
          </div>

          <label for="inputZip" style="float:left"><b>Zip Code:</b> </label>
          <div class="form-group">
            <input type="number" name="zipcode" id="inputZip" class="form-control" placeholder="Zip Code" required>
          </div>

          <label for="inputPassword" style="float:left"><b>Password: </b></label>
          <div class="form-group">
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
          </div>

          <button class="btn btn-lg" style="color:white; background:black" type="submit">Register</button>
          <!-- <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a> -->
      </form>
      <br>
</div>

<?php include "footer.php"; ?>
