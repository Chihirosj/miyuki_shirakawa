<?php get_header();?>
<section id="discography-page">
    <div class="discography_title scroll_transition">
    <?php echo $post_type = esc_html(get_post_type_object(get_post_type())->name); ?>
    </div>
    <div class="container">
      <div class="row">
      <?php
          $discography = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'discography'
          ));
          while($discography->have_posts()){
            $discography->the_post(); ?>

        <div class="col-md-4">
          <div class="wrap_element">
              <div class="video-content">
              <?php 
                if ( has_post_thumbnail() ) { 
                  the_post_thumbnail('medium');
                } 
                ?>
              </div>
              <div class="date_title">
                  <dl><?php the_time( get_option( 'date_format' ) ); ?></dl>
                  <dt><?php the_title(); ?></dt>
                  <dt><?php the_content(); ?></dt>
              </div>
          </div>
        </div>
        <?php }
        wp_reset_postdata();
      ?>
    </div>
    </div>
  </section>
  <?php get_footer();?>