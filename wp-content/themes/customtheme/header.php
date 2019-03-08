<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<title>
		<?php if(is_frontpage()) : bloginfo('title') ?>
		<?php else : wp_title() ?>
		<?php endif; ?>
	</title>
</head>
<body <?php body_class(); ?>>
<?php $custom_theme_data = custom_theme_get_options(); ?>
<header class="sticky-top">
	<div class="d-flex row-wrap">
		<div class="d-flex flex-grow-1 justify-content-end">
			<span class="m-1">Your weekly source of sales, marketing, customer service, and management insight - Compliments of Ete Raman</span>
		</div>
		<div class="align-items-center d-flex flex-grow-1 flex-row justify-content-center">
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
<div class="position-absolute nav-image-container">
	<img src="<?php echo get_template_directory_uri() ?>/img/remanu.png" alt="" class="nav-image h-100 w-100">
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="#"></a>
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
					'menu_class' => 'navbar-nav mr-auto',
					'walker' => new Bootstrap_NavWalker(),
					'fallback_cb' => 'Bootstrap_NavWalker::fallback'
				)
			); ?>
			<form class="form-inline my-2 my-lg-0">
				<div class="input-group">
      				<input class="form-control border-right-0 search" type="search" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
						<span class="input-group-text bg-white">
							<i class="fa fa-search"></i>
						</span>
					</div>
				</div>
    		</form>
		</div>
	</div>
</nav>