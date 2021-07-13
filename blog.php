<!DOCTYPE html>
<html class="no-js" lang="en">

	<head>
		<title>AGRO</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />

		<meta name="theme-color" content="#FCDB5A" />
		<meta name="msapplication-navbutton-color" content="#FCDB5A" />
		<meta name="apple-mobile-web-app-status-bar-style" content="#FCDB5A" />

		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="img/favicon.ico">
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

		<!-- Critical styles
		================================================== -->
		<link rel="stylesheet" href="css/critical.min.css" type="text/css">

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

										<li class="has-submenu">
											<a href="javascript:void(0);">Pages</a>

											<ul class="submenu">
												<li><a href="services.html">Services</a></li>
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

										<li class="active">
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
			<div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 80%" style="background-image: url(img/intro_img/4.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-7">
							<h1 class="__title"><span>Our</span> Blog</h1>

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
						<!-- start posts -->
						<div class="posts posts--style-1">
							<div class="__inner">
								<div class="row">
									<!-- start item -->
									<div class="col-12 col-sm-6 col-lg-4">
										<div class="__item __item--preview">
											<figure class="__image">
												<img class="lazy" src="img/blank.gif" data-src="img/posts_img/1.jpg" alt="demo" />
											</figure>

											<div class="__content">
												<p class="__category"><a href="#">ORGANIC FOOD/TIPS & GUIDES</a></p>

												<h3 class="__title h5"><a href="blog_details.html">Tips for Ripening your Fruit</a></h3>

												<p>
													The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.
												</p>
											</div>

											<span class="__date-post">
												<strong>07</strong>Nov
											</span>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-sm-6 col-lg-4">
										<div class="__item __item--preview">
											<figure class="__image">
												<img class="lazy" src="img/blank.gif" data-src="img/posts_img/2.jpg" alt="demo" />
											</figure>

											<div class="__content">
												<p class="__category"><a href="#">DIET/ORGANIC FOOD</a></p>

												<h3 class="__title h5"><a href="blog_details.html">Health Benefits of a Raw Food</a></h3>

												<p>
													The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.
												</p>
											</div>

											<span class="__date-post">
												<strong>03</strong>Nov
											</span>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-sm-6 col-lg-4">
										<div class="__item __item--preview">
											<figure class="__image">
												<img class="lazy" src="img/blank.gif" data-src="img/posts_img/4.jpg" alt="demo" />
											</figure>

											<div class="__content">
												<p class="__category"><a href="#">DIET/ORGANIC FOOD</a></p>

												<h3 class="__title h5"><a href="blog_details.html">Superfoods you should be eating</a></h3>

												<p>
													The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.
												</p>
											</div>

											<span class="__date-post">
												<strong>25</strong>Oct
											</span>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-sm-6 col-lg-4">
										<div class="__item __item--preview">
											<figure class="__image">
												<img class="lazy" src="img/blank.gif" data-src="img/posts_img/5.jpg" alt="demo" />
											</figure>

											<div class="__content">
												<p class="__category"><a href="#">ORGANIC FOOD/TIPS & GUIDES</a></p>

												<h3 class="__title h5"><a href="blog_details.html">Tips for Ripening your Fruit</a></h3>

												<p>
													The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.
												</p>
											</div>

											<span class="__date-post">
												<strong>07</strong>Nov
											</span>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-sm-6 col-lg-4">
										<div class="__item __item--preview">
											<figure class="__image">
												<img class="lazy" src="img/blank.gif" data-src="img/posts_img/6.jpg" alt="demo" />
											</figure>

											<div class="__content">
												<p class="__category"><a href="#">DIET/ORGANIC FOOD</a></p>

												<h3 class="__title h5"><a href="blog_details.html">Health Benefits of a Raw Food</a></h3>

												<p>
													The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.
												</p>
											</div>

											<span class="__date-post">
												<strong>03</strong>Nov
											</span>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-sm-6 col-lg-4">
										<div class="__item __item--preview">
											<figure class="__image">
												<img class="lazy" src="img/blank.gif" data-src="img/posts_img/3.jpg" alt="demo" />
											</figure>

											<div class="__content">
												<p class="__category"><a href="#">DIET/ORGANIC FOOD</a></p>

												<h3 class="__title h5"><a href="blog_details.html">Superfoods you should be eating</a></h3>

												<p>
													The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.
												</p>
											</div>

											<span class="__date-post">
												<strong>25</strong>oct
											</span>
										</div>
									</div>
									<!-- end item -->
								</div>
							</div>
						</div>
						<!-- end posts -->
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section section--no-pt">
					<div class="container">
						<ul class="page-nav">
							<li class="page-nav__item">
								<a href="#" class="page-nav__link page-nav__link--prev"><i class="ico fontello-left-1"></i>Older post</a>
							</li>
							<li class="page-nav__item">
								<a href="#" class="page-nav__link page-nav__link--next">Newer post<i class="ico fontello-right-1"></i></a>
							</li>
						</ul>
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