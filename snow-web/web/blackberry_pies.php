<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Chai Wali - Single</title>
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
     <!----details-product-slider--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="css/etalage.css">
					<script src="js/jquery.etalage.min.js"></script>
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){

							$('#etalage').etalage({
								thumb_image_width: 300,
								thumb_image_height: 400,

								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
				<!----//details-product-slider--->
</head>
<body>
	<?php include 'header.php'; ?>
     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row">
				<div class="col-md-9 single_left">
				   <div class="single_image">
					     <ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="images/3.jpg" />
									<img class="etalage_source_image" src="images/3.jpg" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/4.jpg" />
								<img class="etalage_source_image" src="images/4.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/5.jpg" />
								<img class="etalage_source_image" src="images/5.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/6.jpg" />
								<img class="etalage_source_image" src="images/6.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/7.jpg" />
								<img class="etalage_source_image" src="images/7.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/8.jpg" />
								<img class="etalage_source_image" src="images/8.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/9.jpg" />
								<img class="etalage_source_image" src="images/9.jpg" />
							</li>
						</ul>
					    </div>
				        <!-- end product_slider -->

				        <div class="single_right">
				        	<img src="images/blackberry_pies_2.jpg" class="img-responsive" alt=""/>
				        	<br>
				        	<h4>Blackberry Earl Grey Tea Pocket Pies</h4>
				        	<br>
				        	<p> <b>We hope you enjoy our artisan crafted recipe for Blackberry Earl Grey Tea Pocket Pies!</b> <br> </p>
				        	<br>
				        	<h3> Ingredients: </h3>
				        		<p> For the pie dough
						        	<ul style="font-size: 14px">
						        		<li>2 1/2 cups unbleached all-purpose flour, plus more for dusting work surface</li>
						        		<li>2 tablespoons sugar</li>
						        		<li>1 teaspoon salt</li>
						        		<li>6 tablespoons chilled solid vegetable shortening</li>
						        		<li>8 tablespoons cold unsalted butter, cut into 1/4 -inch pieces</li>
						        		<li>8-10 tablespoons ice water</li>
						        	</ul>
						        For the filling
						        	<ul style="font-size: 14px">
						        		<li>3 cups blackberries</li>
						        		<li>1/2 cup sugar</li>
						        		<li>1 1/2 tablespoons cornstarch</li>
						        		<li>1/2 teaspoon lemon juice</li>
						        		<li>1/4 teaspoon lemon zest</li>
						        	</ul>
						        For the glaze
						        	<ul style="font-size: 14px">
						        		<li>1 1/2 cups icing sugar</li>
						        		<li>1/4 cup cooled, strong, freshly brewed earl grey tea</li>
						        		<li>1/2 teaspoon of earl grey tea leaves( you can cut open a tea bag and scoop out your leaves)</li>
									</ul>
								<br>
							</div>

				  		<div class="single_left" style="float: right">
				  			<h3> Instructions: </h3>
				  			<ol>
					  			<li>Mix flour, sugar, and salt in food processor fitted with steel blade. Scatter butter and shortening over dry ingredients and pulse until mixture resembles coarse cornmeal, 10 to 15 seconds. Turn mixture into medium bowl.</li>
					  			<li>Sprinkle 8 tablespoons ice water over mixture. With blade of rubber spatula, use folding motion to mix. Press down on dough with broad side of spatula until dough sticks together. If dough does not come together, stir in remaining ice water, 1 teaspoon at a time, until it does. Shape dough into ball with hands, then flatten into 4-inch disk. Dust dough lightly with flour, wrap tightly in plastic wrap, and place in refrigerator for at least 1 hour or up to 2 days.</li>
					  			<li>Preheat the oven to 400 degrees F. In a large bowl, toss the blackberries, sugar, cornstarch, lemon juice and lemon zest. Let stand, mixing and coarsely mashing occasionally, 20 minutes.</li>
					  			<li>Roll out dough on lightly floured surface and cut into squares (you will get about 24 squares in total). Lightly brush edge of pastry square with a lightly beaten egg. Spoon on 1-2 tablespoons of blackberry mixture. Place a second pastry square directly over top of the blackberry filling and press edges of pastry together to seal into a pocket. Press fork into edges of pocket and pierce 3-4 holes in top of pastry pocket.</li>
					  			<li>Lightly brush top of each pocket pie with egg wash and sprinkle with sugar. Place on baking sheet and bake for 20 minutes until top is golden brown. Place on wire rack and cool completely.</li>
					  			<li>For the earl grey tea glaze mix together the brewed early grey tea, tea leaves and icing sugar. Drizzle over top of cooled pocket pies and serve immediately.</li>
					  		</ol>
				        </div>
				        	<!-- <ul class="options">
								<h4 class="m_12">Select a Size(cm)</h4>
								<li><a href="#">151</a></li>
								<li><a href="#">148</a></li>
								<li><a href="#">156</a></li>
								<li><a href="#">145</a></li>
								<li><a href="#">162(w)</a></li>
								<li><a href="#">163</a></li>
							</ul>
				        	<ul class="product-colors">
								<h3>available Colors</h3>
								<li><a class="color1" href="#"><span> </span></a></li>
								<li><a class="color2" href="#"><span> </span></a></li>
								<li><a class="color3" href="#"><span> </span></a></li>
								<li><a class="color4" href="#"><span> </span></a></li>
								<li><a class="color5" href="#"><span> </span></a></li>
								<li><a class="color6" href="#"><span> </span></a></li>
								<div class="clear"> </div>
							</ul> -->
							<!-- <div class="btn_form">
							   <form>
								 <input type="submit" value="buy now" title="">
							  </form>
							</div> -->
							<!-- <ul class="add-to-links">
    			              <li><img src="images/wish.png" alt=""><a href="#">Add to wishlist</a></li>
    			            </ul> -->
    			        <div class="single_right">
    			        	<br>
							<div class="social_buttons">
								<button type="button" class="btn1 btn1-default1 btn1-twitter" onclick="">
					              <i class="icon-twitter"></i> Tweet
					            </button>
					            <button type="button" class="btn1 btn1-default1 btn1-facebook" onclick="">
					              <i class="icon-facebook"></i> Share
					            </button>
					             <button type="button" class="btn1 btn1-default1 btn1-google" onclick="">
					              <i class="icon-google"></i> Google+
					            </button>
					            <button type="button" class="btn1 btn1-default1 btn1-pinterest" onclick="">
					              <i class="icon-pinterest"></i> Pinterest
					            </button>
					        </div>
				        </div>
				        <div class="clear"> </div>
				</div>
				<!-- <div class="col-md-3">
				  <div class="box-info-product">
					<p class="price2">$10.75</p>
						<hr>
					       <ul class="prosuct-qty">
					       	<p> 2 oz makes 20 - 25 cups</p>
								<!-- <span>Quantity:</span>
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
								</select> 
							</ul>
							<form action="https://test.bitpay.com/checkout" method="post" >
							  <input type="hidden" name="action" value="checkout" />
							  <input type="hidden" name="posData" value="" />
							  <input type="hidden" name="data" value="GUL8+szLiINkfuhKbNtbmlRXwI7iILy7qVFR37/vImYxxrg/IB8JKJRZHwM3QA6ZcLJuoS5EBglJY+dAU7pnDEpvs3RLATO/VrXFBogtESYHAk/RIRB2gqwudGZ+g3vuqDo9ACH6z9SxHQpsi8KP4k8npTvhuaF/m2IagVVnGl12ArBPH0rUCzTLk8EDEjr7ohYcQWS0850+KeBZTMqWig==" />
							  <input type="image" src="https://test.bitpay.com/img/button-medium.png" border="0" name="submit" alt="BitPay, the easy way to pay with bitcoins." >
							</form>
				   </div> -->
			   </div>
			</div>
			<!-- <div class="desc">
			   	<h4>Description</h4>
			   	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores</p>
			</div> -->
			<div class="row">
				<br>
				<hr>
				<br>
				<h4 class="m_11">Related Products in the same Category</h4>
				<div class="col-md-4 product1">
					<div class="shop_desc"><a href="single.html">
						<img src="images/experiences/fallteas.jpg" class="img-responsive" alt=""/ style="height: 50%; width: 50%;">
						</a><h3><a href="single.html"></a><a href="#">Fall Teas</a></h3>
						<p>Bold, bright flavors of pink grapefruit, balanced by sweet strawberries, apples, and lemongrass</p>
						<span class="reducedfrom">$16.00</span>
						<span class="actual">$7.50</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#"></a></li>
							<li class="shop_btn"><a href="#">Read More</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</div>
				<div class="col-md-4 product1">
					<div class="shop_desc"><a href="single.html">
						<img src="images/experiences/chai.jpg" class="img-responsive" alt=""/ style="height: 50%; width: 50%;">
						</a><h3><a href="single.html"></a><a href="#">Chai</a></h3>
						<p>Spicy infusion of ginger, pepper, and cloves with cinnamon undertones</p>
						<span class="reducedfrom">$17.00</span>
						<span class="actual">$9.50</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#"></a></li>
							<li class="shop_btn"><a href="#">Read More</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</div>
				<div class="col-md-4 product1">
					<div class="shop_desc"><a href="single.html">
						<img src="images/experiences/kosher.jpg" class="img-responsive" alt=""/ style="height: 50%; width: 50%;">
						</a><h3><a href="single.html"></a><a href="#">Rare Teas</a></h3>
						<p>Lightly smoky beginning, softly sweet middle, and green tea finish</p>
						<span class="reducedfrom">$21.00</span>
						<span class="actual">$14.50</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#"></a></li>
							<li class="shop_btn"><a href="#">Read More</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</div>
				
			</div>
	     </div>
	   </div>
	  </div>
	  <?php include 'footer.php'; ?>
</body>
</html>
