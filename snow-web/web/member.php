<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>

<?php
if(!isset($_SESSSION['Email'])) {
  header('Location: index.php');
}

 ?>

<html>
<head>
<title>Chai Wali - Members</title>
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
    <!-- light-box -->
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
   <script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

		});
	</script>
</head>
<body>
	<?php include "header.php"; ?>
     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="desc">
      <h4> Member Home </h4>
	   	<h2>We Value You!</h2>
	   	<p>To show our apreciation for your loyalty to <i>Chaiwali</i>, we want to invite you to try our perfectly crafted recipes of baked good, using our very own teas! We value your trust in our company, and we will do our best to meet your service expectations.</p>
	   	<p>It has been a pleasure serving you. ChaiWali takes pride in giving priority to their customers and looking after their needs. </p> <p>Quality and customer service are what distinguish us from others. We always strive to exceed our customers’ expectations and meet their requirements.</p> <p>If there is anything else we can do for you, please do inform us. We also appreciate your feedback; it’s what keeps us improving.</p> <p>Thank you again for choosing us. Looking forward to having you as one of our valued customers for many years to come.</p>
	</div>
			<div class="row ex_box">
				<h2 class="m_2"> Try our Recipes!</h2>
				</div>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="blackberry_pies.php" data-fancybox-group="gallery" title="Coni "><img src="images/blackberry_pies.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						Blackberry Earl Grey Pocket Pies
					</div>
				</a></div>
				</div>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="chai_cookie_recipe.php" data-fancybox-group="gallery" title="Chai"><img src="images/chai_cookies.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						Chia Spiced Cookies
					</div>
				</a></div>

				<!-- div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="images/experiences/fav.jpg" data-fancybox-group="gallery" title="Favorites"><img src="images/experiences/fav.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						Our Favorites
					</div>
				</a></div>
				</div> -->
		    </div>
		 </div>
	   </div>
	  </div>
	  <!-- Foot Content  -->
		<?php include "footer.php"; ?>
</body>
</html>
</body>
</html>
