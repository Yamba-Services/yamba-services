<?php
include_once "headCommerce.php";

?>
<!-- Header Inner -->
<div class="header-inner">
    <div class="container">
        <div class="cat-nav-head">
            <div class="row">
                <div class="col-lg-3">

                </div>
                <div class="col-lg-9 col-12">
                    <div class="menu-area">
                        <!-- Main Menu -->
                        <nav class="navbar navbar-expand-lg">
                            <div class="navbar-collapse">
                                <div class="nav-inner">
                                    <ul class="nav main-menu menu navbar-nav">
                                        <li><a href="index.php">Accueil</a></li>
                                        <li ><a href="boutique.php">Boutique</a></li>
                                        <li ><a href="appropos.php">A propos</a></li>
                                        <li><a href="procedure.php">Procedure</a></li>
                                        <li ><a href="condition.php">Condition</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                        <li class="active"><a href="contact.php">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <!--/ End Main Menu -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ End Header Inner -->
</header>
<!--/ End Header -->
<!-- Breadcrumbs -->
<div class="breadcrumbs bg-info">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner text-right">
							<ul class="bread-list">
								<li><a href="index.php">Accueil<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="contact.php">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
        <section id="contact-us" class="contact-us section">
		<div class="container">
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-8 col-12">
							<div class="form-main">
								<div class="title">
									<h4>Avoir une touche</h4>
									<h3>Ecriver nous un message</h3>
								</div>
								<form class="form" method="post" action="">
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Nom et Prenom(s) <span class="text-danger">*</span></label>
												<input name="name" type="text" id="name" placeholder="">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Votre Subjet<span class="text-danger">*</span></label>
												<input name="subject" type="text" id="subject" placeholder="">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Votre Adresse email<span class="text-danger">*</span></label>
												<input name="email" type="email" id="email" placeholder="">
											</div>	
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Numero de Téléphone<span class="text-danger">*</span></label>
												<input name="company_name" type="tel" id="company_name" placeholder="">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>Votre Message<span class="text-danger">*</span></label>
												<textarea name="message" id="message" placeholder=""></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn ">Envoyer un Message</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="single-head">
								<div class="single-info">
									<i class="fa fa-phone"></i>
									<h4 class="title">Appelez nous maintenant</h4>
									<ul>
										<li><a href="tel:+22665402020">+226 65 40 20 20</a></li>
										<li><a href="https://wa.me/65402020">+226 65 40 20 20</a></li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-envelope-open"></i>
									<h4 class="title">Email:</h4>
									<ul>
										<li><a href="mailto:contact@yambadh.com">contact@yambadh.com</a></li>
										<li><a href="mailto:yambafh@gmail.com">yambadh@gmail.com</a></li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-location-arrow"></i>
									<h4 class="title">Notre addresse:</h4>
									<ul>
										<li>12 BP 175, Dassasgo, Ouagadougou</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!--/ End Contact -->
	
	<!-- Map Section -->
	<div class="map-section">
		<div id="myMap"></div>
	</div>
	<!--/ End Map Section -->
	
	
	
<?php
include_once "footCommerce.php";

?>

<script>
    $(document).ready(function(){

    })
</script>