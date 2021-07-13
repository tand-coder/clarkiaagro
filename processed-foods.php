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
			<div id="hero" data-speed="0.7" data-img-position="50% 40%" style="background-image: url(img/intro_img/3.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-7">
							<h1 class="__title"><span></span>Processed<br> Foods</h1>

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
		<!-- 		<section class="section section--gray-bg">
					<div class="container">
						<div class="simple-text-block">
							<div class="row justify-content-lg-center row--lg-middle">
								<div class="col-lg-10">

									<h2>About <span>Bolgarian Tomatos</span></h2>

									<div class="row justify-content-lg-between no-gutters">
										<div class="col-12 col-lg-6">
											<p>
												Our team has a passion for making things with real value. This has led us to assemble a multi-talented group that can do just about anything: from building sets to photographing food, crafting websites to developing apps, beautiful design to adventure cinematography. Designers, engineers, creatives, makers, developers, artists, unite. <br> We believe in helping brands create through strategy, <a href="#">story-telling, digital products</a>, and integrated experiences on web, mobile, and in the world. friends, because you also believe.
											</p>

											<p>
												Our team has a passion for making things with real value. This has led us to assemble a multi-talented group that can do just about anything: from building sets to photographing food, crafting websites.
											</p>

											<p>
												Stimulates vast a real proven works discount secure care. Market invigorate a awesome handcrafted bigger comes newer recommended lifetime.Evulates vast a real proven works discount secure care. Market invigorate a awesome handcrafted bigger comes newer recommended lifetime. Odor to yummy high racy.
											</p>
										</div>

										<div class="col-12 my-3 d-lg-none"></div>

										<div class="col-12 col-lg-5">
											<img class="img-fluid  lazy" src="img/blank.gif" data-src="img/img_4.jpg" alt="demo" />
										</div>
									</div>

									<div class="product-description">
										<div class="my-5">
											<div class="__title">CULTURE</div>
											<div class="__name">BOLGARIAN TOMATOS</div>
										</div>

										<div class="__details">
											<div class="__details__inner">
												<div class="row">
													<div class="col-12 col-sm-auto">
														<div class="__details__item">
															<span class="__num">3500</span>
															<div class="__title">THE NUMBER OF HECTARES</div>
														</div>
													</div>

													<div class="col-12 col-sm-auto">
														<div class="__details__item">
															<span class="__num">236</span>
															<div class="__title">AMOUNT OF WORKERS</div>
														</div>
													</div>

													<div class="col-12 col-sm-auto">
														<div class="__details__item">
															<span class="__num">33 800</span>
															<div class="__title"> COLLECTED TONS</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> -->
				<!-- end section -->

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
												<h3 class="__title">1.	BISCUITS</h3>
												<!-- <h4>1.	IR64 Parboiled Rice</h4> -->
												<div>
													<p>
														 
													</p>

													<p>
														The word biscuit derives from the Latin bis, meaning twice, and coctus, meaning cooked. The term came into use in 14th century England to describe a confection that is baked and then dried out, to produce a hard, flat item that goes soft over time and delicious when dipped in a cup of tea.
														CLARKIA AGRO is Exporting and Supplying Glucose Biscuits of a diverse range. The Glucose Biscuits being manufactured at the food-processing unit are Cream Biscuits, Nice Biscuits, Coconut Biscuits and Chocolate Biscuits. The main aim of CLARKIA is offering the clients with a high quality range of Biscuits ideal to be eaten with tea / coffee. The complete range of Glucose Biscuit is processed in the exceptionally sophisticated processing unit.
High in nutritional value, the Glucose Biscuits contain glucose useful for gaining instant energy. We ensure that the Glucose Biscuits are baked hygienically conforming to the quality norms of the industry. Our catered range of Glucose Biscuits have the accurate proportion of essential ingredients and are mixed well to offer a special taste. We even ensure that only edible products are put in use to manufacture the range. Our products are in high demand in the market owing to the below mentioned qualities:<br>
• Delicious taste<br>
• Fine quality<br>
• Instant energy source<br>
• High nutritional value<br>


													</p>

												
												</div>
											</div>
										</div>

										<div class="col-12 col-md-9 col-lg-6">
											<div class="__image">
												<img class="img-fluid lazy" src="img/blank.gif" data-src="img/busc.jpg" alt="demo"/>
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
												<!-- <h3 class="__title">Non Basmati Rice</h3> -->
												<h3>2.	POTATO CHIPS</h4>
												<div>
													<p>
														We are offering best quality Potato Chips, which is known for its crispiness and mild taste. These chips are not oily when consumed. We procure them from the reliable vendors who make use of the finest quality ingredients in the manufacturing process to ensure brilliant taste and texture of Potato Chips<br>

Features:<br>

•	Delicious tasting in various flavours<br> 
•	Fresh and crispy<br>
•	Rich aroma<br>
•	Hygienic preparation and packing<br>


													</p>
													
													
												</div>
											</div>
										</div>

										<div class="col-12 col-md-9 col-lg-6">
											<div class="__image">
												<img class="img-fluid lazy" src="img/blank.gif" data-src="img/chips.jpg" alt="demo"/>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end item -->

							<!-- start item -->
			<!-- 				<div class="__item">
								<div class="__inner">
									<div class="row justify-content-sm-center">
										<div class="col-12 col-md-9 col-lg-6">
											<div class="__content">
												<h3 class="__title">feel good <span>about eating</span></h3>

												<div>
													<p>
														Evulates vast a real proven works discount secure care. Market invigorate a awesome handcrafted bigger comes newer recommended lifetime. Odor to yummy high racy bonus soaking mouthwatering. First superior full-bodied drink. Like outstanding odor economical deal clinically. Odor to yummy high racy bonus soaking mouthwatering. First superior full-bodied drink. Like outstanding odor economical deal clinically feel durable. Lather each real. Quite one fresh.
													</p>

													<p>
														Delectable absorbent ordinary full-bodied out durable whopping value when. Coming supreme tropical dual locked-in sharpest effervescent zesty bigger. Opportunity and affordable clinically. Ordinary whenever appearance first first unlimited compact.
													</p>

													<p>
														Effervescent pleasing touch vinyl choice. This artificial world's exotic. Survey is and. Delicious magically great product fat-free remarkable gigantic mild too herbal families creamy. Pay limited generous lasting millions sensible hurry pennies is out why sensible.
													</p>
												</div>
											</div>
										</div>

										<div class="col-12 col-md-9 col-lg-6">
											<div class="__image">
												<img class="img-fluid lazy" src="img/blank.gif" data-src="img/product-features_img/3.jpg" alt="demo"/>
											</div>
										</div>
									</div>
								</div>
							</div> -->
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