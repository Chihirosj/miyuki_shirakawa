<?php get_header();?>
<section id="news-page">
    <div class="news_title scroll_transition">
    <?php echo $post_type = esc_html(get_post_type_object(get_post_type())->name); ?>
    </div>
    <div class="container">
      <div class="row no-gutters">
      <?php
          $news = new WP_Query(array(
            'posts_per_page' => 10,
            'post_type' => 'news'
          ));
          while($news->have_posts()){
            $news->the_post(); ?>
            <div class="col-12">
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
                <div class="entry-content">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
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
    </div>
  </section>
  <?php get_footer();?>