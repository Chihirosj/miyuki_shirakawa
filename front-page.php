<?php get_header();?>
  <section id="biography" class="box">
    <div class="biography_title fadein">
      Biography
    </div>
    <div class="biography_img fadein">
      <img src="<?php echo get_template_directory_uri(); ?>/img/photo-1.jpg" class="img-fluid" alt="">
    </div>
    <div class="bg_orange fadein">
    </div>
    <div class="introduction fadein">
      <h3>白川深雪</h3>
      <span></span>
      <p>ドイツ、ポーランド、ウイーンで演奏活動をし<br>現在は地元北九州に拠点を置くソプラノオペラ歌手</p>
      <div class="mx-5">
        <a href="<?php echo home_url('/biography'); ?>" class=" more_button">Profile</a>
      </div>
    </div>
  </section>

  <section id="news" class="box">
    <div class="container-fluid">
    <div class="bg_flame  d-none d-md-block">
    </div>
        <div class="news_title fadein">
            News
        </div>
        <div class="wrapper-top-img fadein">
          <div class="home_bg">
            <img src="<?php echo get_template_directory_uri(); ?>/img/opera-6.jpg" class="img-fluid" alt="">
          </div>
        </div>
        <ul class="index_p-newsItems fadein">
          <?php
                $news = new WP_Query(array(
                  'posts_per_page' => 3,
                  'post_type' => 'news'
                ));
                while($news->have_posts()){
                  $news->the_post(); ?>
                    <li class="index_p-newsItem">
                      <a href="<?php the_permalink(); ?>">
                        <p class="index_p-newsItem__date"><?php the_time( get_option( 'date_format' ) ); ?></p>
                        <p class="index_p-newsItem__title"><?php the_title(); ?></p>
                      </a>
                  </li>
          <?php }
              wp_reset_postdata();
            ?>
        </ul>
        <div class="news-button">
          <a href="<?php bloginfo('url'); ?>/news/" class=" more_button">read more</a>
      </div>
    </div>
  </section>

  <section id="discography" class="box">
    <div class="container-fluid">
    <div class="bg_flame d-none d-md-block">
    </div>
        <div class="discography_title fadein">
            Discography
        </div>
        <div class="wrapper-top-img d-md-none fadein">
          <div class="home_bg">
            <img src="<?php echo get_template_directory_uri(); ?>/img/photo-3.jpg" class="img-fluid" alt=""> 
          </div>
        </div>
        <div class="row wrap-jackets fadein">
          <?php
                  if (wp_is_mobile()) {
                    $discography = new WP_Query(array(
                      'posts_per_page' => 2,
                      'post_type' => 'discography'
                    ));
                  } else {
                    $discography = new WP_Query(array(
                      'posts_per_page' => 2,
                      'post_type' => 'discography'
                    ));
                  }
                  while($discography->have_posts()){
                    $discography->the_post(); 
          ?>
          <div class="col-4 col-md-3 ml-auto jacket-img">
            <?php 
            if ( has_post_thumbnail() ) { 
                $thumbnail_id = get_post_thumbnail_id();
                $imgUrl = wp_get_attachment_image_src( $thumbnail_id, 'full' );
                echo '<img src="'.$imgUrl[0].'" class="img-fluid" alt="">';
            } 
            ?>
          </div>
          <div class="col-6 col-md-7 mr-auto jacket-top-text">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
          </div>
          <?php }
              wp_reset_postdata();
            ?> 
        </div>
        <div class="discography-button">
          <a href="<?php bloginfo('url'); ?>/discography/" class=" more_button">read more</a>
        </div>
    </div>
  </section>

  <section id="gallery" class="box">
    <div class="container-fluid">
      <div class="bg_flame">
      </div>
        <div class="gallery_title fadein">
          Gallery
        </div>
        <div class="gallery-top-img-1 fadein">
            <img src="<?php echo get_template_directory_uri(); ?>/img/opera-5.jpg" class="img-fluid" alt="">
        </div>
        <div class="gallery-top-img-2 fadein">
            <img src="<?php echo get_template_directory_uri(); ?>/img/opera-7.jpg" class="img-fluid" alt="">
        </div>
        <div class="gallery-button">
          <a href="<?php bloginfo('url'); ?>/gallery/" class="more_button">more gallery</a>
        </div>
    </div>
  </section>

  <section id="video" class="box">
    <div class="container-fluid">
    <div class="bg_flame d-none d-md-block">
    </div>
      <div class="video_title fadein">
        Video
      </div>
      <div class="wrapper-top-img fadein">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/qSx2u6pOfNw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <!-- <img src="<?php //echo get_template_directory_uri(); ?>/img/opera-2.jpg" class="img-fluid"> -->
      </div>
      <div class="video-button">
        <a href="<?php bloginfo('url'); ?>/video/" class="more_button">more video</a>
      </div>
    </div>
  </section>


  <?php get_template_part( 'contact', 'info' ); ?>
  
  <?php get_footer();?>

