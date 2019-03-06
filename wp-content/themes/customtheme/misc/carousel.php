<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">

    <?php $carousel = new WP_Query(array(
      'post_type' => 'carousel')); 
      $indicator = 0;
      ?>
    <?php while($carousel->have_posts()) : $carousel->the_post();  ?>
    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $indicator ?>" <?php if($indicator == 0) : ?> class="active" <?php endif; ?> ></li>
    <?php $indicator++; endwhile; ?>
  </ol>
  <div class="carousel-inner">
    <?php $carousel = new WP_Query(array(
      'post_type' => 'carousel'));

    $count = 0;

      while ($carousel->have_posts()) : $carousel->the_post(); $count++; ?>
        <?php if($count == 1) : ?>
          <div class="carousel-item active">
        <?php else : ?>
          <div class="carousel-item">
        <?php endif; ?>
            <img class="d-block w-100 carousel-image-height"  src="<?php the_post_thumbnail_url() ?>">
          <div class="carousel-caption flex-column d-flex justify-content-center align-items-center h-100">
            <h3 class="carousel-caption-title"><?php the_title(); ?></h3>
            <a href="<?php the_permalink() ?>" class="mt-5 carousel-caption-btn btn text-white pr-5 pl-5">Read More</a>
          </div>
        </div>
      <?php endwhile; ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>