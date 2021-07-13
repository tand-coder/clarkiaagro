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
			<!-- start header -->
	

			<!-- start hero -->
			<div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 55%" style="background-image: url(img/intro_img/7.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-7">
							<h1 class="__title"><span>CLARKIA Agro</span> Contact Us</h1>

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
						<!-- start company contacts -->
						<div class="company-contacts  text-center">
							<div class="__inner">
								<div class="row justify-content-around">
									<!-- start item -->
									<div class="col-12 col-md-4 col-lg-3">
										<div class="__item">
											<i class="__ico fontello-location"></i>

											<h4 class="__title">adress</h4>

											<p>
											Gat No -114, Chimbali phata, Pune-Nashik Highway, Pune, Maharashtra, India – 410501.
											</p>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-md-4 col-lg-3">
										<div class="__item">
											<i class="__ico fontello-phone"></i>

											<h4 class="__title">phone</h4>

											<p>
												+91 8530 658 999 
											</p>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-md-4 col-lg-3">
										<div class="__item">
											<i class="__ico fontello-mail-1"></i>

											<h4 class="__title">e-mail</h4>

											<p><a href="mailto:info@clarkiaagro.com">info@clarkiaagro.com</a> <br>
											<p><a href="mailto:clarkiaagro@gmail.com">clarkiaagro@gmail.com</a> <br></p>
											</p>
										</div>
									</div>
									<!-- end item -->
								</div>
							</div>
						</div>
						<!-- end company contacts -->
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section section--dark-bg  section--contacts">
					<div class="container">
						<div class="row justify-content-end">
							<div class="col-12 col-md-6">

								<div class="row justify-content-end">
									<div class="col-md-11">
										<div class="section-heading section-heading--white">
											<h2 class="__title">Get <span>in touch</span></h2>
										</div>

									<form id='contact-form' class="contact-form" action="mail/send1.php" name="customerData" method="post" onSubmit="javascript: return enquiryvalid(this);">
											<div class="input-wrp">
												<input class="textfield" name="name" type="text" placeholder="Name" required="" />
											</div>
											
											<div class="input-wrp">
												<input type="tel" class="textfield" name="contact" pattern="^[0-9-+\s()]*$" minlength="10" maxlength="10" placeholder="Number" required="" />
											</div>

											<div class="input-wrp">
												<input class="textfield" name="email" id="email-id" type="email" placeholder="E-mail" required="" />
											</div>
											
											

											<div class="input-wrp">
												<textarea class="textfield" name="comment" placeholder="Comments"></textarea>
											</div>

											<button class="custom-btn custom-btn--medium custom-btn--style-3 wide" type="submit" role="button">Send</button>

											<div class="form__note"></div>
										</form>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="row no-gutters">
						<div class="col-md-6  map-container map-container--left">
							<!-- this is demo key "AIzaSyBXQROV5YMCERGIIuwxrmaZbBl_Wm4Dy5U" -->
							<div class=""  data-marker="img/marker.png" style="min-height: 255px">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.282507393139!2d73.84553431479058!3d18.696166068660148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c826aab37231%3A0xe72fc61b11f51093!2sChimbali%20Phata!5e0!3m2!1sen!2sin!4v1601706784444!5m2!1sen!2sin" width="100%" height="730" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
						</div>
					</div>
				</section>
				<!-- end section -->
			</main>
			<!-- end main -->

			<!-- start footer -->
			<?php include 'include/footer.php' ?>
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