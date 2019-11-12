<?php get_header();?>
<section id="archive-page">
    <div class="archive_title">
    <?php echo $post_type = esc_html(get_post_type_object(get_post_type())->name); ?>
    </div>
    <div class="container-fluid">
      <div class="row no-gutters">

    <?php if($post_type === 'video') : ?>
      <?php
          $video = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'video'
          ));
          while($video->have_posts()){
            $video->the_post(); ?>

        <div class="col-md-4">
          <div class="wrap_element">
            <a href="<?php the_permalink(); ?>">
              <div class="video-content">
              <?php 
                if ( has_post_thumbnail() ) { 
                  the_post_thumbnail('large', 'class=thumbnail_size');
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
    <?php endif; ?>

      </div>
    </div>
  </section>

  <?php wp_footer(); ?>

</body>
</html>