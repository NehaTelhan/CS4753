<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<link rel="stylesheet" href="styles.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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
    session_start();
    $_SESSION["Email"] = $email;
    $sql="INSERT INTO Users (name, email, address, city, state, zipcode, password) VALUES ('$name', '$email', '$address', '$city', '$state', '$zipcode', '$hashed_password')";
    if (!mysqli_query($con,$sql))
      {
        die('Error: ' . mysqli_error($con));
        $fmsg ="User Registration Failed";

      }
    else
      {
        // echo "Welcome $name. You are registered as $email.";
        $smsg = "Welcome $name. You are registered as $email.";
      }
    mysqli_close($con);
  }
    // If the values are posted, insert them into the database.
    // if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
    //     $name = $_POST['name'];
	  //     $email = $_POST['email'];
    //     $address = $_POST['address'];
    //     $city = $_POST['city'];
    //     $state = $_POST['state'];
    //     $zipcode = $_POST['zipcode'];
    //     $password = $_POST['password'];
    //
    //     $query = "INSERT INTO `Users` ('name', 'email', 'address', 'city', 'state', 'zipcode', 'password')
    //     VALUES ('$name', '$email', '$address', '$city', '$state', '$zipcode', PASSWORD('$password'))";
    //
    //       // INSERT INTO `Users` (`name`, `email`, `address`, `city`, `state`, `zipcode`, `password`)
    //       // VALUES ('Test4', 'test4@gmail.com', '12333 Testing Street', 'Charlotteville', 'VA', '22903', 'anotherpassword');
    //     $result = mysqli_query($connection, $query);
    //     if($result){
    //         $smsg = "User Created Successfully.";
    //     }else{
    //         $fmsg ="User Registration Failed";
    //     }
    // }
    ?>

<div class="container">
      <form class="form-signin" method="POST">
        <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
        <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="input-group">
	  <!-- <span class="input-group-addon" id="basic-addon1">@</span> -->
	  <!-- <input type="text" name="username" class="form-control" placeholder="Username" required> -->
	      </div>
        <label for="inputName" class="sr-only">Name</label>
        <input type="text" name="name" id="inputName" class="form-control" placeholder="Name" required>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputAddress" class="sr-only">Mailing Address</label>
        <input type="text" name="address" id="inputAddress" class="form-control" placeholder="Mailing address" required>
        <label for="inputCity" class="sr-only">City</label>
        <input type="text" name="city" id="inputCity" class="form-control" placeholder="City" required>
        <label for="inputState" class="sr-only">State</label>
        <input type="text" name="state" id="inputState" class="form-control" placeholder="State" required>
        <label for="inputZip" class="sr-only">Zip Code</label>
        <input type="number" name="zipcode" id="inputZip" class="form-control" placeholder="Zip Code" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <!-- <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a> -->
      </form>
</div>
