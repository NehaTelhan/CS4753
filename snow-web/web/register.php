<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<link href="css/style.css?<?php echo time(); ?>" rel='stylesheet' type='text/css' />

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
<style>
h1,h2,h3,h4,ul {
    font-family: 'Merienda';font-size: 22px;
}
</style>

<?php include "header.php"; ?>


<?php

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
    return False;
  } else {
    return True;
  }
}

function test_num($data){
  if(1 === preg_match('~[0-9]~', $data) || 1 === preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $data)){
    #has numbers
    return False;
  } else {
    return True;
  }
}

function test_zip($data){
  if (strlen($data) > 5){
    return False;
  } else if (strlen($data) < 5){
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
    $hashed_password = password_hash('$password', PASSWORD_DEFAULT).
    $check_email = mysqli_num_rows(mysqli_query($con, "SELECT email FROM Users where email = '$email' "));
    if ($check_email > 0) {
        $fmsg = "Username already exists";
    } else {
      session_start();
      $_SESSION["Email"] = $email;
      if (test_email($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !test_address($address) && test_num($name) && test_num($city) && test_num($state) && test_zip($zipcode)){
        $sql="INSERT INTO Users (name, email, address, city, state, zipcode, password) VALUES ('$name', '$email', '$address', '$city', '$state', '$zipcode', '$hashed_password')";
        if (!mysqli_query($con,$sql)){
            die('Error: ' . mysqli_error($con));
            $fmsg ="User Registration Failed";

        } else {
            // echo "Welcome $name. You are registered as $email.";
            $smsg = "Welcome $name. You are registered as $email. Click <a href='index.php'>here</a> to return to the home page.";
        }
      } else {
        // $a .= "World!";
        $fmsg = "User Registration Failed:";
        if(!test_email($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
          $fmsg .=" Improperly Formatted Email";
        } else if(test_address($address)){
          $fmsg .=" Improperly Formatted Address";
        } else if(!test_num($name)){
          $fmsg .=" Improperly Formatted Name";
        } else if(!test_num($city)){
          $fmsg .=" Improperly Formatted City";
        } else if(!test_num($state)){
          $fmsg .=" Improperly Formatted State";
        } else if(!test_zip($zipcode)){
          $fmsg .=" Improperly Formatted Zip Code";
        }
      }
  }
    mysqli_close($con);
  }
    ?>

<div class="container" align="center">
        <form class="form-signin form-horizontal" method="POST" action="/action_page.php" align="center" style="width: 600px">
          <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
          <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
          <br>
          <h2 class="register-top-grid">Please Register to Sign Up!</h2>
          <br>

          <div class="form-group">
            <label for="inputName" class="sr-only">Name </label>
            <input type="text" name="name" id="inputName" class="form-control" placeholder="Name" required>
          </div>
          
          <div class="form-group">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          </div>
          
          <div class="form-group">
            <label for="inputAddress" class="sr-only">Mailing Address</label>
            <input type="text" name="address" id="inputAddress" class="form-control" placeholder="Mailing address" required>
          </div>
          
          <div class="form-group">
            <label for="inputCity" class="sr-only">City</label>
            <input type="text" name="city" id="inputCity" class="form-control" placeholder="City" required>
          </div>
          
          <div class="form-group">
            <label for="inputState" class="sr-only">State</label>
            <input type="text" name="state" id="inputState" class="form-control" placeholder="State" required>
          </div>
          
          <div class="form-group">
            <label for="inputZip" class="sr-only">Zip Code</label>
            <input type="number" name="zipcode" id="inputZip" class="form-control" placeholder="Zip Code" required>
          </div>
          
          <div class="form-group">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
          </div>

          <button class="btn btn-lg " style="color:white; background:black" type="submit">Register</button>
          <!-- <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a> -->
      </form>
      <br>
</div>

<?php include "footer.php"; ?>
