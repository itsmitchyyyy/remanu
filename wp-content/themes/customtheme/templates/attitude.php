<?php /* Template Name: Attitude */
get_header();
global $post;
$slug = get_category_by_slug('attitude');
$category = get_posts(array('category' => $slug->cat_ID)); ?>
<div class="container-fluid">
    <div class="d-flex flex-column m-5 article-container">
        <?php $i = 0; ?>
        <?php foreach($category as $post): setup_postdata($post); ?>
        <?php if($i < 4): ?>
        <div class="d-flex flex-column mb-5 mt-2">
            <div class="d-flex">
                <h3 class="text-uppercase"><?php the_title() ?></h3>
            </div>
            <div class="d-flex flex-row">
                <span class="mr-1"><?php echo get_the_date() ?> BY <?php echo ucwords(get_the_author()) ?></span>
                <span class="ml-1"><a href="">Leave a comment</a></span>
            </div>
            <div class="align-self-center d-flex m-2 sales-image">
                <img class="h-100 w-100" src="<?php the_post_thumbnail_url() ?>" alt="">
            </div>
            <div class="d-flex mt-2 mb-2">
                <span><?php the_content() ?></span>
            </div>
            <div class="border-custom"></div>
            <div class="d-flex flex-row mt-2 mr-2 mb-2 sales-person-data">
                <div class="d-flex sales-image-person">
                    <img src="<?php echo get_template_directory_uri()?>/img/remanu.png" alt="" class="w-100 h-100">
                </div>
                <div class="d-flex w-100 ml-2">
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>
                </div>
            </div>
            <div class="border-custom"></div>
            <div class="d-flex mt-2">
                <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</small>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
<?php get_footer(); ?>