<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Chai Wali - Shop </title>
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
</head>
<body>
	<?php include "header.php"; ?>
     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row shop_box-top">
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="images/pic5.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">New</span>
					</span>
					<span class="sale-box">
						<span class="sale-label">Sale!</span>
					</span>
					<div class="shop_desc">
            <img src="images/experiences/fallteas.jpg" class="img-responsive" alt=""/ style="height: 50%; width: 50%;">
						</a><a href="single.html"></a><a href="#"></a>
						<h3><a href="#">Fall Teas</a></h3>
						<p>Autumn is here! Enjoy it with a nice cup of tea! </p>
						<span class="reducedfrom">$35.00</span>
						<span class="actual">$10.75</span><br>
						<ul class="buttons">
							<!-- <li class="cart"><a href="#">Add To Cart</a></li> -->
							<!-- <li class="shop_btn"><a href="#">Read More</a></li> -->
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="images/pic6.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<!-- <span class="new-label">New</span> -->
					</span>
					<div class="shop_desc">
						<h3><a href="#">Coming Soon! </a><span style="font-size: 15px" class="reducedfrom">Green Teas</span></h3>

						<p>Full-bodied green tea flavor! </p>
						<!-- <span class="reducedfrom">$24.00</span> -->
						<span class="actual">$8.25</span><br>
						<ul class="buttons">
							<!-- <li class="cart"><a href="#">Add To Cart</a></li> -->
							<!-- <li class="shop_btn"><a href="#">Read More</a></li> -->
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="images/pic7.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<!-- <span class="new-label">New</span> -->
					</span>
					<span class="sale-box">
						<!-- <span class="sale-label">Sale!</span> -->
					</span>
					<div class="shop_desc">
						<h3><a href="#">Coming Soon! </a><span style="font-size: 15px" class="reducedfrom">Chai Teas</span></h3>

						<p>Sweet and spicy infusion! </p>
						<!-- <span class="reducedfrom">$45.00</span> -->
						<span class="actual">$21.75</span><br>
						<ul class="buttons">
							<!-- <li class="cart"><a href="#">Add To Cart</a></li> -->
							<!-- <li class="shop_btn"><a href="#">Read More</a></li> -->
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="images/pic8.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<!-- <span class="new-label">New</span> -->
					</span>
					<div class="shop_desc">
						<h3><a href="#">Coming Soon! </a><span style="font-size: 15px" class="reducedfrom">Classic Teas</span></h3>

						<p>A jubilant holiday delight.! </p>
						<!-- <span class="reducedfrom">$21.00</span> -->
						<span class="actual">$6.50</span><br>
						<ul class="buttons">
							<!-- <li class="cart"><a href="#">Add To Cart</a></li> -->
							<!-- <li class="shop_btn"><a href="#">Read More</a></li> -->
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
			</div>
			<div class="row">
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="images/pic9.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<!-- <span class="new-label">New</span> -->
					</span>
					<div class="shop_desc">
						<h3><a href="#">Coming Soon! </a><span style="font-size: 15px" class="reducedfrom">Coni Teas</span></h3>

						<p>Tis the season for festive flavors! </p>
						<!-- <span class="reducedfrom">$35.00</span> -->
						<span class="actual">$10.75</span><br>
						<ul class="buttons">
							<!-- <li class="cart"><a href="#">Add To Cart</a></li> -->
							<!-- <li class="shop_btn"><a href="#">Read More</a></li> -->
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="images/pic10.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<!-- <span class="new-label">New</span> -->
					</span>
					<span class="sale-box">
						<!-- <span class="sale-label">Sale!</span> -->
					</span>
					<div class="shop_desc">
						<h3><a href="#">Coming Soon! </a><span style="font-size: 15px" class="reducedfrom">Iced Teas</span></h3>

						<p>A new take on a summer classic! </p>
						<!-- <span class="reducedfrom">$26.00</span> -->
						<span class="actual">$17.00</span><br>
						<ul class="buttons">
							<!-- <li class="cart"><a href="#">Add To Cart</a></li> -->
							<!-- <li class="shop_btn"><a href="#">Read More</a></li> -->
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="images/pic11.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<!-- <span class="new-label">New</span> -->
					</span>
					<div class="shop_desc">
						<h3><a href="#">Coming Soon! </a><span style="font-size: 15px" class="reducedfrom">Kosher Teas</span></h3>

						<p>Smooth orchid aroma throughout with a clean, refreshing finish! </p>
						<!-- <span class="reducedfrom">$45.00</span> -->
						<span class="actual">$22.00</span><br>
						<ul class="buttons">
							<!-- <li class="cart"><a href="#">Add To Cart</a></li> -->
							<!-- <li class="shop_btn"><a href="#">Read More</a></li> -->
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="images/pic12.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<!-- <span class="new-label">New</span> -->
					</span>
					<span class="sale-box">
						<!-- <span class="sale-label">Sale!</span> -->
					</span>
					<div class="shop_desc">
						<h3><a href="#">Coming Soon! </a><span style="font-size: 15px" class="reducedfrom">Organic Teas</span></h3>

						<p>Flowering tea are beautiful hand-tied tea balls that unfurl as the steep! </p>
						<!-- <span class="reducedfrom">$35.00</span> -->
						<span class="actual">$10.75</span><br>
						<ul class="buttons">
							<!-- <li class="cart"><a href="#">Add To Cart</a></li> -->
							<!-- <li class="shop_btn"><a href="#">Read More</a></li> -->
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
			</div>
		 </div>
	   </div>
	  </div>
<!-- Foot Content  -->
		<?php include "footer.php"; ?>
</body>
</html>
