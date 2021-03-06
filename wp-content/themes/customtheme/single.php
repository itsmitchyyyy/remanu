<?php get_header(); ?>
<div class="container-fluid inside-page-container pt-5 bg-light">
	<div class="d-flex flex-column mr-5 ml-5 pb-5 article-container">
		<div class="d-flex flex-column mb-2 mt-2">
			<h3 style="text-transform: uppercase"><?php the_title() ?></h3>
		</div>
		<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
			<div class="d-flex flex-row flex-wrap">
				<span class="mr-1"><?php echo the_date() ?> By <?php echo ucwords(get_the_author()) ?></span>
				<span class="ml-1"><a href="#">Leave a comment</a></span>
			</div>
			<div class="align-self-center d-flex m-2 sales-image">
				<img src="<?php the_post_thumbnail_url() ?>" class="h-100 w-100">
			</div>
			<div class="d-flex mt-2 mb-2">
				<span><?php the_content() ?></span>
			</div>
			<div class="border-custom"></div>
			<div class="d-flex flex-row mt-2 mr-2 mb-2 sales-person-data">
				<div class="d-flex sales-image-person">
					<img src="<?php echo get_template_directory_uri() ?>/img/remanu.png" class="w-100 h-100" alt="">
				</div>
                <div class="d-flex w-100 ml-2">
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>
                </div>
			</div>
            <div class="border-custom"></div>
            <div class="d-flex mb-5 mt-2">
                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>
            </div>
		<?php endwhile; endif; ?>	
	</div>
</div>
<?php get_footer(); ?>