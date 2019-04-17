<?php /* Template Name: What's Reman U */
get_header();
global $post;
$slug = get_category_by_slug('whats-reman-u');
$category = get_posts(array('category' => $slug->cat_ID)); ?>
<div class="container-fluid inside-page-container pt-5 bg-light">
    <div class="pb-5">
        <h3>What's REMAN U?</h3>
        <div class="d-flex" style="height: 80vh">
            <iframe id="videoFrame" src="https://www.youtube.com/embed/PHJC4jMndgE?wmode=transparent" wmode="Opaque" class="w-100" frameborder="0"></iframe>
        </div>
        <div class="d-flex flex-row">
         <?php $i = 0; ?>
         <?php foreach($category as $post) : setup_postdata($post); ?>
            <?php $gallery =  get_post_gallery(get_the_ID(), false) ?>
            <div class="d-flex flex-column gallery-container">
                <?php foreach($gallery['src'] as $src): ?>
                        <div class="gallery-box m-3">
                            <img src="<?php echo $src ?>" alt="" class="h-100 w-100">
                        </div>
                <?php endforeach; ?>
            </div>
            <div class="d-flex mt-3 flex-column">
                <h3><?php the_title() ?></h3>
                <span><?php echo strip_gallery_from_content(get_the_content()) ?></span>
            </div>        
            <?php  endforeach; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>