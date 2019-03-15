<?php get_header(); ?>
<?php include('misc/carousel.php') ?>
<div class="container main-cont">
	<div class="message-icon" style="background-image:url(<?php echo get_template_directory_uri() ?>/img/message.png)"></div>
	<div class="row red-bg info-top">
		<div class="col s4 info-image">
			<img src="<?php echo get_template_directory_uri() ?>/img/etereman1985.png" alt="">
		</div>
		<div class="col s8 info-text">
			<div class="info-text-top">
				<span>
				ETE REMAN is a Remanufacturer of Transmissions <br> 
				and Transfer Cases For Domestic, Foreign, <br>
				High Performance, and Exotic Cars and Trucks</span>
			</div>
			<div class="divider info-text-divider margin-t-1 margin-b-1"></div>
			<div class="info-text-bottom">
				<span>
					ETE REMAN remanufactures over 4,000 different transmissions for over <br>
					16,000 vehicle applications and has several regional warehouses throught the USA. <br>
					ETE Reman also sells its own formula of fully synthetic transmission fluid.
				</span>
			</div>
		</div>
	</div>
	<div class="row company-info">
		<div class="col s12 center-align company-info-header">
			<div class="company-info-header-text">
				<h3>COMPANY OVERVIEW</h3>
			</div>
			<div class="company-info-header-video">
				<iframe src="https://www.youtube.com/embed/w4mfZZvx7Os" frameborder="0" height="350" width="350"></iframe>
			</div>
		</div>
	</div>
</div>
<div class="row services-list">
	<div class="card">
		<div class="col s12 m12 l6 services-info">
			<div class="services-info-details" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/card-1.jpg)">
				<div class="service-info-details-text">
					<span>vehicle owners</span>
				</div>
				<div class="service-info-details-buttons">
					<button class="btn waves-effect waves-light">milwaukee area auto centers</button>
					<button class="btn waves-effect waves-light">auto centers throughout the u.s.</button>
				</div>
			</div>
		</div>
		<div class="col s12 m12 l6 services-info">
			<div class="services-info-details" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/card-2.jpg)">
				<div class="service-info-details-text">
					<span>PRODUCT SUPPORT</span>
				</div>
				<div class="service-info-details-buttons">
					<button class="btn waves-effect waves-light">learn more</button>
				</div>
			</div>
		</div>
		<div class="col s12 m12 l6 services-info">
			<div class="services-info-details" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/card-3.jpg)">
				<div class="service-info-details-text">
					<span>buyete</span>
				</div>
				<div class="service-info-details-buttons">
					<button class="btn waves-effect waves-light">shop now</button>
				</div>
			</div>
		</div>
		<div class="col s12 m12 l6 services-info">
			<div class="services-info-details" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/card-4.jpg)">
				<div class="service-info-details-text">
					<span>careers</span>
				</div>
				<div class="service-info-details-buttons">
					<button class="btn waves-effect waves-light">learn more</button>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row feedback-info">
	<div class="card card-container" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/card-6.png)">
		<img class="feedback-logo" src="<?php echo get_template_directory_uri() ?>/img/card-5.png" alt="">
		<div class="feedback-header">
			<div class="feedback-heading">
				<span>what our customers saying</span>
			</div>
			<div class="container">
				<div class="flexbox-row-center">
					<div class="card feedback-card">
						<div class="feedback-card-content">
							<div style="background-image: url(<?php echo get_template_directory_uri() ?>/img/etereman.png)" class="feedback-card-content-logo"></div>
							<span>Gordon Liske</span>
							<span>Vehicle Owner</span>
							<span>
								Your team's effort in dealing with product issues, delivery, and customer service response times is truly outstanding.
								Product failures happen but it is how you deal with them that counts
							</span>
						</div>
					</div>
					<div class="card feedback-card">
						<div class="feedback-card-content">
							<div style="background-image: url(<?php echo get_template_directory_uri() ?>/img/etereman.png)" class="feedback-card-content-logo"></div>
							<span>Gordon Liske</span>
							<span>Vehicle Owner</span>
							<span>
								Your team's effort in dealing with product issues, delivery, and customer service response times is truly outstanding.
								Product failures happen but it is how you deal with them that counts
							</span>
						</div>
					</div>
				</div>
				<div class="feedback-divider">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>