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
		
			<!-- end header -->

			<!-- start hero -->
			<div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 80%" style="background-image: url(img/intro_img/1.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-7">
							<h1 class="__title"><span>About</span> company</h1>

							<!-- <p>
								The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English
							</p> -->
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
				<section class="section section--no-pb section--custom-01">
					<div class="container">
						<div class="section-heading">
							<h2 class="__title">We are <span>Agro products & processed foods </span></h2>
						</div>

						<div class="row">
							<div class="col-12 col-lg-6 col-xl-8">
								<p>
									CLARKIA Agro Commodities business is focused on trading in various Agro products & processed foods in India and internationally.
								</p>

								<p>
									The company has been trading & merchandising Rice, edible Oil, Grains, Pulses, Spices, biscuits, potato chips and various agro based products in all the principal world markets and to the end users in major consumption markets. Capitalizing on India's vast geographical spread and range of reasons, CLARKIA has successfully provided superior quality range of products, to its buyers all over the world. The company is present in every aspect of trade of bulk agro commodities from importing, selling domestically, to exporting and doing third country trade.
								</p>

								<p>
									India is one of the world’s largest food grains producers, the second largest vegetable producer and rice producer, making it one of the world’s agricultural powerhouses. 
								</p>

								<p>
									With global agricultural trade on a sustained rise coupled with robust economic growth across the world, the Agro sector has number of trade opportunities in its offing, which is an important contributor to India’s growth story. The total food production in India is likely to increase substantially in the coming years, which will throw enormous opportunities for large-scale investments in food and food warehousing, logistics management and processing.
								</p>

								<p>
									<a class="custom-btn custom-btn--medium custom-btn--style-1" href="contacts.php">Get in Touch</a>
								</p>
							</div>
						</div>
					</div>
				</section>
				<!-- end section -->

		
				<br><br>

				<!-- start section -->
				<section class="section section--gutter section--base-bg section--custom-02">
					<div class="container">
						<h2 class="__title">VISION</h2>
						<p>
						To become a successful and diversified global group through a process of continuous improvement and development. To be trusted, admired by our customers, and respected by the agro commodities & processed food industries by adding value to all stakeholders</p>
					</div>

					<div class="container mission-css">
						<h2 class="__title">MISSION</h2>
						<p>
						Provide integrated trade solutions to customers to ensure sustainable profits. Focus on being the leading merchant exporter in AGRO COMMODITIES & PROCESSED FOODS.
						Being among top trading companies across segments in AGRO COMMODITIES & PROCESSED FOODS.
						Serve as an effective and accountable instrument of public policy and be socially responsible.</p>
					</div>
				</section>
				<!-- end section -->


				<!-- start section -->
				<section class="section section--no-pb section--custom-03">
					<div class="container">
						<h2 class="__title">OUR VALUE</h2>
						<p>
						Keeping the quality intact and sending it in fresh and premium packaging are the top most factors that make us noticeable in this highly competitive market. Our entire range is in complete agreement to global norms and delights internationally spread customers in terms of rich taste, strong flavour, high nutritious value and freshness. We adhere to high standard of the assortment before procuring it from our vendors, thus, winning the trust of clients commendably.</p>
						<div class="row about-icon text-center">
					<div class="col-md-3">
						<img class="" src="img/best-quality.png">
						<h4>Premium Quality</h4>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-3">
						<img class="" src="img/globally-reg.png" >
						<h4>Globally recognized</h4>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-3">
						<img class="" src="img/assorment.png">
						<h4>High standard Assortment</h4>
					</div>
				</div>
				</div>
				
					
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section section--no-pb section--custom-03">
					<div class="container">
						<h2 class="__title">RECOGNITION</h2>
						<p>
						We do not claim to be the leaders in the rice trade; but we are recognized as a reliable supplier of quality agro & processed food products from India to various African markets. </p>
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<!--<section class="section section--no-pb section--custom-03" style="position: relative;-->
				<!--bottom: 49px;">-->
				<!--	<div class="container">-->
				<!--		<h2 class="__title">CERTIFICATES</h2>-->
				<!--		<p>-->
				<!--		CLARKIA Agro production process is a large state of the art high tech plant which concentrates the most modern and efficient solutions in the industry.-->
				<!--		The real breakthrough is not just technological, although CLARKIA Agro uses the most advanced machines, but CLARKIA Agro encompasses revolutionary approach to rice processing. Through a strict quality and efficiency control of every production phase and a totally new production lay out, CLARKIA Rice is able to run a "zero waste" operation. The rice waste, which is generated at every stage of the process, is reused for maximum efficiency and total environment preservation.</p>-->
				<!--	</div>-->
				<!--</section>-->
				<!-- end section -->

				<!-- start section -->
				<section class="section section--no-pb section--custom-03" style="position: relative;
    			bottom: 114px;">
					<div class="container">
						<h2 class="__title cer-qut">CERTIFIED QUALITY</h2>
						<p>
						CLARKIA AGRO offers its customers a carefully selected AGRO PRODUCTS & PROCESSED FOOD, obtained thanks to a precise working process, always respecting high quality, ISO 9002 certified standards.</p>
					</div>
				</section>
				<!-- end section -->
				
				<!-- start section -->
				<section class="section--no-pb section--custom-09" style="background-position-y: 59px;">
					<div class="container">
						<div class="section-heading">
							<h2 class="__title text-center">Why <span>Us </span></h2>
						</div>

						<div class="row">
							<div class="col-12 col-lg-6 col-xl-8 img-clr">
							    	<h3 class="__title">Private Lable</h3>
								<p>
									If you are looking for a high quality product exporter, then we are successfully exporting to African and other countries. Our clients include Fast Food companies, wholesalers, packers, distributors, restaurants, large importers, and other supermarket chains.
								</p>

								<p>
								At Clarkia Agro India, we enforce strict quality control measures throughout all of our processes and packaging procedures; we look forward to providing our customers with the highest quality products that are competitivelypriced with the very best customer service in the industry.
								</p>

								<p>
								We have our procurement centres strategically positioned right next to the growing areas of all the major rice crop.
								</p>

								<p>
								CLARKIA Agro has invested in creating global standards in processing, quality control and R&D in its operations in India. CLARKIA Agro is positioned as a truly world class, origin based processor and 'ready to retail' products fromCLARKIA Agro will provide you with the strategic advantage to improve your market share.
								</p>
                                <h5 class="__title" style="font-weight: 500;">Products Available in Private Lable</h5>
                                <p>-Rice <br>
                               -Sunflower & Pam Olien <br>
                              -Pulses <br>
                               -Toor Dal Red Lentils</p>
                               <!--</div>-->
                               	<!--<div class="col-12 col-lg-6 col-xl-8">-->
                               <img class="" src="img/serv2.jpg">
                               
                               	
							
							</div>
						</div>
					</div>
				</section>
				<!-- end section -->
				
					<!-- start section -->
				<section class="section section--no-pb">
					<div class="container">
					
						<div class="row">
							<div class="col-12 col-lg-12 col-xl-12">
							    	<h3 class="__title">Inspection</h3>
                               	<h5 class="__title">Third Party Inspectionn</h5>
                               	<p>Ensuring the Quality and Purity of Indian Rice Export Shipments</p>
                               	<h5 class="__title">Valuing Our Customer's Trust</h5>
                               	<p>CLARKIA AGRO exports rice to different countries in many region of the world. Not having local offices in all its destinations, the company needs to manage uncertainty of goods delivery en route as well as during offloading. It is committed to thoroughly satisfying customers, and this implies that delivery should always be correct, complete and on time. CLARKIA needs help to control each shipment. Customers also need third party assurance that rice weight and quality match their order.</p>
                               		<h4 class="__title">Benefits</h4>
                               		<p>It is very important for CLARKIA customers to have a third party guarantee of quality. Buyers are reassured that the quality of products they order from CLARKIA AGRO corresponds precisely with the quality of the product they receive. This builds trust between Clarkia Agro and its customers and facilitates good trading relations. CLARKIA Agro India benefits from having a trustworthy “eye” to overlook its transactions around the world. It is able to maintain effective control of transactions remotely, as an inspection and control arm of its own operations.CLARKIA Agro India in meeting customer expectations for a delivery process that is smooth, timely and reliable.	</p>
							
							</div>
						</div>
					</div>
				</section>
				<br><br><br><br>
				<!-- end section -->
				
					<!-- start section -->
				<!--<section class="section section--no-pb section--custom-03">-->
				<!--	<div class="container">-->
				<!--		<div class="section-heading section-heading--center" data-aos="fade">-->
				<!--			<h2 class="__title">What People Are Saying  <span>About Clarkia</span></h2>-->

				<!--		</div>-->

					
				<!--		<div class="team">-->
				<!--			<div class="__inner">-->
				<!--				<div class="row">-->
								
				<!--					<div class="col-12 col-md-6 col-lg-4">-->
				<!--						<div class="__item" data-aos="fade" data-aos-delay="100" data-aos-offset="0">-->
											
				<!--							<div class="__content">-->
				<!--								<h5 class="__title">Fozia Moussa</h5>-->

				<!--								<span>CEO, Zoom Africa FZCO Djibouti</span>-->
				<!--								<p>Clarkia is an amazing company. Always fulfilled our expectations when it comes to quality and consistent deliveries.</p>-->
				<!--							</div>-->
				<!--						</div>-->
				<!--					</div>-->
								
				<!--					<div class="col-12 col-md-6 col-lg-4">-->
				<!--						<div class="__item" data-aos="fade" data-aos-delay="200" data-aos-offset="0">-->
										

				<!--							<div class="__content">-->
				<!--								<h5 class="__title">Mohammed Awel</h5>-->

				<!--								<span>Director, Star FZCO</span>-->
				<!--								<p>Very nice company for good quality Agro products and processed food products. Prices are very competitive and unmatched quality.</p>-->
				<!--							</div>-->
				<!--						</div>-->
				<!--					</div>-->
								

								
				<!--					<div class="col-12 col-md-6 col-lg-4">-->
				<!--						<div class="__item" data-aos="fade" data-aos-delay="300" data-aos-offset="0">-->
									
				<!--							<div class="__content">-->
				<!--								<h5 class="__title">Abraham Oldjira</h5>-->

				<!--								<span>Director, Orbit International FZCO Djibouti</span>-->
				<!--								<p>The best rice and agro product exporting company with very good quality and best prices.</p>-->
				<!--							</div>-->
				<!--						</div>-->
				<!--					</div>-->
								

								
				<!--				</div>-->
				<!--			</div>-->
				<!--		</div>-->
					
				<!--	</div>-->
				<!--</section>-->
				<!-- end section -->
						<!-- start section -->
				<section class="section section--no-pt section--no-pb">
					<!-- this is demo key "AIzaSyBXQROV5YMCERGIIuwxrmaZbBl_Wm4Dy5U" -->
					<div class=""  data-marker="img/marker.png" style="min-height: 255px">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.282507393139!2d73.84553431479058!3d18.696166068660148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c826aab37231%3A0xe72fc61b11f51093!2sChimbali%20Phata!5e0!3m2!1sen!2sin!4v1601706784444!5m2!1sen!2sin" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</section>
				<!-- end section -->
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
	.mission-css{
		position: relative;
    top: 48px;
}

/* responsive*/
@media only screen and (max-width: 768px){
.img-clr {
    background-color: white;
}
}
</style>