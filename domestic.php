<!DOCTYPE html>
<html class="no-js" lang="en">

		<?php include 'include/head.php' ?>
<?php include 'include/header.php' ?>
		<!-- Load google font
		================================================== -->
		<script type="text/javascript">
			WebFontConfig = {
				google: { families: [ 'Open+Sans:300,400,500,600,700,800', 'Raleway:100,400,400i,500,500i,700,700i,900'] }
			};
			(function() {
				var wf = document.createElement('script');
				wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
				wf.type = 'text/javascript';
				wf.async = 'true';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(wf, s);
			})();
		</script>

		<!-- Load other scripts
		================================================== -->
		<script type="text/javascript">
			var _html = document.documentElement,
				isTouch = (('ontouchstart' in _html) || (navigator.msMaxTouchPoints > 0) || (navigator.maxTouchPoints));

			_html.className = _html.className.replace("no-js","js");
			_html.classList.add( isTouch ? "touch" : "no-touch");
		</script>
		<script type="text/javascript" src="js/device.min.js"></script>
	</head>

	<body>
		<div id="app">
			
			<!-- start hero -->
			<div id="hero" data-speed="0.7" data-img-position="50% 40%" style="background-image: url(img/intro_img/5.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-7">
							<h1 class="__title">Domestic  <br> </h1>

							<p>
								<!-- The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English -->
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end hero -->

			<!-- start main -->
			<main role="main">
				<!-- Common styles
				================================================== -->
				<link rel="stylesheet" href="css/style.min.css" type="text/css">

				<!-- Load lazyLoad scripts
				================================================== -->
				<script>
					(function(w, d){
						var m = d.getElementsByTagName('main')[0],
							s = d.createElement("script"),
							v = !("IntersectionObserver" in w) ? "8.17.0" : "10.19.0",
							o = {
								elements_selector: ".lazy",
								data_src: 'src',
								data_srcset: 'srcset',
								threshold: 500,
								callback_enter: function (element) {

								},
								callback_load: function (element) {
									element.removeAttribute('data-src')

									oTimeout = setTimeout(function ()
									{
										clearTimeout(oTimeout);

										AOS.refresh();
									}, 1000);
								},
								callback_set: function (element) {

								},
								callback_error: function(element) {
									element.src = "https://placeholdit.imgix.net/~text?txtsize=21&txt=Image%20not%20load&w=200&h=200";
								}
							};
						s.type = 'text/javascript';
						s.async = true; // This includes the script as async. See the "recipes" section for more information about async loading of LazyLoad.
						s.src = "https://cdn.jsdelivr.net/npm/vanilla-lazyload@" + v + "/dist/lazyload.min.js";
						m.appendChild(s);
						// m.insertBefore(s, m.firstChild);
						w.lazyLoadOptions = o;
					}(window, document));
				</script>

				

				<!-- start section -->
				<section class="section">
					<div class="container-fluid">
						<div class="product-features">
							<!-- start item -->
							<div class="__item">
								<div class="__inner">
									<div class="row justify-content-sm-center">
										<div class="col-12 col-md-9 col-lg-6">
											<div class="__content">
												<h3 class="__title">KOLAM</h3>
												<!-- <h4>1.	IR64 Parboiled Rice</h4> -->
												<div>
													<p>
														 
													</p>

													<p>
														Each grain of  Kolam Rice is bright, white and slender and is much softer on the palate after cooking. This rice blends well with all dals and curries and almost melts in your mouth due to its soft texture.<br>
														Packaging Type Available	PP Bag<br>
														Packaging Size Available	25 Kg<br>
														Variety Available	       Medium-Grain Rice<br>
														Weight	                                           25 kg<br>
														Special Features	99% Fat Free, Cholesterol Free, Gluten Free and Gmo Free<br>

													</p>

												

												</div>
											</div>
										</div>

										<div class="col-12 col-md-9 col-lg-6">
											<div class="__image">
												<img class="img-fluid lazy" src="img/blank.gif" data-src="img/kolam.jpg" alt="demo"/>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end item -->

							<!-- start item -->
							<div class="__item">
								<div class="__inner">
									<div class="row justify-content-sm-center">
										<div class="col-12 col-md-9 col-lg-6">
											<div class="__content">
												<h3 class="__title">SONA MASOORI</h3>
												<!-- <h4>2.	100% BROKEN RICE</h4> -->
												<div>
													<p>
														To fulfil the increasing and ever changing demands of our valued clients, we are highly engaged in offering Sona Masoori Rice in the market.<br> 
Features<br>
 No side effects<br> 
 Scrumptious taste<br> 
 Natural colour<br> 
Rich starch Very Fresh<br> 
Size Available In 25kg, 50kg<br>


													</p>
														

													
												</div>
											</div>
										</div>

										<div class="col-12 col-md-9 col-lg-6">
											<div class="__image">
												<img class="img-fluid lazy" src="img/blank.gif" data-src="img/soor.jpg" alt="demo"/>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end item -->

							<!-- start item -->
							<div class="__item">
								<div class="__inner">
									<div class="row justify-content-sm-center">
										<div class="col-12 col-md-9 col-lg-6">
											<div class="__content">
												<h3 class="__title">2. DRY COCONUT (COPRA)</span></h3>
												<!-- <h4>1.	SUGANDHA BASMATI RICE</h4> -->
												<div>
													<p>
														We offer our clients a wide array of dried coconuts. These dried coconuts are widely applicable in different purposes and it is known for its great versatility as seen in the many domestic, commercial, and industrial uses of its different parts. Our dried Coconuts are part of daily diet of many people. Apart from this, these dried coconuts can be availed at market leading rates.<br>
Features: - Great flavour<br>
Form: Loose<br>
Packaging Type: Vacuum Bag<br>
Packing Size: As per client requirement<br>
Parameters: Edible Copra<br>
Moisture: 5% max<br>

Natural Ball coconut copra<br>
•	Coconut Taste: Sweet<br> 
•	Storage Instructions: Cool and dry place<br> 
•	Application: Homes, Hotels, Motels, South Indian Restaurants<br> 
•	Product Type : Ball Copra<br>
•	Style : Dried<br>
•	Cultivation Type : Common<br>
•	Part : Shell<br>
•	Variety : Matured Coconut<br>
•	Size : Various Sizes Available<br>


													</p>

												

												
												</div>
											</div>
										</div>

										<div class="col-12 col-md-9 col-lg-6">
											<div class="__image">
												<img class="img-fluid lazy" src="img/blank.gif" data-src="img/dry.jpg" alt="demo"/>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end item -->

							<!-- start item -->
							<div class="__item">
								<div class="__inner">
									<div class="row justify-content-sm-center">
										<div class="col-12 col-md-9 col-lg-6">
											<div class="__content">
												<h3 class="__title">SABUDANA</span></h3>
												<!-- <h4>2.	1121 BASMATI RICE</h4> -->
												<div>
													<p>
														
	The topmost reason why people eat this dish during fasting is that it loads you with instant energy. It is gluten-free and non-allergic- Anybody and everybody can have sabudana as it does not cause any allergy. It helps to prevent digestion issues, relieves gas, bloating and constipation
CLARKIA offer a nutritive range of  Sabudana. The product offered by CLARKIA is processed at our highly sterilized production unit from supreme class material under the guidance of skilled professionals. This range is acknowledged for properties like highly nutritive, easy to digest and excellent taste. We offer this product in various packaging options at most economical price.<br>

Features:<br>
•	Excellent taste<br>
•	Rich aroma<br>
•	Exotic flavour<br>


													</p>

													<section class="section section--no-pt">

	<table style="width:100%">
		<tr><th colspan="2">Specifications for Tapioca Sago (Sabudana)
Requirement for Sago (Sabudana)
</th></tr>
<tr>
	<th>Characteristic</th>
	<th>Requirements</th>
</tr>
  <tr>
    <td>Moisture, percent by weight, Max</td>
    <td>11</td> 
    
  </tr>
  <tr>
    <td>Total Ash (on dry basis), per cent by weight Max</td>
    <td>0.4</td>
   
  </tr>
  <tr>
    <td>Acid-insoluble ash (on dry basis), percent by weight Max</td>
    <td>0.10</td>
   
  </tr>
  <tr>
    <td>Starch (on dry basis) percent by weight, Min</td>
    <td>98</td>    
  </tr>
  <tr>
  	<td>Proteins (N x 6.25) (on dry basis) percent by weight, Max</td>
  	<td>0.30</td>
  </tr>
  <tr>
    <td>Sulphur dioxide, ppm, Max</td>
    <td>100</td>     
  </tr>
   <tr>
  	<td>Crude Fiber (on dry basis), percent by weight, Max</td>
  	<td>0.20</td>
  </tr>
  <tr>
  	<td>pH of aqueous extract</td>
  	<td>4.5 to7.0</td>
  </tr>
  <tr>
  	<td>Color of gelatinized alkaline paste in the porcelain cuvette on the Scale, 1R + 3Y</td>
  	<td>0.70</td>
  </tr>
</table>
</section>

												
												</div>
											</div>
										</div>

										<div class="col-12 col-md-9 col-lg-6">
											<div class="__image">
												<img class="img-fluid lazy" src="img/blank.gif" data-src="img/sabu.jpg" width="100%" alt="demo"/>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end item -->

						</div>
					</div>
				</section>
				<!-- end section -->

	<section class="section section--no-pt section--no-pb">
					<!-- this is demo key "AIzaSyBXQROV5YMCERGIIuwxrmaZbBl_Wm4Dy5U" -->
					<div class=""  data-marker="img/marker.png" style="min-height: 255px">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.282507393139!2d73.84553431479058!3d18.696166068660148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c826aab37231%3A0xe72fc61b11f51093!2sChimbali%20Phata!5e0!3m2!1sen!2sin!4v1601706784444!5m2!1sen!2sin" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</section>
			</main>
			<!-- end main -->
<?php include 'include/footer.php' ?>
		</div>

		<div id="btn-to-top-wrap">
			<a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="800"></a>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js"><\/script>')</script>

		<script type="text/javascript" src="js/main.min.js"></script>
		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
			(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
			e=o.createElement(i);r=o.getElementsByTagName(i)[0];
			e.src='https://www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
			ga('create','UA-XXXXX-X','auto');ga('send','pageview');
		</script>
	</body>
</html>
<style type="text/css">
table, th, td {
  border: 1px solid black;
  /*border-collapse: collapse;*/
}
</style>