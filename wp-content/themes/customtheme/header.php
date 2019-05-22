<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/remanu.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<?php wp_head(); ?>
	<title>
		<?php if(is_front_page()) : bloginfo('title') ?>
		<?php else : wp_title() ?>
		<?php endif; ?>
	</title>
</head>
<body <?php body_class(); ?>>
<?php $custom_theme_data = custom_theme_get_options(); ?>
<div class="sticky-top">
<header>
	<div class="d-flex row-wrap container">
		<div class="d-flex headline flex-grow-1 justify-content-end align-items-center">
			<div class="container pl-4">
				<span class="text-center header-text">Your weekly source of sales, marketing, customer service, and management insight - compliments of Ete Raman</span>
			</div>
		</div>
		<div class="align-items-center d-flex flex-grow-1 flex-row justify-content-end">
			<span class="m-1">
				<i class="far fa-envelope"></i>
			</span>
			<span class="m-1">
				<i class="fab fa-twitter"></i>
			</span>
			<span class="m-1">
				<i class="fab fa-facebook-f"></i>
			</span>
			<span class="m-1">
				<i class="fab fa-linkedin"></i>
			</span>
		</div>
	</div>
</header>
<nav class="navbar navbar-expand-xl navbar-light bg-light">
	<div class="container">
	
<div class="position-absolute nav-image-container">
	<a href="<?php echo get_home_url() ?>">
		<img src="<?php echo get_template_directory_uri() ?>/img/remanu.png" alt="" class="nav-image h-100 w-100">
	</a>
</div>
		<a class="navbar-brand" href="#"></a>
		<div class="headline-text-mobile">
			<span>Your weekly source of sales, marketing, customer service, and management insight - compliments of Ete Raman</span>
		</div>
		<button class="navbar-toggler" type="button">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navCollapse">
			<?php wp_nav_menu(
				array(
					'theme_location' => 'top-menu',
					'menu_id' => 'primary-menu',
					'depth' => 2,
					'container' => false,
					'menu_class' => 'navbar-nav',
					'walker' => new Bootstrap_NavWalker(),
					'fallback_cb' => 'Bootstrap_NavWalker::fallback'
				)
			); ?>
			<form class="form-inline ml-3 my-2 my-lg-0">
				<div class="input-group">
      				<input class="form-control border-right-0 search" type="search" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
						<span class="input-group-text bg-white">
							<i class="fa fa-search"></i>
						</span>
					</div>
				</div>
			</form>
			<div class="nav-on-mobile">
				<div class="divider"></div>
				<div class="m-1">
					<span class="m-1">
						<i class="far fa-envelope"></i>
					</span>
					<span class="m-1">
						<i class="fab fa-twitter"></i>
					</span>
					<span class="m-1">
						<i class="fab fa-facebook-f"></i>
					</span>
					<span class="m-1">
						<i class="fab fa-linkedin"></i>
					</span>
				</div>
			</div>
		</div>
	</div>
</nav>
</div>