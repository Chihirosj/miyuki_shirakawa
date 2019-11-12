<?php get_header();?>
<section id="video-page">
    <div class="video_title scroll_transition">
    <?php echo $post_type = esc_html(get_post_type_object(get_post_type())->name); ?>
    </div>
    <div class="container">
      <div class="row">
        <?php
          $video = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'video'
          ));
          while($video->have_posts()){
            $video->the_post(); 
            $thumbnail_id = get_post_thumbnail_id();
            $imgUrl = wp_get_attachment_image_src( $thumbnail_id, 'full' );
            ?>

          <div class="col-md-4">
            <div class="wrap_element">
              <a href="<?php the_permalink(); ?>">
                <div class="video_wrapped">
                      <?php 
                        if ( has_post_thumbnail() ) { 
                          echo '<img src="'.$imgUrl[0].'" class="img-fluid">';
                        } 
                        ?>
                </div>
                <div class="date_title">
                    <dl><?php the_time( get_option( 'date_format' ) ); ?></dl>
                    <dt><?php the_title(); ?></dt>
                </div>
              </a>
            </div>
          </div>
        <?php }
        wp_reset_postdata();
      ?>
    </div>
    </div>
  </section>
  <?php get_footer();?>
