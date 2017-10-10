<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Chai Wali - About</title>
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
     <!-- Add fancyBox main JS and CSS files -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
</head>
<body>
  <?php include "header.php"; ?>

     <div class="main">
      <div class="shop_top">
		<div class="container">
      <div class="row">
        <h2 style="font-size:20px ! important">Chai Wali's Vision</h2>
        
        <div class="col-md-6"> <img src="images/test.png"> </div>

          <!-- <p class="m_7">Chai Walli is an organic fair trade tea shop that started with a dream. The dream was to spread the nourishing benefits of tea, enjoyed by so many cultures, across the globe and into as many homes as possible. Chai Walli seeks to take you on an adventure through the frigid winters of the Himalayas and into the glorious cherry blossom laden streets of Japan. When you take a sip of Chai Walli’s Organic Chai we want you to feel the sights and smells of India all around you as you are surrounded by a comforting nourishing cloud of cardamom and cinnamon.</p> -->

        <div class="col-md-6" style="display: flex; justify-content: center;">
           <img src="images/chaiwali.png" align="top" width="50%" height="50%" alt=""/>
        </div>

      </div>

      <hr>

			<div class="row">
				<h3 class="m_2", style="font-size:20px ! important">Meet the CEO</h3>

				<div class="col-md-2">
				  <a class="popup-with-zoom-anim" href="#small-dialog3"><img src="images/about/neha_CEO.png" class="img-responsive" title="continue" alt=""/></a>
				</div>
        <!-- <div class="col-md-1"> -->
          <!-- spacing column-->
        <!-- </div> -->
				<div class="col-md-10">
          <br>
					<h3>Neha Telhan
          <br>
          <small>
            <em> Chief Executive</em>
            —
            <a href="mailto:Neha@chaiwali.com">neha@chaiwali.com</a>

          </h3>
				    <p class="m_6">I grew up in a household that had tea two or three times a day. It’s a staple part of not just the household I grew up in, but the culture. Tea unites the family, it’s a time to sit together and enjoy the company of others. I wanted to bring this wonderful part of my culture to the world. Chai Walli is all about bringing people together.</p>
				</div>
			</div>

      <br> <hr> 
			<div class="row">
        <h3 class="m_2", style="font-size:20px ! important">Advantages</h3>
        <div class="col-md-6 top_box">
          <img src="images/about/heart.png"  class="img-responsive center-block" style="height:100px;width:100px">
          <br>
          <h2 style="text-align:center ! important;"> Health Benefits </h2>
          <p>The health benefits of tea have been known and utilized for centuries. Harvard Health published an article citing that, “tea does contain substances that have been linked to a lower risk for heart disease, cancer, and other health problems.” </p>
        </div>
        <div class="col-md-6 top_box">
          <img src="images/about/rice.png"  class="img-responsive center-block" style="height:100px;width:100px">
          <br>
          <h2 style="text-align:center ! important;"> Free Rice Program </h2>
          <p>Maya Angelou said, “When we give cheerfully and accept gratefully, everyone is blessed.” We think she’s right, so for every 10 oz bag of tea you buy we give 1lb of rice to a community in need.</p>
        </div>
				</div>
			</div>
		</div>
	   </div>
	  </div>

<!-- Foot Content  -->
<?php include "footer.php"; ?>

</body>
</html>
