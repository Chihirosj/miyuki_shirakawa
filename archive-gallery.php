<?php get_header();?>
<section id="gallery-page">
  <div class="gallery_title scroll_transition">
    <?php echo $post_type = esc_html(get_post_type_object(get_post_type())->name); ?>
  </div>
  <div class="container">
    <?php
          $gallery = new WP_Query(array(
            'posts_per_page' => 10,
            'post_type' => 'gallery'
          ));
          while($gallery->have_posts()){
            $gallery->the_post(); 
            $thumbnail_id = get_post_thumbnail_id();
            $imgUrl = wp_get_attachment_image_src( $thumbnail_id, 'full' );
            ?>
            <a href="<?php the_permalink(); ?>"> 
              <div class="row gallery_margin">
                  <div class="col-12 col-md-5 gallery_wrapped">
                    <?php echo '<img src="'.$imgUrl[0].'" class="img-fluid">' ?>
                  </div>
                  <div class="col-12 col-md-7">
                    <div class="content">
                      <div class="entry-meta">    
                        <span class="entry-date">
                            <?php the_time( get_option( 'date_format' ) ); ?>
                        </span>
                        <span class="entry-author author vcard">
                            <?php the_category(); ?>
                        </span>
                      </div>
                      <h2 class="entry-title">
                        <?php the_title(); ?>
                      </h2>
                    </div>
                  </div>
              </div>
            </a> 
    <?php }
      wp_reset_postdata();
      ?>

    <div class="pagenavi">
            <?php
                global $wp_rewrite;
                $paginate_base = get_pagenum_link(1);
                if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
                    $paginate_format = '';
                    $paginate_base = add_query_arg('paged', '%#%');
                } else {
                    $paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
                    user_trailingslashit('page/%#%/', 'paged');
                    $paginate_base .= '%_%';
                }
                echo paginate_links( array(
                    'base' => $paginate_base,
                    'format' => $paginate_format,
                    'prev_text' => '前のページ',
                    'next_text' => '次のページ',
                    'total' => $wp_query->max_num_pages,
                    'mid_size' => 2,
                    'current' => ($paged ? $paged : 1),
                ));
            ?>
    </div>
  </div>
</section>
<?php get_footer();?>