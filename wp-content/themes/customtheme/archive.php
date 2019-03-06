<?php get_header(); ?>
<?php include('misc/carousel.php') ?>
<div class="container-fluid">
	<h1><?php single_cat_title(); ?></h1>

	<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
			<h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink() ?>" class="btn carousel-caption-btn text-white">Read More</a>
	<?php endwhile; endif; ?>	
</div>
<?php get_footer(); ?>