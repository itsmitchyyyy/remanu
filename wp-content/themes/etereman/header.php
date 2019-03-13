<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/etereman.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php wp_head(); ?>
	<title>
		<?php if(is_front_page()) : bloginfo('title') ?>
		<?php else : wp_title() ?>
		<?php endif; ?>
	</title>
</head>
<body <?php body_class(); ?>>
<?php $custom_theme_data = custom_theme_get_options(); ?>
<!-- NAVBAR -->
<nav class="headline sticky-top">
	<div class="nav-wrapper">
		<div class="container" style="height: inherit">
			<div class="row" style="height: 100%">
				<div class="col s6 headline-text">
					<span>Have any questions? <b>1-800-934-9479</b>  |  installer locator</span>
				</div>
				<div class="col s6 headline-icons">
					<span>
						<i class="fa fa-envelope"></i>
					</span>
					<span>
						<i class="fab fa-twitter"></i>
					</span>
					<span>
						<i class="fab fa-facebook-f"></i>
					</span>
					<span>
						<i class="fab fa-linkedin"></i>
					</span>
				</div>
			</div>
		</div>
	</div>
</nav>
<div class="sticky-top">
	<nav>
	    <div class="nav-wrapper white-bg">
	      <a href="#!" class="brand-logo">
			  <img src="<?php echo get_template_directory_uri() ?>/img/etereman.png" alt="Etereman" class="etereman-logo">
		  </a>
	      <a href="#" data-target="mobile-demo" class="sidenav-trigger right text-black"><i class="material-icons">menu</i></a>
		  <ul class="nav-center hide-on-med-and-down">
	        <li><a href="sass.html" class="active">Home</a></li>
	        <li><a href="badges.html">Buyete</a></li>
	        <li><a href="collapsible.html">Product Support</a></li>
	        <li><a href="mobile.html">About</a></li>
	        <li><a href="sass.html">Plant Tour</a></li>
	        <li><a href="badges.html">Reman U</a></li>
	        <li><a href="collapsible.html">Warranty Info</a></li>
	        <li><a href="mobile.html">Car Care Centers</a></li>
	        <li><a href="mobile.html">Careers</a></li>
	        <li><a href="mobile.html">Contact</a></li>
	      </ul>
	    </div>
	</nav>
</div>
<!-- MOBILE -->
  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>
          