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

$email = test_input($_POST['email']);
$password = test_input($_POST['password']);
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$check_email = mysqli_num_rows(mysqli_query($con, "SELECT email FROM Users where email = '$email' "));
if ($check_email > 0) {
  $query = "SELECT password FROM users WHERE email = '$email'";
  $result = mysqli_query($con,$query);
  $hash = $result->fetch_assoc()["password"];
  // $smsg = "$hash, $password, $hashed_password, $hi";
  // $smsg = strlen($hash);
  // $fmsg = strlen($hashed_password);
  if(password_verify($password,$hash)){
    echo "Login successful, redirecting to member page";
    header('Refresh: 2; URL = member.php');
    session_start();
    $_SESSION["Email"] = $email;
    $_SESSION["Password"] = $hashed_password;
    // $smsg =  "Password valid. Click <a href='index.php'>here</a> to go to member page.";

  } else {
    echo "Password does not match username";
    header ('Refresh: 2; URL = login.php');
  }
} else {
  echo "User not found, returning to login";
  header('Refresh: 2; URL = login.php');
}
?>
