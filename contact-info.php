<?php
/**
 * Template Name: コンタクト
 **/
?>

<?php 
    $page_id = 61;
    $page = get_post( $page_id );
  ?>

<section id="contact" class="box">
    <div class="container-fluid">
      <div class="bg_flame d-none d-lg-block">
      </div>
        <div class="contact_title">
          <?php echo $page->post_title; ?>
        </div>
        <div class="contact_format">
          <?php echo do_shortcode( '[contact-form-7 id="58" title="form_2"]' ); ?>
        </div>
    </div>
  </section>
  
