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
			<div id="hero" data-speed="0.7" data-img-position="50% 40%" style="background-image: url(img/rice-agencies.png);">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-7">
							<h1 class="__title"><span>Rice </span> Basmati &<br> Non-basmati</h1>

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
				<section class="section section--gray-bg">
					<div class="container">
						<div class="simple-text-block">
							<div class="row justify-content-lg-center row--lg-middle">
								<div class="col-lg-10">

									<h2>About <span>Basmati Rice</span></h2>

									<div class="row justify-content-lg-between no-gutters">
										<div class="col-12 col-lg-6">
											<p>
												The name of Basmati Rice is a combination of two words ‘Bas’ & ‘Mati’. The word is derived from the Hindi Language where ‘Bas’ stands for “aroma” and ‘Mati’ stands for “full of”. Therefore, the word Basmati means full of aroma. The Basmati rice we supply is additionally long, superfine and slim grained, having a length to broadness proportion more noteworthy than 8.3mm. It comes accompanied with a sweet savouring taste, incredible fragrance, delicate surface, and a sensitive bend.
Authentic Indian basmati rice is known to extend slightly in broadness insightful after cooking and then the Indian Basmati Rice, we export is of premium quality. It is produced in the northern states of India which primarily includes Haryana, Punjab, Jammu & Kashmir, Uttarakhand and Himachal Pradesh. The rice is usually available in white or creamy hue or in a slight brown tinge. The other varities include steam rice, sella rice or parboiled rice, and golden sella rice. The basmati rice we supply is free from any sort of contamination and outside issue. It is accessible in sealed packs that are impervious to dampness and can effectively hold the fragrance for a sensible span of time


											</p>

											<!-- <p>
												Our team has a passion for making things with real value. This has led us to assemble a multi-talented group that can do just about anything: from building sets to photographing food, crafting websites.
											</p>

											<p>
												Stimulates vast a real proven works discount secure care. Market invigorate a awesome handcrafted bigger comes newer recommended lifetime.Evulates vast a real proven works discount secure care. Market invigorate a awesome handcrafted bigger comes newer recommended lifetime. Odor to yummy high racy.
											</p> -->
										</div>

										<div class="col-12 my-3 d-lg-none"></div>

										<div class="col-12 col-lg-5">
											<div class="__image">
												<img class="img-fluid lazy" src="img/bas-rice.png" data-src="img/bas-rice.png" alt="demo"/>
											</div>
										</div>
									</div>
<!-- 
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
								</div> -->
							</div>
						</div>
					</div>
				</section>
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
												<h3 class="__title">Basmati Rice</span></h3>
												<h4>1.	SUGANDHA BASMATI RICE</h4>
												<div>
													<p>
														Sugandha Basmati Rice is a low cost long grain basmati rice in IndiaSugandha Rice offered by our company is one of the finest quality basmati rice available in India. Sugandha Long Grain Rice is basically a raw steam parboiled white with golden sella. Sugandha rice produces exotic aroma while cooking and has mouth watering taste. The nutritional value of sugandha rice is also very high, thus, their demand in households and restaurants always at the peak. Excellent for biryani and pulao, the sugandha rice offered by us can not be found anywhere else in the market. Consequently, we are regarded as one of the reliable Natural Sugandha Rice Manufacturers and Suppliers in Haryana.<br>

														Properties:<br>
														•	Rich in taste<br>
														•	Pure quality<br>
														•	Hygienically packed<br>
														•	Economically priced<br>
														•	Fine cooking characteristics<br>
														•	Healthy<br>

													</p>

													<section class="section section--no-pt">

														<table style="width:100%">
															<tr><th colspan="2">Specification of Sugandha Basmati Rice Creamy</th></tr>
													  <tr>
													    <td>Moisture</td>
													    <td class="text-align">12% Max</td> 
													    
													  </tr>
													  <tr>
													    <td>Damage & Discolured</td>
													    <td class="text-align">0.5% Max</td>
													   
													  </tr>
													  <tr>
													    <td>Broken</td>
													    <td class="text-align">2% Max</td>
													   
													  </tr>
													  <tr>
													    <td>Purity of Rice</td>
													    <td class="text-align">95%</td>    
													  </tr>
													  <tr>
													  	<td>Admixture</td>
													  	<td class="text-align">5% Max</td>
													  </tr>
													  <tr>
													    <td>Average lenght of Rice</td>
													    <td class="text-align">7.60 MM</td>     
													  </tr>
													   <tr>
													  	<td>Packaging</td>
													  	<td class="text-align">As per Buyers Demand</td>
													  </tr>
													</table>
													</section>

												
												</div>
											</div>
										</div>

										<div class="col-12 col-md-9 col-lg-6">
											<div class="__image">
												<img class="img-fluid lazy" src="img/blank.gif" data-src="img/OEMQ300.jpg" alt="demo"/>
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
												<h3 class="__title">Basmati Rice</span></h3>
												<h4>2.	1121 BASMATI RICE</h4>
												<div>
													<p>
														1121 Basmati Rice is a type of basmati rice. Known as the “Queen of rice”, Extra-long grain 1121 basmati rice has always been reigning over Indian menus right from ancient times. A simple grain yet in every royal menu throughout India and throughout cultures. Its excellent cooking turns every simple dish into mouth-watering meals. The 1121 basmati rice we provide is also long and bright in appearance. It stays distinguished even after it is cooked. Our exporters supply premium quality 1121 Basmati Rice like parboiled, steamed and golden for our clients in different parts of the world.<br>
														Properties:<br>
														•	Long and elegantly thin<br>
														•	Delectable tastes<br>
														•	Non sticky texture after cooking<br>
														•	Fragrant aroma<br>
														•	Bright colour<br>

													</p>

													<section class="section section--no-pt">

													<table style="width:100%">
														<tr><th colspan="2">Specification of 1121 Basmati Rice Parboiled (Creamy)</th></tr>
												  <tr>
												    <td>Moisture</td>
												    <td class="text-align">12% Max</td> 
												    
												  </tr>
												  <tr>
												    <td>Damage & Discolured</td>
												    <td class="text-align">0.5% Max</td>
												   
												  </tr>
												  <tr>
												    <td>Broken</td>
												    <td class="text-align">2% Max</td>
												   
												  </tr>
												  <tr>
												    <td>Purity of Rice</td>
												    <td class="text-align">95%</td>    
												  </tr>
												  <tr>
												  	<td>Admixture</td>
												  	<td class="text-align">5% Max</td>
												  </tr>
												  <tr>
												    <td>Average lenght of Rice</td>
												    <td class="text-align">8.30 MM</td>     
												  </tr>
												   <tr>
												  	<td>Packaging</td>
												  	<td class="text-align">As per Buyers Demand</td>
												  </tr>
												</table>
												</section>

												
												</div>
											</div>
										</div>

										<div class="col-12 col-md-9 col-lg-6">
											<div class="__image">
												<img class="img-fluid lazy" src="img/blank.gif" data-src="img/1121-basmati-rice-1570689318-5110511.jpeg" alt="demo"/>
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
												<h3 class="__title">Non Basmati Rice</h3>
												<h4>1.	IR64 Parboiled Rice</h4>
												<div>
													<p>
														 
													</p>

													<p>
														IR64 medium grain rice is widely renowned Indian rice variety. The rice is known for its long grain and good cooking in non-basmati category. This rice variety is highly popular in African & Gulf Countries for its good quality and low prices. We at CLARKIA AGRO COMMODITIES good quality IR64 rice in small and bulk quantities throughout the year. The crop is sourced from Gondia, Maharashtra India.<br>
													</p>

													<p>
														Properties:<br>
														•	Rich in taste<br>
														•	Pure quality<br>
														•	Hygienically packed<br>
														•	Economically priced<br>
														•	Fine cooking characteristics<br>
														•	Healthy<br>

													</p>
													<section class="section section--no-pt">

													<table style="width:100%">
														<tr><th colspan="2">Specification of IR64 Parboiled Rice Long Grain Golden</th></tr>
												  <tr>
												    <td>Brokens on 2/3 rd basis</td>
												    <td class="text-align">5% Max</td> 
												    
												  </tr>
												  <tr>
												    <td>Moisture</td>
												    <td class="text-align">14% Max</td>
												   
												  </tr>
												  <tr>
												    <td>Damaged/Discoloured/Yellow/Red/Red Streaked Grains</td>
												    <td class="text-align">1.25% Max</td>
												   
												  </tr>
												  <tr>
												    <td>Foreign Matter Including Paddy</td>
												    <td class="text-align">0.25% Max</td>    
												  </tr>
												  <tr>
												  	<td>Black and Black Tipped</td>
												  	<td class="text-align">0.25% Max</td>
												  </tr>
												  <tr>
												    <td>Natural Admixture of Rice</td>
												    <td class="text-align">5% Max</td>     
												  </tr>
												  <tr>
												    <td>Average Length of Rice</td>
												    <td class="text-align">6.00 MM</td>   
												  </tr>
												  <tr>
												    <td>Milling Degree</td>
												    <td class="text-align">Well Milled</td>   
												  </tr>
												  <tr>
												    <td>Quality</td>
												    <td class="text-align">100% Sortex Clean</td>   
												  </tr>
												  <tr>
												  	<td>Packaging</td>
												  	<td class="text-align">25 / 50 kg PP bag</td>
												  </tr>
												</table>
												</section>

												</div>
											</div>
										</div>

										<div class="col-12 col-md-9 col-lg-6">
											<div class="__image prod-img">
												<img class="img-fluid lazy" src="img/blank.gif" data-src="img/3095.jpg" alt="demo"/>
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
												<h3 class="__title">Non Basmati Rice</h3>
												<h4>2.	100% BROKEN RICE</h4>
												<div>
													<p>
														Indian 100% broken rice is very popular in African Countries, This quality is eaten by most of the population in few Countries, for its Good taste and Cooking. Product is 100% broken sortex clean, double polish, silky white broken and parboiled broken.<br>

														Properties:<br>

														•	Rich in taste<br>
														•	Pure quality<br>
														•	Hygienically packed<br>
														•	Economically priced<br>
														•	Fine cooking characteristics<br>
														•	Healthy<br>

													</p>
														<section class="section section--no-pt">

														<table style="width:100%">
															<tr><th colspan="2">Specification of Indian 100%  Broken White Rice</th></tr>
													  <tr>
													    <td>Moisture</td>
													    <td class="text-align">14% Max</td> 
													    
													  </tr>
													  <tr>
													    <td>Small Brokens of 1.25 MM</td>
													    <td class="text-align">15% Max</td>
													   
													  </tr>
													  <tr>
													    <td>Medium Brokens above 1.25 MM</td>
													    <td class="text-align">80% Minimum</td>
													   
													  </tr>
													  <tr>
													    <td>Whole Grain of rice</td>
													    <td class="text-align">5% Max</td>    
													  </tr>
													  <tr>
													  	<td>Damaged/Discoloured/Yellow/Red/Red Streaked Grains</td>
													  	<td class="text-align">1.5% Max</td>
													  </tr>
													  <tr>
													    <td>Foreign Matter Including Paddy</td>
													    <td class="text-align">0.50% Max</td>     
													  </tr>
													  <tr>
													    <td>Chalky Grains</td>
													    <td class="text-align">6% Max</td>   
													  </tr>
													  <tr>
													    <td>KETT/whiteness</td>
													    <td class="text-align">39 to 41 deg Minimumn</td>   
													  </tr>
													  <tr>
													    <td>Milling Degree</td>
													    <td class="text-align">Well Milled</td>   
													  </tr>
													  <tr>
													  	<td>Quality</td>
													  	<td class="text-align">100% Sortex clean double polish</td>
													  </tr>
													   <tr>
													  	<td>Packaging</td>
													  	<td class="text-align">25 / 50 kg PP bag</td>
													  </tr>
													</table>
													</section>

													
												</div>
											</div>
										</div>

										<div class="col-12 col-md-9 col-lg-6">
											<div class="__image">
												<img class="img-fluid lazy" src="img/blank.gif" data-src="img/1186.jpg" alt="demo"/>
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