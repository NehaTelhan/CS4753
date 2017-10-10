<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Chai Wali - Our Collection</title>
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
				<h3 class="m_2">Our Collection</h3>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="images/experiences/chai.jpg" data-fancybox-group="gallery" title="Chai"><img src="images/experiences/chai.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						Chai Teas
					</div>
				</a></div>
				</div>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="images/experiences/coni.jpg" data-fancybox-group="gallery" title="Coni "><img src="images/experiences/coni.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						Coni Teas
					</div>
				</a></div>
				</div>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="images/experiences/fav.jpg" data-fancybox-group="gallery" title="Favorites"><img src="images/experiences/fav.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						Our Favorites
					</div>
				</a></div>
				</div>
		    </div>
		    <div class="row ex_box">
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="images/experiences/kosher.jpg" data-fancybox-group="gallery" title="Kosher"><img src="images/experiences/kosher.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						Kosher Teas
					</div>
				</a></div>
				</div>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="images/experiences/raretea.jpg" data-fancybox-group="gallery" title="Rare"><img src="images/experiences/raretea.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						Rare Teas
					</div>
				</a></div>
				</div>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="images/experiences/classic.jpg" data-fancybox-group="gallery" title="classic"><img src="images/experiences/classic.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						Classic Teas
					</div>
				</a></div>
				</div>
		    </div>
		    <div class="row ex1_box">
			   <div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="images/experiences/fallteas.jpg" data-fancybox-group="gallery" title="Fall"><img src="images/experiences/fallteas.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						Fall Teas
					</div>
				</a></div>
				</div>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="images/experiences/iced.jpg" data-fancybox-group="gallery" title="Iced"><img src="images/experiences/iced.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						Iced Teas
					</div>
				</a></div>
				</div>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="images/experiences/organic.jpg" data-fancybox-group="gallery" title="Organic"><img src="images/experiences/organic.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						Organic Teas
					</div>
				</a></div>
			   </div>
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
