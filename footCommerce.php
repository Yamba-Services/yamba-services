	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<?php
				$message = "";
				$classe = "";
				// if (isset($_POST["souscriver"])) {
				// 	if (!empty($_POST["email"])) {
				// 		$email = htmlspecialchars($_POST["email"]);
				// 		if(mail("yambadh@gmail.com","sujet", $email)){
				// 			$message="Merci pour votre souscription" ;
				// 			$classe='text-success alert alert-success text-center';
				// 		}
				// 		else {
				// 			$message="Erreur d'envoie" ;
				// 			$classe ='text-danger alert alert-danger text-center';
				// 		}
				// 	}
				// }
				?>
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p>Souscrivez a notre newsletter et gagner <span>10%</span> pour vos premiers achat</p>
							<div class="<?= $classe ?>"><?= $message ?> </div>
							<form action="" method="POST" target="_blank" class="newsletter-inner" id="souscriver">
								<input name="mails" id="mails" placeholder="Votre addresse email " type="email">
								<button class="btn" name="souscriver" type="submit">Souscrivez</button>
								<div id="maily"></div>
							</form>
						</div>

						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop !-->
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="index.php"><img src="assets/ecommerce/images/logo2.png" alt="#"></a>
							</div>
							<p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
							<p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456 789</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Faq</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Help</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Customer Service</h4>
							<ul>
								<li><a href="#">Payment Methods</a></li>
								<li><a href="#">Money-back</a></li>
								<li><a href="#">Returns</a></li>
								<li><a href="#">Shipping</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Get In Tuch</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>NO. 342 - London Oxford Street.</li>
									<li>012 United Kingdom.</li>
									<li>info@eshop.com</li>
									<li>+032 3456 7890</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-flickr"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a> - All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="assets/ecommerce/images/payments.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->

	<!-- Jquery -->
	<script src="assets/ecommerce/js/jquery.min.js"></script>
	<script src="assets/ecommerce/js/jquery-migrate-3.0.0.js"></script>
	<script src="assets/ecommerce/js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="assets/ecommerce/js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="assets/ecommerce/js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="assets/ecommerce/js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="assets/ecommerce/js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="assets/ecommerce/js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="assets/ecommerce/js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="assets/ecommerce/js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="assets/ecommerce/js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="assets/ecommerce/js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="assets/ecommerce/js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="assets/ecommerce/js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="assets/ecommerce/js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="assets/ecommerce/js/easing.js"></script>
	<!-- Active JS -->
	<script src="assets/ecommerce/js/active.js"></script>

	<script>
		$(document).ready(function() {
			var regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
			$("#mails").keyup(function() {
				$("#mails").removeClass("border border-danger");
				$("#maily").html("").removeClass("text-danger");
			});
			$("#souscriver").submit(function(e) {
				e.preventDefault();
				if ($("#mails").val() == "") {

					$("#mails").addClass("border border-danger");
					$("#maily").html("Champs vide").addClass("text-danger text-left");
				} else {

					$.ajax({
						url: "php/ajax/verify.php",
						method: "post",
						data: $(this).serialize(),
						success: function(result) {
							if (result == "mail invalide") {
								$("#mails").addClass("border border-danger");
								$("#maily").html("Email incorrect! Veuillez entrer un email valide").addClass("text-danger text-left");
							}
						}
					});

				}
			})
		});

		$(document).ready(function() {
		 var url = window.location.href; 
		 $("#url").html(url);
			$("#cathegorie").change(function() {
			
				window.location.href = "boutique.php";
			})
		});
	</script>