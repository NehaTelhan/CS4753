<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
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
			<div class="row ex_box">
				<h3 class="m_2"> Recipes</h3>
				<br>
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
