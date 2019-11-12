<?php get_header();?>
  

  <section id="video-page">
    <div class="video_title">
      Video
    </div>
    <div class="container">
              <?php if ( have_posts() ) : ?>
                 <?php while( have_posts() ) : the_post(); ?>
                  <div class="content">
                    <div class="entry-meta">    
                        <span class="entry-date">
                          <a href="<?php the_permalink(); ?>">
                            <?php the_time( get_option( 'date_format' ) ); ?>
                          </a>
                        </span>
                        <span class="entry-author author vcard">
                          <a href="<?php the_permalink(); ?>" rel="author">
                          <?php the_category(); ?>
                          </a>
                        </span>
                    </div>
                    <h2 class="entry-title">
                        <?php the_title(); ?>
                    </h2>
                    <div class="entry-content">

                      <?php the_content(); ?>
                    </div>
                  </div>
                  <?php
                endwhile;
              endif;
              ?>
              <div class="back-button">
                <div class="row no-gutters">
                  <div class="col-md-3 m-auto">
                    <a href="<?php echo get_post_type_archive_link( 'video' ); ?>" class="more_button">一覧に戻る</a>
                  </div>
                </div>
              </div>
     </div>
  </section>

  

  <?php wp_footer(); ?>

</body>
</html>
