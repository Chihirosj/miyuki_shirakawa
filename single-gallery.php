<?php get_header();?>
<section id="gallery-singlepage">

<div class="container">
  <div class="gallery_title">
    <h1><?php echo get_the_title(); ?></h1>
  </div>
  <div class="gallery_date">
    <?php
    $date= SCF::get( 'date' );
    echo $date;
    ?></div>
    <div class="row mb-4">
      <?php
        $repeat_group = SCF::get( 'gallerybox' );
        foreach ( $repeat_group as $field_name => $field_value ) { 
        $field = wp_get_attachment_image_src($field_value['gallery_photo'],'large');
        $imgUrl = esc_url($field[0]);
        $ficcaption = $field_value['gallery_caption'];
        ?>
        <div class="col-12 col-md-6 col-lg-4">      
          <figure class="gallery_margin">
              <a class="d-block mb-4" data-fancybox="images">
                <div class="gallery_wrapped">
                  <img src="<?php echo $imgUrl; ?>" class="img-fluid" data-caption="<?php echo $ficcaption; ?>">
                </div>
              </a>
              <figcaption>
                  <h6><?php echo $ficcaption; ?></h6>
              </figcaption>
          </figure>
        </div>
      <?php }
        ?>
    </div>
    <div class="back-button">
                <div class="row no-gutters">
                  <div class="col-md-3 m-auto">
                    <a href="<?php echo get_post_type_archive_link( 'gallery' ); ?>" class="more_button">一覧に戻る</a>
                  </div>
                </div>
              </div>
  </div>
</section>
<?php get_footer();?>