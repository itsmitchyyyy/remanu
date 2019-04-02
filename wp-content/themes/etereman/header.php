<?php $menu = wp_get_nav_menu_items("primary-menu" ); ?>
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
				<div class="col s8 headline-text">
					<span>
						Have any questions? 
						<b>1-800-934-9479</b>  |
					<a href="#">installer locator</a> |
					<a href="#">car care centers</a>
					</span>
				</div>
				<div class="col s4 headline-icons">
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
	      <a href="<?php echo home_url() ?>" class="brand-logo">
			  <img src="<?php echo get_template_directory_uri() ?>/img/etereman.png" alt="Etereman" class="etereman-logo">
		  </a>
				<a href="#" data-target="mobile-demo" class="sidenav-trigger right text-black"><i class="material-icons">menu</i></a>
				<div class="nav-center text-black show-on-mobile">
					<span class="margin-r-1">Have any questions?</span> 
					<span><b>1-800-934-9479</b></span>
					</div>
		  <ul class="nav-center justify-content-start container hide-on-med-and-down">
				<?php foreach($menu as $menus): ?>
					<li>
						<?php if(is_page($menus->title)) : ?>
						<a href="<?php echo $menus->url; ?>" class="active">
						<?php else: ?>
						<a href="<?php echo $menus->url; ?>">
						<?php endif; ?>
							<?php echo $menus->title ?>
						</a>
					</li>
				<?php endforeach; ?>
				<!-- <div class="searchbar input-field">
						<i class="fa fa-search prefix"></i>
						<input type="text" id="search">
						<label for="search">Search Here...</label>
					</div> -->
	      </ul>
	    </div>
	</nav>
</div>
<!-- MOBILE -->
  <ul class="sidenav" id="mobile-demo">
	<?php foreach($menu as $menus): ?>
		<li>
			<?php if(is_page($menus->title)) : ?>
			<a href="<?php echo $menus->url; ?>" class="active">
			<?php else: ?>
			<a href="<?php echo $menus->url; ?>">
			<?php endif; ?>
				<?php echo $menus->title ?>
			</a>
		</li>
	<?php endforeach; ?>
		<li>
			<a href="#">installer locator</a>
		</li>
		<li>
			<a href="#">car care centers</a>
		</li>
  </ul>
          