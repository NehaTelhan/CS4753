<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Chai Wali - Contact</title>
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

<!-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
     </script> -->
 </head>
<body>
	<?php include "header.php"; ?>
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
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $subject = test_input($_POST['subject']);
    $message = test_input($_POST['message']);
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

     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
				  <div class="map">
					<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px"></a></small>
				  </div>
				</div>
				<div class="col-md-5">
					<p class="m_8"><b>Chaiwali</b> Head Quarters is located in Pompano Beach, FL. But we're opening locations nation wide, and have offices internaltionally to best communicate with out tea providers. Sign up for a tour of a village and meet the individuals that harvest your cup of tea. <br>Or send us an e-mail letting us know what you think about Chaiwali.</p>
					<div class="address">
				                <p>500 NE 46th St,</p>
						   		<p>Lighthouse Point, FL, 33064</p>
						   		<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>ChaiWali.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 contact">
				  <form method="POST">
            <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
            <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
					<div class="to">

            <div class="form-group">
              <input type="text" name="name" id="inputName" placeholder="Name" class="form-control" required>
            </div>

            <div class="form-group">
              <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email" required>
            </div>

            <div class="form-group">
              <input type="text"  name="subject" id="inputSubject" class="form-control" placeholder="Subject" required>
            </div>
          </div>
					<div class="text">
	                   <textarea name="message" id="inputMessage" class="form-control" placeholder="Message:"required>Message:</textarea>
	                   <div class="form-submit">
			           <button class="btn btn-lg " style="color:white; background:black" type="submit" name="submit">Submit</button><br>
			           </div>
	                </div>
              <div class="clear"></div>
             </form>
	         </div>
		    </div>
	     </div>
	   </div>
	  </div>

<!-- Foot Content  -->
		<?php include "footer.php"; ?>
</body>
</html>
