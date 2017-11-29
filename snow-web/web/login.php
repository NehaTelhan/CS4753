<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Chai Wali - Login</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

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

<?php
require 'vendor/autoload.php';

include_once('connect.php');

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_POST['email'])){
  $email = test_input($_POST['email']);
  $password = test_input($_POST['password']);
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  $check_email = mysqli_num_rows(mysqli_query($con, "SELECT email FROM Users where email = '$email' "));
  if ($check_email > 0) {
    $query = "SELECT password FROM users WHERE email = '$email'";
    $result = mysqli_query($con,$query);
    $hash = $result->fetch_assoc()["password"];
    if(password_verify($password,$hash)){
      $smsg =  "Login successful, redirecting to member page";
      header('Location: member.php');
      if (session_status() == PHP_SESSION_NONE) {
          session_start();
      }
      $_SESSION["Email"] = $email;
      $_SESSION["Password"] = $hashed_password;
      $_SESSION["loggedin"] = true;
      // $smsg =  "Password valid. Click <a href='index.php'>here</a> to go to member page.";

    } else {
      $fmsg =  "Password does not match username";
      // header ('Refresh: 2; URL = login.php');
    }
  } else {
    $fmsg =  "User not found";
    // header('Refresh: 2; URL = login.php');
  }
}
mysqli_close($con);
?>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });

            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });

            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
 </head>
<body>
	<?php include 'header.php'; ?>
     <div class="main">
      <div class="shop_top">
		<div class="container">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

			<div class="col-md-6">
				 <div class="login-page">

             <h4 class="title">New Customers</h4>
					<p>Want to introduce new invigorating flavors from around the world to your tastebuds? Join our community now.</p>

					<!-- <button href="register.php" class="btn btn-lg " style="color:white; background:black" type="submit">Create an Account</button> -->

					<div class="button1">
					   <a href="register.php"><input type="submit" name="Submit" value="Create an Account"></a>
					 </div>
					 <div class="clear"></div>
				  </div>
				</div>
				<div class="col-md-6">
				 <div class="login-title">
	           		<h4 class="title">Registered Customers</h4>
					<div id="loginbox" class="loginbox">
						<form method="POST" name="login" id="login-form">
						  <fieldset class="input">
						    <p id="login-form-username">
						      <label for="modlgn_username">Email</label>
						      <input id="modlgn_username" type="text" name="email" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <p id="login-form-password">
						      <label for="modlgn_passwd">Password</label>
						      <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <div class="remember">
							    <p id="login-form-remember">
							      <label for="modlgn_remember"><a href="#">Forget Your Password ? </a></label>
							   </p>
							    <input type="submit" name="Submit" class="button" value="Login"><div class="clear">

							    </div>
							 </div>
						  </fieldset>
						 </form>
					</div>
			      </div>
				 <div class="clear"></div>
			  </div>
			</div>
		  </div>
	  </div>
	 <!-- Foot Content  -->
		<?php include 'footer.php'; ?>
</body>
</html>
