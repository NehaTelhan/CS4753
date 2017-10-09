<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>ChaiWali</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<!--<script src="js/jquery.easydropdown.js"></script>-->
<!--start slider -->
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/fwslider.js"></script>
<!--end slider -->
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
  <?php include "header.php"; ?>

	<div class="banner">
	<!-- start slider -->
       <div id="fwslider">
         <div class="slider_container">
            <div class="slide">
                <!-- Slide image -->
               <!-- <img src="images/homepage/tea1.jpg" class="img-responsive" alt=""/> -->
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h1 class="title">Run Over<br>Everything</h1>
                        <!-- /Text title -->
                        <div class="button"><a href="#">See Details</a></div>
                    </div>
                </div>
               <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
               <!-- <img src="images/slider2.jpg" class="img-responsive" alt=""/> -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h1 class="title">Run Over<br>Everything</h1>
                       	<div class="button"><a href="#">See Details</a></div>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
       </div>
       <!--/slider -->
      </div>
	  <div class="main">
		<div class="content-top">
			<h2>ChaiWali</h2>
			<p>Organic Exotic and Genuine Teas</p>
			<!-- <div class="close_but"><i class="close1"> </i></div> -->
				<!-- <ul id="flexiselDemo3">
				<li><img src="images/homepage/tea1.jpg" /></li>
				<li><img src="images/homepage/tea1.jpg" /></li>
				<li><img src="images/homepage/tea1.jpg" /></li>
				<li><img src="images/homepage/tea1.jpg" /></li>
				<li><img src="images/homepage/tea1.jpg" /></li>
			</ul> -->
		<h3>Bringing real flavors from South East Asian to your Home</h3>
			<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: {
		    		portrait: {
		    			changePoint:480,
		    			visibleItems: 1
		    		},
		    		landscape: {
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: {
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });

		});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
	<div class="row">
		<div class="content_bottom-container">
			<div class="content_bottom-text">
			  <!-- <div class="col-md-7"> -->
  			<h3 style="color:white; margin-top:50%">Benefits:</h3>
  			<!-- <p class="m_3" style="margi n-top:100 px;font-size:24sp">Benefits:</p> -->
        <ul>
          <li class="content_bottom-list-item">Organic ingredients</li>
          <li class="content_bottom-list-item">Natural health benefits</li>
          <li class="content_bottom-list-item">Exotic spices & Invigorating flavors</li>
          <li class="content_bottom-list-item">Tea Consultants & Recommendations</li>
        </ul>
        <br>
			  <!-- </div> -->
			</div>
      <!-- <div class="content_bottom-txt"> -->
      <img style="padding:0px; height:auto; width:70%" src="images//homepage/bg_image.jpg">
      <!-- </div> -->
		</div>
	</div>

  <!-- Layout of the "what sets us apart section" -->
  <div class="features">
		<div class="container">
			<h3 class="m_3">What sets us apart</h3>
			<!-- <div class="close_but"><i class="close1"> </i></div> -->
			  <div class="row">
				<div class="col-md-4 top_box">
          <img src="images/homepage/blend.png"  class="img-responsive center-block" style="height:100px;width:100px">
          <br>
          We only follow traditional tea blends and tea making processes. No artificial flavors here!
        </div>
        <div class="col-md-4 top_box">
          <img src="images/homepage/asia.png"  class="img-responsive center-block" style="height:100px;width:100px">
          <br>
          We serve only organic, authentic teas from SouthEast Asia. We don’t think the other stuff cuts it.
        </div>
        <div class="col-md-4 top_box">
          <img src="images/homepage/fairtrade.png"  class="img-responsive center-block" style="height:100px;width:100px">
          <br>
          Our business is Fairtrade certified, which means we offer our producers the best trading conditions possible
        </div>
      </div>
    </div>
  </div>
	<div class="features">
		<div class="container">
			<h3 class="m_3">Our Teas</h3>
			<!-- <div class="close_but"><i class="close1"> </i></div> -->
			  <div class="row">
				<div class="col-md-3 top_box">
				  <div class="view view-ninth"><a href="single.html">
                    <img src="images/homepage/tea4.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>Tiramisu Black Tea</h2>
                        <p>Our take on the classic Italian dessert.</p>
                      </div>
                   </a> </div
                  </div>
                  <h4 class="m_4"><a href="#">Black Teas</a></h4>
                  <p class="m_5"> A velvet-smooth indulgence pairing flavors of rich mocha and mascarpone with a soft, nutty-vanilla finish, every sip of this black tea blend is soaked in the atmosphere of an Italian piazza</p>
                </div>
                <div class="col-md-3 top_box">
					<div class="view view-ninth"><a href="single.html">
                    <img src="images/homepage/tea3.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>Jade Citrus Mint Green Tea</h2>
                        <p>This bright tea blend will awaken your taste buds.</p>
                      </div>
                    </a> </div>
                   <h4 class="m_4"><a href="#">Green Teas</a></h4>
                   <p class="m_5">Refreshing and invigorating, this green tea blend is a bright citrus balance of lemon verbena and lemongrass with a hint of spearmint and rich China Chun Mee green tea base.</p>
				</div>
				<div class="col-md-3 top_box">
					<div class="view view-ninth"><a href="single.html">
                    <img src="images/homepage/whitetea.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>Monkey Picked Oolong Teas</h2>
                        <p>Smooth, bright orchid aroma with refreshing finish.</p>
                      </div>
                    </a> </div>
                   <h4 class="m_4"><a href="#">Oolong & White Teas</a></h4>
                   <p class="m_5">As legend has it, ancient Buddhist Monks trained monkeys to gather the youngest leaves from the tip-top of wild tea trees for this special Imperial Reserve blend</p>
				</div>
				<div class="col-md-3 top_box1">
					<div class="view view-ninth"><a href="single.html">
                    <img src="images/homepage/tea1.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>Mandarin Mimosa Herbal Tea</h2>
                        <p>Iced tea that tastes like sunshine.</p>
                      </div>
                     </a> </div>
                   <h4 class="m_4"><a href="#">Herbal</a></h4>
                   <p class="m_5">Inspired by everyone’s favorite brunch cocktail, this herbal infusion is a breezy blend of sweet citrus and bold tropical fruits. It pairs well with long days, warm nights and impromptu adventures.</p>
				</div>
			</div>
		 </div>
	    </div>

    <?php include "footer.php"; ?>

</body>
</html>
