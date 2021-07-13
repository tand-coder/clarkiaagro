<!DOCTYPE html>
<html class="no-js" lang="en">
<?php include 'include/head.php' ?>
<?php include 'include/header.php' ?>

	
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


	<body>
		<div id="app">
			<!-- start header -->
			<header id="top-bar" class="top-bar top-bar--style-1">
				<div class="top-bar__bg" style="background-color: #24292c;background-image: url(img/top_bar_bg-1.jpg);background-repeat: no-repeat;background-position: left bottom;"></div>

				<div class="container-fluid">
					<div class="row align-items-center justify-content-between no-gutters">

						<a class="top-bar__logo site-logo" href="index.html">
							<img class="img-fluid" src="img/site_logo.png" alt="demo" />
						</a>

						<a id="top-bar__navigation-toggler" class="top-bar__navigation-toggler top-bar__navigation-toggler--light" href="javascript:void(0);"><span></span></a>

						<div id="top-bar__inner" class="top-bar__inner">
							<div>
								<nav id="top-bar__navigation" class="top-bar__navigation navigation" role="navigation">
									<ul>
										<li class="has-submenu">
											<a href="javascript:void(0);">Home</a>

											<ul class="submenu">
												<li><a href="index.html">Home 1</a></li>
												<li><a href="index_2.html">Home 2</a></li>
												<li><a href="index_3.html">Home 3</a></li>
												<li><a href="index_4.html">Home Shop</a></li>
											</ul>
										</li>

										<li>
											<a href="about.html">About</a>
										</li>

										<li class="active has-submenu">
											<a href="javascript:void(0);">Pages</a>

											<ul class="submenu">
												<li class="active"><a href="services.html">Services</a></li>
												<li><a href="products.html">Products</a></li>
												<li><a href="products_details.html">Product Details</a></li>
												<li><a href="gallery_1.html">Gallery 1</a></li>
												<li><a href="gallery_2.html">Gallery 2</a></li>
												<li><a href="typography.html">Typography</a></li>
												<li><a href="404.html">404 page</a></li>
											</ul>
										</li>

										<li class="has-submenu">
											<a href="javascript:void(0);">Shop</a>

											<ul class="submenu">
												<li><a href="shop_catalog.html">Shop Catalog</a></li>
												<li><a href="single_product.html">Single Product</a></li>
												<li><a href="cart.html">Cart</a></li>
												<li><a href="checkout.html">Checkout</a></li>
												<li><a href="sign_in.html">Sign In/Up</a></li>
											</ul>
										</li>

										<li>
											<a href="blog.html">Blog</a>
										</li>

										<li>
											<a href="contacts.html">Contacts</a>
										</li>

										<li class="li-btn">
											<a class="custom-btn custom-btn--small custom-btn--style-4" href="#">Get in Touch</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>

					</div>
				</div>
			</header>
			<!-- end header -->

			<!-- start hero -->
			<div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% bottom" style="background-image: url(img/intro_img/8.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-7">
							<h1 class="__title"><span>AgRO</span> Services</h1>

							<p>
								The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English
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
					<div class="container">
						<div class="section-heading section-heading--center">
							<h2 class="__title">Special <span>Offers</span></h2>

							<p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
						</div>

						<!-- start feature -->
						<div class="feature feature--style-2">
							<div class="__inner">
								<div class="row">
									<!-- start item -->
									<div class="col-12 col-md-6 col-lg-4">
										<div class="__item">
											<i class="__ico">
												<img class="img-fluid  lazy" src="img/blank.gif" data-src="img/feature_img/1.png" alt="demo" />
											</i>

											<h5 class="__title">Farm Livestock</h5>

											<p>
												The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc. Susp endisse ultricies nisi vel quam suscipit  
											</p>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-md-6 col-lg-4">
										<div class="__item">
											<i class="__ico">
												<img class="img-fluid  lazy" src="img/blank.gif" data-src="img/feature_img/2.png" alt="demo" />
											</i>

											<h5 class="__title">Garden Tillage</h5>

											<p>
												The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc. Susp endisse ultricies nisi vel quam suscipit  
											</p>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-md-6 col-lg-4">
										<div class="__item">
											<i class="__ico">
												<img class="img-fluid  lazy" src="img/blank.gif" data-src="img/feature_img/3.png" alt="demo" />
											</i>

											<h5 class="__title">Fresh Fruits</h5>

											<p>
												The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc. Susp endisse ultricies nisi vel quam suscipit  
											</p>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-md-6 col-lg-4">
										<div class="__item">
											<i class="__ico">
												<img class="img-fluid  lazy" src="img/blank.gif" data-src="img/feature_img/4.png" alt="demo" />
											</i>

											<h5 class="__title">Vegatables</h5>

											<p>
												The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc. Susp endisse ultricies nisi vel quam suscipit  
											</p>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-md-6 col-lg-4">
										<div class="__item">
											<i class="__ico">
												<img class="img-fluid  lazy" src="img/blank.gif" data-src="img/feature_img/5.png" alt="demo" />
											</i>

											<h5 class="__title">Awesome Wheats</h5>

											<p>
												The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc. Susp endisse ultricies nisi vel quam suscipit  
											</p>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-md-6 col-lg-4">
										<div class="__item">
											<i class="__ico">
												<img class="img-fluid  lazy" src="img/blank.gif" data-src="img/feature_img/6.png" alt="demo" />
											</i>

											<h5 class="__title">Agro Machinery</h5>

											<p>
												The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc. Susp endisse ultricies nisi vel quam suscipit  
											</p>
										</div>
									</div>
									<!-- end item -->
								</div>
							</div>
						</div>
						<!-- end feature -->
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section section--gutter section--base-bg">
					<div class="container">
						<!-- start counters -->
						<div class="counter">
							<div class="__inner">
								<div class="row justify-content-sm-center">
									<!-- start item -->
									<div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
										<div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="150">
											<div class="d-table">
												<div class="d-table-cell align-middle">
													<i class="__ico">
														<img class="img-fluid  lazy" src="img/blank.gif" data-src="img/ico/ico_count_1.png" alt="demo" />
													</i>
												</div>

												<div class="d-table-cell align-middle">
													<p class="__count js-count" data-from="0" data-to="19500">19 500</p>

													<p class="__title">Tons of harvesta</p>
												</div>
											</div>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
										<div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="300">
											<div class="d-table">
												<div class="d-table-cell align-middle">
													<i class="__ico">
														<img class="img-fluid  lazy" src="img/blank.gif" data-src="img/ico/ico_count_2.png" alt="demo" />
													</i>
												</div>

												<div class="d-table-cell align-middle">
													<p class="__count js-count" data-from="0" data-to="2720">2 720</p>

													<p class="__title">Units of Cattle</p>
												</div>
											</div>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
										<div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="450">
											<div class="d-table">
												<div class="d-table-cell align-middle">
													<i class="__ico">
														<img class="img-fluid  lazy" src="img/blank.gif" data-src="img/ico/ico_count_3.png" alt="demo" />
													</i>
												</div>

												<div class="d-table-cell align-middle">
													<p class="__count js-count" data-from="0" data-to="10000">10 000</p>

													<p class="__title">Hectares of farm</p>
												</div>
											</div>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
										<div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="600">
											<div class="d-table">
												<div class="d-table-cell align-middle">
													<i class="__ico">
														<img class="img-fluid  lazy" src="img/blank.gif" data-src="img/ico/ico_count_4.png" alt="demo" />
													</i>
												</div>

												<div class="d-table-cell align-middle">
													<p class="__count js-count" data-from="0" data-to="128">128</p>

													<p class="__title">Units of technic</p>
												</div>
											</div>
										</div>
									</div>
									<!-- end item -->
								</div>
							</div>
						</div>
						<!-- end counters -->
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section">
					<div class="container">
						<div class="row">
							<div class="col-12 col-lg-6">
								<h2>Farm <span>Information</span></h2>

								<p>
									<strong>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.  </strong>
								</p>

								<p>
									Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.looked up one of the more obscure Latin words, consectetur. from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered. 
								</p>

								<p>
									Sand tiger buri barbelless catfish pike characid bobtail snipe eel Ragfish, whale shark. Indian mul gulper milkfish sixgill ray bigeye squaretail temperate perch boxfish surgeonfish; sweeper. 
								</p>

								<p>
									<a class="custom-btn custom-btn--medium custom-btn--style-1" href="#">More about</a>
								</p>
							</div>

							<div class="col-12 my-3 d-lg-none"></div>

							<div class="col-12 col-lg-6">
								<img class="img-fluid  lazy" src="img/blank.gif" data-src="img/img_3.jpg" alt="demo" />
							</div>
						</div>
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section section--no-pb jarallax" data-speed="0.4" data-img-position="50% 65%">
					<img class="jarallax-img  lazy" src="img/blank.gif" data-src="img/bg_1.jpg" alt="demo" />

					<div class="container">
						<div class="section-heading section-heading--center section-heading--white" data-aos="fade">
							<h2 class="__title">Additional <span>Services</span></h2>

							<p class="text-white">Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
						</div>

						<div class="simple-text-block simple-text-block--no-pb">
							<div class="row justify-content-md-center">
								<div class="col-12 col-md-11">

									<div class="row justify-content-lg-between no-gutters">
										<div class="col-12 col-lg-5">
											<img class="img-fluid  lazy" src="img/blank.gif" data-src="img/img_2.jpg" alt="demo" />
										</div>

										<div class="col-12 my-3 d-lg-none"></div>

										<div class="col-12 col-lg-6">
											<div class="js-slick" data-slick='{"autoplay": true, "arrows": false, "dots": true, "speed": 1000}'>
												<!-- start item -->
												<div class="__item">
													<h3>livery stables <span>and grazing</span></h3>

													<p>
														<strong>We offer livery stables and grazing, summer stabling for eventing at Aston le Walls and other local events, and winter grazing for polo ponies. We also offer grassland management, in the form of advice, fertilising, harrowing and rolling, aeration spiking and grass re-seeding.</strong>
													</p>

													<p>
														Regal whiptail catfish tapetail alligatorfish boafish South American Lungfish livebearer duckbill eel duckbilled barracudina. South American Lungfish elver starry flounder tubeblenny temperate perch, yellow jack pejerrey gombessa. 
													</p>

													<p>
														Filefish sauger ocean sunfish guitarfish, sabertooth fish guppy goosefish sleeper yellow weaver lemon sole. Bamboo shark, barbeled houndshark king of herring--grunt sculpin tadpole cod black dragonfish. Dogfish temperate ocean-bass cornetfish ballan wrasse giant danio, ling flathead burma danio. Sand tiger buri barbelless catfish pike characid bobtail snipe eel Ragfish, whale shark. Indian mul gulper milkfish sixgill ray bigeye squaretail temperate perch boxfish surgeonfish; sweeper.
													</p>
												</div>
												<!-- end item -->

												<!-- start item -->
												<div class="__item">
													<h3>livery stables <span>and grazing</span> 2</h3>

													<p>
														<strong>We offer livery stables and grazing, summer stabling for eventing at Aston le Walls and other local events, and winter grazing for polo ponies. We also offer grassland management, in the form of advice, fertilising, harrowing and rolling, aeration spiking and grass re-seeding.</strong>
													</p>

													<p>
														Regal whiptail catfish tapetail alligatorfish boafish South American Lungfish livebearer duckbill eel duckbilled barracudina. South American Lungfish elver starry flounder tubeblenny temperate perch, yellow jack pejerrey gombessa. 
													</p>

													<p>
														Filefish sauger ocean sunfish guitarfish, sabertooth fish guppy goosefish sleeper yellow weaver lemon sole. Bamboo shark, barbeled houndshark king of herring--grunt sculpin tadpole cod black dragonfish. Dogfish temperate ocean-bass cornetfish ballan wrasse giant danio, ling flathead burma danio. Sand tiger buri barbelless catfish pike characid bobtail snipe eel Ragfish, whale shark. Indian mul gulper milkfish sixgill ray bigeye squaretail temperate perch boxfish surgeonfish; sweeper.
													</p>
												</div>
												<!-- end item -->
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section">
					<div class="container">
						<div class="partners-list">
							<div class="js-slick"
								 data-slick='{
								 "autoplay": true,
								 "arrows": false,
								 "dots": true,
								 "speed": 1000,
								 "responsive": [
									{
										"breakpoint":576,
										"settings":{
											"slidesToShow": 2
										}
									},
									{
										"breakpoint":767,
										"settings":{
											"slidesToShow": 3
										}
									},
									{
										"breakpoint":991,
										"settings":{
											"slidesToShow": 4
										}
									},
									{
										"breakpoint":1199,
										"settings":{
											"autoplay": false,
											"dots": false,
											"slidesToShow": 5
										}
									}
								]}'>
								<div class="__item">
									<img class="img-fluid m-auto" src="img/partners_img/1.jpg" alt="demo" />
								</div>

								<div class="__item">
									<img class="img-fluid m-auto" src="img/partners_img/2.jpg" alt="demo" />
								</div>

								<div class="__item">
									<img class="img-fluid m-auto" src="img/partners_img/3.jpg" alt="demo" />
								</div>

								<div class="__item">
									<img class="img-fluid m-auto" src="img/partners_img/4.jpg" alt="demo" />
								</div>

								<div class="__item">
									<img class="img-fluid m-auto" src="img/partners_img/5.jpg" alt="demo" />
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section section--dark-bg">
					<div class="container">
						<div class="section-heading section-heading--center section-heading--white" data-aos="fade">
							<h2 class="__title">Get <span>in touch</span></h2>

							<p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
						</div>

						<form class="contact-form js-contact-form" action="#" data-aos="fade">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="input-wrp">
										<input class="textfield" name="name" type="text" placeholder="Name" />
									</div>
								</div>

								<div class="col-12 col-md-6">
									<div class="input-wrp">
										<input class="textfield" name="email" type="text" placeholder="E-mail" />
									</div>
								</div>
							</div>

							<div class="input-wrp">
								<textarea class="textfield" name="message" placeholder="Comments"></textarea>
							</div>

							<button class="custom-btn custom-btn--medium custom-btn--style-3 wide" type="submit" role="button">Send</button>

							<div class="form__note"></div>
						</form>
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section section--no-pt section--no-pb">
					<!-- this is demo key "AIzaSyBXQROV5YMCERGIIuwxrmaZbBl_Wm4Dy5U" -->
					<div class="g_map" data-api-key="AIzaSyBXQROV5YMCERGIIuwxrmaZbBl_Wm4Dy5U" data-longitude="44.958309" data-latitude="34.109925" data-marker="img/marker.png" style="min-height: 255px"></div>
				</section>
				<!-- end section -->
			</main>
			<!-- end main -->

			<!-- start footer -->
			<footer id="footer" class="footer--style-1">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-auto">
							<div class="footer__item">
								<a class="site-logo" href="index.html">
									<img class="img-fluid  lazy" src="img/blank.gif" data-src="img/site_logo.png" alt="demo" />
								</a>
							</div>
						</div>

						<div class="col-12 col-sm">
							<div class="row align-items-md-center no-gutters">
								<div class="col-12 col-md">
									<div class="footer__item">
										<address>
											<p>
												523 Sylvan Ave, 5th Floor Mountain View, CA 94041USA
											</p>

											<p>
												+1 (234) 56789,  +1 987 654 3210 <br>
												<a href="mailto:support@agrocompany.com">support@agrocompany.com</a>
											</p>
										</address>
									</div>
								</div>

								<div class="col-12 col-md-auto">
									<div class="footer__item">
										<div class="social-btns">
											<a href="#"><i class="fontello-twitter"></i></a>
											<a href="#"><i class="fontello-facebook"></i></a>
											<a href="#"><i class="fontello-linkedin-squared"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-5 col-xl-4 offset-xl-1">
							<div class="footer__item">
								<h5 class="h6">Get a newslatter</h5>

								<form class="form--horizontal" action="#">
									<div class="input-wrp">
										<input class="textfield" name="s" type="text" placeholder="Your E-mail" />
									</div>

									<button class="custom-btn custom-btn--medium custom-btn--style-1" type="submit" role="button">subscribe</button>
								</form>
							</div>
						</div>
					</div>

					<div class="row flex-lg-row-reverse">
						<div class="col-12 col-lg-6">
							<div class="footer__item">
								<nav id="footer__navigation" class="navigation  text-lg-right">
									<ul>
										<li class="active"><a href="index.html">Home</a></li>
										<li><a href="#">About</a></li>
										<li><a href="#">Pages</a></li>
										<li><a href="#">Gallery</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="#">Contacts</a></li>
									</ul>
								</nav>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="footer__item">
								<span class="__copy">© 2019 Agro. All rights reserved. Created by <a class="__dev" href="https://themeforest.net/user/artureanec" target="_blank">Artureanec</a></span>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- end footer -->
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